<?php
// storeadmin
Route::group(['prefix' => 'backend'], function() 
{
	Route::group(['middleware' => 'auth'], function()
    {
		Route::get('/', 'backend\StoresController@index');
		Route::post('/edit-upload', 'backend\ImagesController@uploadFile');
		Route::resource('stores', 'backend\StoresController');
		Route::resource('/stores/{store_id}/products', 'backend\ProductsController');
		Route::resource('/stores/{store_id}/banners', 'backend\BannersController');
	});
}); 

//superadmin
Route::group(['prefix' => 'admin'], function() 
{
	Route::group(['middleware' => 'auth'], function()
    {
    	Route::get('/', 'HomeController@backend');

	});
}); 

Route::group(['prefix' => 'member'], function() 
{
	Route::group(['middleware' => 'auth'], function()
    {
    	Route::get('/', 'HomeController@backend');
	});
}); 

//client

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');