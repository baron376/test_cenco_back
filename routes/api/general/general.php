<?php 
use App\Http\Controllers\Security\UsersController;
use App\Http\Controllers\GeneralObetenerController;

//Route::get("/get/users", [UsersController::class, "getAllUser"]);
Route::post("/post/create_toke", [GeneralObetenerController::class, "create_toke"]);
Route::get("/get/verificar_token", [GeneralObetenerController::class, "get_verificar_token"]);
Route::get("/get/users", [GeneralObetenerController::class, "get_users"])->middleware('checkpermisionroute:"210"');
Route::get("/get/users_detail/{id}", [GeneralObetenerController::class, "get_users_detail"]);
Route::get("/get/roles", [GeneralObetenerController::class, "get_roles"])->middleware('checkpermisionroute:"211"');
Route::get("/get/proveedor/roles", [GeneralObetenerController::class, "get_roles_proveedor"])->middleware('checkpermisionroute:"513"');
Route::get("/get/cadenas", [GeneralObetenerController::class, "get_cadenas"])->middleware('checkpermisionroute:"113.300.301.700"');
Route::get("/get/cadenas_qr", [GeneralObetenerController::class, "get_cadenas_qr"])->middleware('checkpermisionroute:"113.300"');
Route::get("/get/salas", [GeneralObetenerController::class, "get_salas"])->middleware('checkpermisionroute:"114"');
Route::get("/get/salas/{id_cadena}", [GeneralObetenerController::class, "get_salas_for_cadena"]);
Route::get("/get/modulos", [GeneralObetenerController::class, "get_modulos"])->middleware('checkpermisionroute:"513"');
Route::get("/get/sesiones", [GeneralObetenerController::class, "get_sesiones"])->middleware('checkpermisionroute:"115.300.301"');
Route::get("/get/regiones", [GeneralObetenerController::class, "get_regiones"])->middleware('checkpermisionroute:"114.105.106"');
Route::get("/get/comunas/{id}", [GeneralObetenerController::class, "get_comunas"]);
Route::get("/get/comunas_ByRegion/{id}", [GeneralObetenerController::class, "get_comunas_ByRegion"]);
Route::get("/get/espacioByseccion/{id}", [GeneralObetenerController::class, "get_espacios_exibhicion_by_seccion"]);
Route::get("/get/proveedores", [GeneralObetenerController::class, "get_proveedores"])->middleware('checkpermisionroute:"219.220.301.713"');
Route::get("/get/instaladores", [GeneralObetenerController::class, "get_instaladores"])->middleware('checkpermisionroute:"800.801.802.804.807"');
Route::get("/get/zonas", [GeneralObetenerController::class, "get_zonas"])->middleware('checkpermisionroute:"114.105.106.300.301.302.303.306.700.701.702.706.707.708.709.710.711.712.713.714"');
Route::get("/get/tipo_sala", [GeneralObetenerController::class, "get_tipo_sala"]);
Route::get("/get/zonasExhibicion", [GeneralObetenerController::class, "get_zonas_exhibicion"]);
Route::get("/get/zonasExhibicionByEspacio/{id}", [GeneralObetenerController::class, "get_zonas_exhibicion_by_espacio"]);
Route::get("/get/materialesByZona/{id}", [GeneralObetenerController::class, "get_materiales_by_zona_exhibicion"]);
Route::get("/get/medios", [GeneralObetenerController::class, "get_medios"])->middleware('checkpermisionroute:"401.402.404.406.412.413.414.416"');
Route::get("/get/tipos_medios", [GeneralObetenerController::class, "get_tipos_medios"])->middleware('checkpermisionroute:412.414.413"');
Route::get("/get/tipos_volantes_catalogos", [GeneralObetenerController::class, "get_tipos_volantes_catalogos"])->middleware('checkpermisionroute:412.414.413"');
Route::get("/get/get_tipos_promos", [GeneralObetenerController::class, "get_tipos_promos"])->middleware('checkpermisionroute:412.414.413"');
Route::get("/get/get_combinaciones", [GeneralObetenerController::class, "get_combinaciones"])->middleware('checkpermisionroute:412.414.413"');
Route::get("/get/espacios_campanas", [GeneralObetenerController::class, "get_espacios_exibhicion"]);
Route::get("/get/turnos", [GeneralObetenerController::class, "get_turnos"])->middleware('checkpermisionroute:900.901.902.903.906"');

##modulo campanas proveedores nuevas
Route::get("/get/elementosCampana/{id}", [GeneralObetenerController::class, "get_elementos_campana"]);
Route::get("/get/tpCampana/{id}", [GeneralObetenerController::class, "get_tp_campana"]);
Route::get("/get/visibilidadCampana", [GeneralObetenerController::class, "get_visibilidad_campana"]);
Route::get("/get/sesiones_espacios/{id}", [GeneralObetenerController::class, "get_sesiones_espacios"]);
Route::get("/get/sub_sesiones/{id}", [GeneralObetenerController::class, "get_sub_sesiones"]);
