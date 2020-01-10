<?php
//Inicio

Route::get('/', 'HomeController@index')->name('home');

//Productos

Route::get('productos', 'ProductController@index')->name('products.index');
Route::get('productos/categoria/{title}', 'ProductController@searchCategory')->name('products.searchCategory');
Route::get('productos/agregar', 'ProductController@create')->name('products.create');
Route::post('productos/agregar', 'ProductController@store');
Route::get('productos/editar/{id}', 'ProductController@edit')->name('products.edit');
Route::patch('productos/editar/{id}', 'ProductController@update')->name('products.update');
Route::get('productos/{product}', 'ProductController@show')->name('products.show');



//FAQ

Route::view('faq', 'faq')->name('faq');

//Perfil

Route::get('perfil', 'ProfileController@index')->name('profile.index');
Route::get('perfil/configuracion', 'ProfileController@edit')->name('profile.edit');
Route::post('perfil/configuracion', 'ProfileController@update');

//Contacto

Route::get('contacto', 'ContactController@index')->name('contact');

//Carrito

Route::get('carrito', 'CartController@index')->name('cart.index');
Route::post('carrito', 'CartController@store');
Route::get('carrito/destruir', 'CartController@destroyCart')->name('cart.destroyCart');
Route::delete('carrito/{id}', 'CartController@destroy')->name('cart.destroy');

// Rutas de Autenticación

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Rutas de registracion
Route::get('registro', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('registro', 'Auth\RegisterController@register');

// Opcionales

/*Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
*/


// Route::view('/', 'home')->name('home'); Mejor metodo para paginas que no requieran mucha logica, ej: politicas de privacidad, terminos y condiciones
