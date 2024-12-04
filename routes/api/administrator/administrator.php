<?php 
use App\Http\Controllers\Security\UsersController;
use App\Http\Controllers\GeneralObetenerController;
use App\Http\Controllers\Administrator\SalasController;
use App\Http\Controllers\Administrator\SesionesController;
use App\Http\Controllers\Administrator\CadenasController;
use App\Http\Controllers\Administrator\MarcasController;
use App\Http\Controllers\Administrator\ProveedoresController;


    /*Mod Salas*/
    Route::post("/post/create_sala", [SalasController::class, "create_sala"])->middleware('checkpermisionroute:"105"');
    Route::get("/get/edit_sala/{id}", [SalasController::class, "get_edit_sala"])->middleware('checkpermisionroute:"106"');
    Route::get("/get/cdg_sala/{id}", [SalasController::class, "get_cdg_sala"])->middleware('checkpermisionroute:"105"');
    Route::put("/put/update_sala/{id}", [SalasController::class, "update_sala"])->middleware('checkpermisionroute:"106"');
    Route::post("/post/status_sala", [SalasController::class, "status_sala"])->middleware('checkpermisionroute:"107"');
    Route::post("/post/delete_sala", [SalasController::class, "delete_sala"])->middleware('checkpermisionroute:"108"');
    Route::get("/get/salas_active", [SalasController::class, "get_salas_active"])->middleware('checkpermisionroute:"114.900.800"');
    Route::get("/get/salas_inactive", [SalasController::class, "get_salas_inactive"])->middleware('checkpermisionroute:"114.900"');
    Route::get("/get/salas_delete", [SalasController::class, "get_salas_delete"])->middleware('checkpermisionroute:"114.900"');
    Route::get("get/get_salas_user/{idUser}",[SalasController::class, "get_salas_user"])->middleware('checkpermisionroute:"114"');
    Route::get("/get/salas_user", [SalasController::class, "salas_user"])->middleware('checkpermisionroute:"114.413.800"');
    Route::get("/get/salas_user_cadena/{idCadena}", [SalasController::class, "get_salas_user_cadena"])->middleware('checkpermisionroute:"300.301.900.901"');
    Route::get("get/salas_campana_faldon_user/{idCampana}",[SalasController::class, "salas_campana_faldon_user"])->middleware('checkpermisionroute:"114.406"');
    Route::get("get/salas_for_cadenas/{idCampana}",[SalasController::class, "salas_for_cadenas"])->middleware('checkpermisionroute:"105"');
    Route::put("/put/update_sala_cupo_total/{id}", [SalasController::class, "update_sala_cupo_total"])->middleware('checkpermisionroute:"106"');
    Route::post("/post/create_sala_seccion_cupo", [SalasController::class, "create_sala_seccion_cupo"])->middleware('checkpermisionroute:"105"');
    Route::get("/get/get_secciones_cupo/{id}", [SalasController::class, "get_secciones_cupo"])->middleware('checkpermisionroute:"115"');
    Route::delete("/delete/delete_sala_seccion_grupo/{id}", [SalasController::class, "delete_sala_seccion_grupo"])->middleware('checkpermisionroute:"112"');
    Route::get("/get/get_sala_seccion_cupo/{idSala}/{idSeccion}", [SalasController::class, "get_sala_seccion_cupo"])->middleware('checkpermisionroute:"115"');
    /*Mod Sesiones*/
    Route::post("/post/create_sesion", [SesionesController::class, "create_sesion"])->middleware('checkpermisionroute:"109"');
    Route::get("/get/edit_sesion/{id}", [SesionesController::class, "get_edit_sesion"])->middleware('checkpermisionroute:"110"');
    Route::get("/get/numero_sesion/{id}", [SesionesController::class, "get_numero_sesion"])->middleware('checkpermisionroute:"115"');
    Route::put("/put/update_sesion/{id}", [SesionesController::class, "update_sesion"])->middleware('checkpermisionroute:"110"');
    Route::post("/post/status_sesion", [SesionesController::class, "status_sesion"])->middleware('checkpermisionroute:"111"');
    Route::post("/post/delete_sesion", [SesionesController::class, "delete_sesion"])->middleware('checkpermisionroute:"115"');

    Route::get("/get/sesion_active", [SesionesController::class, "get_sesion_active"])->middleware('checkpermisionroute:"115.413"');
    Route::get("/get/sesion_inactive", [SesionesController::class, "get_sesion_inactive"])->middleware('checkpermisionroute:"115.413"');
    Route::get("/get/sesion_delete", [SesionesController::class, "get_sesion_delete"])->middleware('checkpermisionroute:"115.413"');
    /*Mod Cadenas*/
    Route::post("/post/create_cadena", [CadenasController::class, "create_cadena"])->middleware('checkpermisionroute:"100"');
    Route::get("/get/edit_cadena/{id}", [CadenasController::class, "get_edit_cadena"])->middleware('checkpermisionroute:"101"');
    Route::get("/get/nombre_cadena/{CadenaName}", [CadenasController::class, "get_nombre_cadena"])->middleware('checkpermisionroute:"102.212"');
    Route::put("/put/update_cadena/{id}", [CadenasController::class, "update_cadena"])->middleware('checkpermisionroute:"101"');
    Route::post("/post/status_cadena", [CadenasController::class, "status_cadena"])->middleware('checkpermisionroute:"102"');

    Route::post("/post/delete_cadena", [CadenasController::class, "delete_cadena"])->middleware('checkpermisionroute:"104"');
    Route::get("/get/cadenas_active", [CadenasController::class, "get_cadenas_active"])->middleware('checkpermisionroute:"102"');
    Route::get("/get/cadenas_inactive", [CadenasController::class, "get_cadenas_inactive"])->middleware('checkpermisionroute:"102"');
    Route::get("/get/cadenas_delete", [CadenasController::class, "get_cadenas_delete"])->middleware('checkpermisionroute:"102"');
    Route::get("get/get_cadenas_user/{idUser}",[CadenasController::class, "get_cadenas_user"])->middleware('checkpermisionroute:"102"');
    Route::get("/get/cadenas_user", [CadenasController::class, "cadenas_user"])->middleware('checkpermisionroute:"300.301.900.901.102.701"');

    


    /*Mod MARCAS*/
    Route::post("/post/create_marca", [MarcasController::class, "create_marca"])->middleware('checkpermisionroute:"212"');
    Route::get("/get/edit_marca/{id}", [MarcasController::class, "get_edit_marca"])->middleware('checkpermisionroute:"216"');
    Route::get("/get/nombre_marca/{CadenaName}", [MarcasController::class, "get_nombre_marca"])->middleware('checkpermisionroute:"216"');
    Route::put("/put/update_marca/{id}", [MarcasController::class, "update_marca"])->middleware('checkpermisionroute:"213"');
    Route::post("/post/status_marca", [MarcasController::class, "status_marca"])->middleware('checkpermisionroute:"217"');
    Route::post("/post/delete_marca", [MarcasController::class, "delete_marca"])->middleware('checkpermisionroute:"213"');
    Route::get("/get/marca_active", [MarcasController::class, "get_marca_active"])->middleware('checkpermisionroute:"217"');
    Route::get("/get/marca_inactive", [MarcasController::class, "get_marca_inactive"])->middleware('checkpermisionroute:"217"');
    Route::get("/get/marca_delete", [MarcasController::class, "get_marca_delete"])->middleware('checkpermisionroute:"217"');
    Route::get("/get/marca_espera", [MarcasController::class, "get_marca_espera"])->middleware('checkpermisionroute:"217"');
    /*Prueba para push */

    Route::post("/post/create_proveedor", [ProveedoresController::class, "create_proveedor"])->middleware('checkpermisionroute:"220"');
    Route::delete("/post/proveedor_delete/{id}", [ProveedoresController::class, "delete_proveedor"])->middleware('checkpermisionroute:"221"');
    Route::get("/get/proveedores_delete", [ProveedoresController::class, "get_proveedores_delete"])->middleware('checkpermisionroute:"221"');
    
    
