<?php






Route::group(['middleware' => ['web']], function () {

});

Route::group(['prefix' => 'admin'], function() {

});

Route::group(['middleware' => ['web', 'role:admin'], 'prefix' => 'admin'], function () {
	Route::auth();
	Route::get('/', 'HomeController@index');
    Route::get('/test', 'HomePageController@test');

	Route::get('/users/', 'DashboardController@listusers');
	Route::get('/users/create', 'DashboardController@create');
	Route::get('/users/{id}/', 'DashboardController@listuser');
	Route::get('/users/{id}/edit', 'DashboardController@edituser');
	Route::post('/users/updateuser', 'DashboardController@updateuser');
	Route::post('/users/{id}/delete', 'DashboardController@delete');
	Route::post('/users/register', 'DashboardController@register');
    Route::post('/settings/store','HomeController@store')->name('admin.settings.store');


    Route::get('/sliders/{id}/category','CategoriesController@addslider')->name('admin.addcategoryslider.view');
    Route::post('/addcategorystore','CategoriesController@sliderstore')->name('admin.slidercategory.store');
    Route::post('/addcategorydestroy','CategoriesController@sliderdestroy')->name('admin.slidercategory.destroy');

    Route::get('/settings/{id}/edit','HomeController@edit')->name('admin.settings.edit');
    Route::post('/settings/update','HomeController@update')->name('admin.settings.update');
    Route::get('/sliders/{id}/product','SlidersController@index')->name('admin.sliders.index');
    Route::post('/sliders/store','SlidersController@store')->name('admin.sliders.store');
    Route::post('/sliders/destroy','SlidersController@destroy')->name('admin.sliders.destroy');
	Route::resource('/product', 'ProductsController');
	Route::resource('/slider', 'SliderController');
	Route::resource('/categories', 'CategoriesController');
    Route::resource('/staticpage', 'StaticController');
    Route::resource('/referrals', 'ReferralController');
    Route::resource('/services', 'ServicesController');
});

Route::get('/', 'HomePageController@index');
Route::get('/{slug}', 'HomePageController@staticpages');
Route::get('/referents/{slug}', 'HomePageController@referents');
Route::get('/services/{slug}', 'HomePageController@services');
Route::get('/product/{slug}', 'HomePageController@product');
Route::get('/categories/{slug}', 'HomePageController@categories');



