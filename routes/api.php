<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampanaProveedor\CampanaProveedorController;
use App\Http\Controllers\CampanaProveedor\CampanaProveedorNewController;
use App\Http\Controllers\Promotoras\PromotorasController;
use App\Http\Controllers\Mantencion\MantencionController;
use App\Http\Controllers\Security\UsersController;
use App\Http\Controllers\Auth\AuthController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get("/get/campana_proveedor_pdf/{idCampanaProveedor}", [CampanaProveedorController::class, "generar_campana_proveedor_pdf"]);
Route::get("/get/campana_promotora_pdf/{idCampanaPromotora}", [PromotorasController::class, "generar_campana_promotoras_pdf"]);
Route::get("/get/mantencion_pdf/{idMantencion}", [MantencionController::class, "generar_mantencion_pdf"]);
Route::post("/post/get_rebember_password_user", [UsersController::class, "get_rebember_password_user"]);
Route::post("/post/get_user_data_token", [UsersController::class, "get_user_data_token"]);
Route::post("/post/get_password", [UsersController::class, "get_password"]);
Route::post("/post/update_password_proveedores", [UsersController::class, "update_password_proveedores"]);
Route::get("/get/campana_proveedor_new_pdf/{idCampanaProveedor}", [CampanaProveedorNewController::class, "generar_campana_proveedor_pdf"]);
Route::get("/get/campana_excel/{idCampana}", [CampanaProveedorNewController::class, "generar_campana_excel"]);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->group(function(){
    require (__DIR__ . '/api/security/security.php');
    require (__DIR__ . '/api/general/general.php');
    require (__DIR__ . '/api/administrator/administrator.php');
    require (__DIR__ . '/api/faldones/faldones.php');
    require (__DIR__ . '/api/campana_proveedor/campana_proveedor.php');
    require (__DIR__ . '/api/promotoras/promotoras.php');
    require (__DIR__ . '/api/campana_interna/campana_interna.php');
    require (__DIR__ . '/api/mantencion/mantencion.php');
    require (__DIR__ . '/api/incidencias/incidencias.php');
    require (__DIR__ . '/api/repositorio_unificado/repositorio_unificado.php');
    require (__DIR__ . '/api/campana_proveedor_new/campana_proveedor.php');
});
Route::get("/testPermisions", [AuthController::class, "infoRolesPermissions"]);
