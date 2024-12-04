<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\VerifyLoginToken;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function logIn(Request $request)
    {
        try{
            $request->validate(
                [
                    'email'    => 'required|string',
                ]
            );
            $key = hex2bin(env('KEYENCRIPT'));
            $iv =  hex2bin(env('IVENCRIPT'));
            $encryhEmail  = $request->email;
	        $token = $encryhEmail;
            $decrypted = openssl_decrypt($encryhEmail, 'AES-128-CBC', $key, OPENSSL_ZERO_PADDING, $iv);
            //return $request->email.'----------'.$decrypted;
            $user = User::where('email' , $decrypted)->with('roles')->with('cadenas')->with('salas')->first();
            //\Log::info($request->email);
            //\Log::info("souyyyyy el beta ---------------  ".$decrypted);
            //\Log::info($user);
            //\Log::info($request->captchaValue);
            
            if(!$user||!$decrypted||!$this->validate_captcha($request->captchaValue)){
                return response()->json(['error' => 'Invalid credentials'], 401);
            }else{
                    $loginPre = Auth::guard()->login($user);
                    if (Auth::check()) {
                        $request->session()->regenerate();
                        $newLogin = new VerifyLoginToken();
                        $newLogin->hast_email  = $decrypted;
                        $newLogin->app_token  =  request()->cookie('mzzo_session');
                        $newLogin->token_user  =  $token;
                        $newLogin->type_register  = 0;
                        $newLogin->save();
                        $user->init_adfs = 0;
                        $user->save();
                        $userPersonalizado = collect(['email'=>$user->email]);
                        return response()->json([
                            'user'=> $userPersonalizado
                        ]);
                    }
            }
        }
        catch (\Exception $e){
            \Log::info($e->getMessage());
            return $e;
        }

        
        //return response()->json(['error' => 'Invalid credentials'], 401);
    }
    public function logInProveedores(Request $request)
    {

        $request->validate(
            [
                'email'    => 'required|string',
                'password' => 'required|string',
            ]
        );
        \Log::info($request->captchaValue);
        $key = hex2bin(env('KEYENCRIPT'));
        $iv =  hex2bin(env('IVENCRIPT'));
        $encryhEmail  = $request->email;
        $decryptedEmail = openssl_decrypt($encryhEmail, 'AES-128-CBC', $key, OPENSSL_ZERO_PADDING, $iv);
        $encryPassword = $request->password;
        $decryptedPassword = openssl_decrypt($encryPassword, 'AES-128-CBC', $key, OPENSSL_ZERO_PADDING, $iv);
        //return $decryptedEmail.'----------'.$decryptedPassword;
        //if (Auth::guard()->attempt($request->only('email', 'password'))) {
        if ($decryptedEmail&&Auth::guard()->attempt(['email'=>$decryptedEmail , 'password'=>$decryptedPassword])&&$this->validate_captcha($request->captchaValue)) {
            $request->session()->regenerate();
            $user = User::where('email' , $decryptedEmail)->with('roles')->with('cadenas')->with('salas')->with('usuario_password')->firstOrfail();
	    $user = $user->makeVisible('remember_token')->toArray();           
 return response()->json([
                'user'=> $user
            ]);
        }
        return response()->json(['error' => 'Invalid credentials'], 401);
    }

    public function logOut(Request $request)
    {
        Auth::guard()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return response()->json([], 204);
    }

    public function infoUser(Request $request){
        $user = User::where('id' , $request->user()->id)->with('roles')->with('cadenas')->with('salas')->with('usuario_password')->firstOrfail();
        return $user;
    }

    public function init(Request $request){
        $user = User::where('id' , $request->user()->id)->with('roles')->with('cadenas')->with('salas')->with('usuario_password')->firstOrfail();
        $token = $user->createToken('auth_token')->plainTextToken;
        \Log::info('asdasdass');
        \Log::info($token);
        return response()->json([
            'access_token' => $token,
            'user' => $user
        ]);
    }
    
    public function checkSecion(Request $request){
        return Auth::check();
    }

    public function validate_captcha($captcha){

        $post_data = http_build_query(
            array(
                'secret' => env('RECAPTCHA_SECRET_KEY'),
                'response' => $captcha,
                'remoteip' => $_SERVER['REMOTE_ADDR']
            )
        );

        $opts = array('http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-type: application/x-www-form-urlencoded',
                'content' => $post_data
            )
        );

        $context  = stream_context_create($opts);
        $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
        $result = json_decode($response);
        // \Log::info($response);
        
        if (!$result->success) {
            return false;
        }
        
        else{
            return true;
        }
    }

    public function infoRolesPermissions(Request $request){
        //$user = User::where('id' , Auth::user()->id)->with('roles')->firstOrfail();
        dd(Auth::user());
        return $user->roles;
    }
}
