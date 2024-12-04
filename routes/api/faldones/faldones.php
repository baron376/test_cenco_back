<?php 
use App\Http\Controllers\Security\UsersController;
use App\Http\Controllers\Faldones\FaldonesController;
use App\Http\Controllers\Faldones\PlantillasController;
use App\Http\Controllers\Faldones\FaldonesExpressController;

use App\Http\Controllers\GeneralObetenerController;

Route::post("/post/store_campana_faldones", [FaldonesController::class, "store_campana_faldones"])->middleware('checkpermisionroute:"402"');
Route::delete("/delete/delete_campana/{id}", [FaldonesController::class, "delete_campana"])->middleware('checkpermisionroute:"407"');
Route::get("/get/formato_faldones", [FaldonesController::class, "get_formato_faldones"])->middleware('checkpermisionroute:"401"');
Route::get("/get/plantilla_faldones", [FaldonesController::class, "get_plantilla_faldones"])->middleware('checkpermisionroute:"408"');
Route::get("/get/edit_campana_faldones/{id}", [FaldonesController::class, "get_edit_campana_faldones"])->middleware('checkpermisionroute:"404.401"');
Route::get("/get/edit_campana_faldones_ultimo_archivo/{id}", [FaldonesController::class, "get_edit_campana_faldones_ultimo_archivo"])->middleware('checkpermisionroute:"401"');
Route::get("/get/campana_faldones", [FaldonesController::class, "get_campana_faldones"])->middleware('checkpermisionroute:"401"');
Route::get("/get/campana_faldones_dashboard", [FaldonesController::class, "get_campana_faldones_dashboard"])->middleware('checkpermisionroute:"401.505"');
Route::get("/get/campana_faldones_deleted", [FaldonesController::class, "get_campana_faldones_deleted"])->middleware('checkpermisionroute:"401"');
Route::get("/get/campana_faldones_espera", [FaldonesController::class, "get_campana_faldones_espera"])->middleware('checkpermisionroute:"401"');
Route::get("/get/campana_faldones_vigente", [FaldonesController::class, "get_campana_faldones_vigente"])->middleware('checkpermisionroute:"401"');
Route::get("/get/campana_faldones_vencida", [FaldonesController::class, "get_campana_faldones_vencida"])->middleware('checkpermisionroute:"401"');
Route::get("/get/campana_faldones_inactiva", [FaldonesController::class, "get_campana_faldones_inactiva"])->middleware('checkpermisionroute:"401"');
Route::get("/get/save_archivo_faldon/{id}/{archivo}", [FaldonesController::class, "save_archivo_faldon"])->middleware('checkpermisionroute:"402"');
Route::put("/put/update_campana_faldones/{id}", [FaldonesController::class, "update_campana_faldones"])->middleware('checkpermisionroute:"404"');

Route::get("/get/plantillas", [PlantillasController::class, "get_plantillas"])->middleware('checkpermisionroute:"408"');
Route::get("/get/plantillas_inactivas", [PlantillasController::class, "get_plantillas_inactivas"])->middleware('checkpermisionroute:"408"');
Route::put("/put/plantilla_desactivate/{id}", [PlantillasController::class, "desactivate_plantilla"])->middleware('checkpermisionroute:"410"');
Route::put("/put/plantilla_activate/{id}", [PlantillasController::class, "activate_plantilla"])->middleware('checkpermisionroute:"410"');

Route::get("/get/get_faldones_express", [FaldonesExpressController::class, "get_faldones_express"])->middleware('checkpermisionroute:"412"');
Route::get("/get/get_faldones_express_dashboard", [FaldonesExpressController::class, "get_faldones_express_dashboard"])->middleware('checkpermisionroute:"412"');
Route::get("/get/get_faldones_express_deleted", [FaldonesExpressController::class, "get_faldones_express_deleted"])->middleware('checkpermisionroute:"412"');
Route::post("/post/store_faldones_express", [FaldonesExpressController::class, "store_faldones_express"])->middleware('checkpermisionroute:"413"');
Route::get("/get/details_faldon/{id}", [FaldonesExpressController::class, "get_details_faldon_express"])->middleware('checkpermisionroute:"416"');
Route::put("/put/update_faldon_express/{id}", [FaldonesExpressController::class, "update_faldon_express"])->middleware('checkpermisionroute:"414"');
Route::delete("/delete/delete_faldon/{id}", [FaldonesExpressController::class, "delete_faldon"])->middleware('checkpermisionroute:"417"');

Route::get("/get/generar_faldon_express/{id}", [FaldonesExpressController::class, "generar_faldon"])->middleware('checkpermisionroute:"402"');

Route::get("/get/generar_faldon_campana/{id}", [FaldonesController::class, "generar_faldon"])->middleware('checkpermisionroute:"402"');

Route::get("/get/generar_faldones_campana/{id}", [FaldonesController::class, "generar_faldones"])->middleware('checkpermisionroute:"402"');

Route::get("/get/stock_productos/{idCampana}/{idSala}", [FaldonesController::class, "stock_productos"])->middleware('checkpermisionroute:"406"');

Route::get("/get/download_stock_campana/{idCampana}/{idSala}", [FaldonesController::class, "download_stock_campana"])->middleware('checkpermisionroute:"401"');

Route::get("/get/desactivate_stock_campana_sala/{idStock}", [FaldonesController::class, "desactivate_stock_campana_sala"])->middleware('checkpermisionroute:"401"');

Route::get("/get/get_umb_faldones", [FaldonesExpressController::class, "get_umb_faldones"])->middleware('checkpermisionroute:"413"');
