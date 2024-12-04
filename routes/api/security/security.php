<?php 
use App\Http\Controllers\Security\UsersController;
use App\Http\Controllers\Security\RolesController;
use App\Http\Controllers\Auth\AuthController;

//Route::get("/get/users", [UsersController::class, "getAllUser"]);
/*Mod Usuarios*/
Route::get('/info_user', [AuthController::class, 'infoUser']);
Route::get('/checkSecion', [UsersController::class, 'checkSecion']);
Route::get("/get/user_actives", [UsersController::class, "get_users_actives"])->middleware('checkpermisionroute:"210"');
Route::get("/get/user_inactive", [UsersController::class, "get_users_inactive"])->middleware('checkpermisionroute:"210"');
Route::get("/get/user_deteted", [UsersController::class, "get_users_deleted"])->middleware('checkpermisionroute:"210"');
Route::post("/post/create_user", [UsersController::class, "create_user"])->middleware('checkpermisionroute:"200"');
Route::get("/get/edit_user/{id}", [UsersController::class, "get_edit_user"])->middleware('checkpermisionroute:"202"');
Route::put("/post/update_user/{id}", [UsersController::class, "update_user"])->middleware('checkpermisionroute:"202"');
//Route::post("/post/status_user", [UsersController::class, "status_user"]);
Route::put("/post/desactivate/{id}", [UsersController::class, "desactivate_user"])->middleware('checkpermisionroute:"504"');
Route::put("/post/restore/{id}", [UsersController::class, "restore_user"])->middleware('checkpermisionroute:"502"');
Route::put("/post/activate/{id}", [UsersController::class, "activate_user"])->middleware('checkpermisionroute:"503"');
Route::delete("/post/delete_user/{id}", [UsersController::class, "delete_user"])->middleware('checkpermisionroute:"502"');

/*Mod Roles*/
Route::get("/get/roles_actives", [RolesController::class, "get_roles_actives"])->middleware('checkpermisionroute:"211"');
Route::get("/get/roles_inactive", [RolesController::class, "get_roles_inactive"])->middleware('checkpermisionroute:"211"');
Route::get("/get/roles_deleted", [RolesController::class, "get_roles_deleted"])->middleware('checkpermisionroute:"211"');
Route::get("/get/permission", [RolesController::class, "get_permissions"]);
Route::post("/post/create_rol", [RolesController::class, "create_rol"])->middleware('checkpermisionroute:"201"');
Route::get("/get/edit_rol/{id}", [RolesController::class, "get_edit_rol"])->middleware('checkpermisionroute:"509"');
Route::put("/post/update_rol/{id}", [RolesController::class, "update_rol"])->middleware('checkpermisionroute:"203"');
Route::post("/post/status_rol", [RolesController::class, "status_rol"]);
Route::delete("/post/delete_rol/{id}", [RolesController::class, "delete_rol"])->middleware('checkpermisionroute:"510"');
Route::put("/post/rol_desactivate/{id}", [RolesController::class, "desactivate_rol"])->middleware('checkpermisionroute:"511"');
Route::put("/post/rol_activate/{id}", [RolesController::class, "activate_rol"])->middleware('checkpermisionroute:"511"');


/* proveedor*/

Route::get("/get/proveedor/user_actives", [UsersController::class, "get_users_actives_proveedor"])->middleware('checkpermisionroute:"514"');
Route::get("/get/proveedor/user_inactive", [UsersController::class, "get_users_inactive_proveedor"])->middleware('checkpermisionroute:"514"');
Route::get("/get/proveedor/user_deteted", [UsersController::class, "get_users_deleted_proveedor"])->middleware('checkpermisionroute:"514"');
Route::get("/get/proveedor/edit_user/{id}", [UsersController::class, "get_edit_user_proveedor"])->middleware('checkpermisionroute:"501"');
Route::post("/post/proveedor/create_user", [UsersController::class, "create_user_proveedor"])->middleware('checkpermisionroute:"500"');
Route::put("/post/proveedor/update_user/{id}", [UsersController::class, "update_user_proveedor"])->middleware('checkpermisionroute:"501"');

Route::get("/get/roles_actives_proveedor", [RolesController::class, "get_roles_actives_proveedor"])->middleware('checkpermisionroute:"513"');
Route::get("/get/roles_inactive_proveedor", [RolesController::class, "get_roles_inactive_proveedor"])->middleware('checkpermisionroute:"513"');
Route::get("/get/roles_deleted_proveedor", [RolesController::class, "get_roles_deleted_proveedor"])->middleware('checkpermisionroute:"513"');
Route::get("/get/permission_proveedor", [RolesController::class, "get_permissions_proveedor"])->middleware('checkpermisionroute:"513"');
Route::post("/post/create_rol_proveedor", [RolesController::class, "create_rol_proveedor"])->middleware('checkpermisionroute:"508"');
Route::put("/post/update_rol_proveedor/{id}", [RolesController::class, "update_rol_proeedor"])->middleware('checkpermisionroute:"509"');

