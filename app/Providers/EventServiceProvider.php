<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use Aacotroneo\Saml2\Events\Saml2LoginEvent;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\VerifyLoginToken;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    /*public function __construct()
    {
            
    }*/
    public function boot()
    {
        Event::listen('Aacotroneo\Saml2\Events\Saml2LoginEvent', function (Saml2LoginEvent $event) {         
        $messageId = $event->getSaml2Auth()->getLastMessageId();
        $user = $event->getSaml2User();
        $emailUser = $user->getUserId();
        $sesionIndex = $user->getSessionIndex();
        $key = hex2bin(env('KEYENCRIPT'));
        $iv =  hex2bin(env('IVENCRIPT'));
        $encript = openssl_encrypt($emailUser, 'AES-128-CBC', $key, OPENSSL_ZERO_PADDING, $iv);
        $nowFive = Carbon::now()->addMinutes(1);
        $nowMenusFive = Carbon::now()->subMinute(1);
        $query  = VerifyLoginToken::where('hast_email' , $emailUser)->where('type_register' , 0)->whereBetween('created_at', [$nowMenusFive, $nowFive])->first();
        //  dd($emailUser, 'chao2222');
	    if(!empty($query)){
		        //dd($query);
                $newLogin = new VerifyLoginToken();
                $newLogin->hast_email =  $emailUser;
                $newLogin->app_token  =  $query->app_token;
                $newLogin->token_user  =  $query->token_user;
                $newLogin->type_register  = 1;
                $newLogin->save();

                $userLog = User::where('email' , $emailUser)->first();
                $userLog->init_adfs = 1;
		            $userLog->url_imagen = $sesionIndex;
                $userLog->save();
                //dd($sesionIndex);
            }

            $userData = [
                'id' => $user->getUserId(),
                'attributes' => $user->getAttributes(),
                'assertion' => $user->getRawSamlAssertion()
            ];
            
            //return Redirect::to('http://localhost:3000/Init');
            //dd($userData);
        });
	
        /*Event::listen('Aacotroneo\Saml2\Events\Saml2LogoutEvent', function ($event) {
            Auth::logout();
            Session::save();
        });*/
    }
}
