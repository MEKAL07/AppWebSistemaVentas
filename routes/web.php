<?php
Route::get('/','IndexController@actionIndex');
/*insertar cliente*/
Route::get('/cliente/ver', 'ClienteController@actionVer');
Route::match(['get','post'],'/cliente/registrar', 'ClienteController@actionRegistrar' );
Route::get('/cliente/editar', 'ClienteController@actionEditar');

/*rutas para el usuario*/
Route::get('/usuario/ver' , 'UsuarioController@actionVer');
Route::match(['get', 'post'] , '/usuario/registrar' , 'UsuarioController@actionRegistrar');
Route::get('/usuario/editar' , 'UsuarioController@actionEditar');

/*rutas para productos*/

Route::get('/producto/ver', 'ProductoController@actionVer');
Route::match(['get', 'pos'] , '/producto/registrar', 'ProductoController@actionRegistrar');
Route::get('/producto/editar', 'ProductoController@actionEditar'); //cambiar a post

/*rutas para el formulario ventas*/
Route::get('/venta/ver', 'VentaController@actionVer');
Route::match(['get', 'post'], '/venta/agregarventa', 'VentaController@actionAgregarVenta');
Route::get('/venta/editar' , 'VentaController@actionEditar');
?>
