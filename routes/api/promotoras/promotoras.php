<?php 
use App\Http\Controllers\Security\UsersController;
use App\Http\Controllers\Faldones\FaldonesController;
use App\Http\Controllers\GeneralObetenerController;
use App\Http\Controllers\Promotoras\PromotorasController;


Route::get("/get/promotoras", [PromotorasController::class, "get_promotoras"])->middleware('checkpermisionroute:"515.906.505"');
Route::get("/get/promotoras_dashboard", [PromotorasController::class, "get_promotoras_dashboard"])->middleware('checkpermisionroute:"900.901.902.903.904.905.906.907"');
Route::post("/post/promotoras/store", [PromotorasController::class, "create_promotoras"])->middleware('checkpermisionroute:"900"');
Route::get("/get/get_edit_promotoras/{id}", [PromotorasController::class, "get_edit_promotoras"])->middleware('checkpermisionroute:"515.505"');
Route::put("/put/update_promotoras/{id}", [PromotorasController::class, "update_promotoras"])->middleware('checkpermisionroute:"901"');
Route::delete("/delete/promotora/{id}", [PromotorasController::class, "delete_promotoras"])->middleware('checkpermisionroute:"905"');
Route::put("/put/promotora_activate/{id}", [PromotorasController::class, "promotoras_activate"]);
Route::put("/put/promotora_desactivate/{id}", [PromotorasController::class, "promotoras_desactivate"]);
Route::get("/get/promotora_pendiente", [PromotorasController::class, "promotoras_pendiente"]);
Route::put("/put/up_muebles_promotoras/{id}", [PromotorasController::class, "up_muebles_promotoras"])->middleware('checkpermisionroute:"907"');
Route::get("/get/muebles_promotoras/{id}", [PromotorasController::class, "get_muebles_promotoras"])->middleware('checkpermisionroute:"515.907"');
Route::put("/put/aprobar_promotoras", [PromotorasController::class, "aprobar_promotoras"])->middleware('checkpermisionroute:"902"');
Route::put("/put/rechazar_promotoras", [PromotorasController::class, "rechazar_promotoras"])->middleware('checkpermisionroute:"902"');
Route::get("/get/promotoras_delete", [PromotorasController::class, "get_promotoras_elimninadas"])->middleware('checkpermisionroute:"515.906.505"');
Route::get("/get/comentarios_campanas_promotoras/{id}", [PromotorasController::class, "get_comentarios_promotoras"])->middleware('checkpermisionroute:"515.505"');

