<?php
Route::get('/', 'FrontendController@index')->name('admin.frontend');
Route::group(['prefix' => 'backend', 'namespace'=>'Backend'],function(){
	Route::get('/', 'AdminController@index')->name('admin.home');
     // category
     Route::group(['prefix'=>'category'],function(){
     Route::get('/','AdminCategoryController@index')->name('admin.get.list.category');
     Route::get('/create','AdminCategoryController@create')->name('admin.get.create.category');
     Route::post('/create','AdminCategoryController@store')->name('admin.post.create.category');
     Route::get('/update/{id}','AdminCategoryController@edit')->name('admin.get.edit.category');
     Route::post('/update/{id}','AdminCategoryController@update')->name('admin.post.update.category');
     Route::get('/{action}/{id}','AdminCategoryController@action')->name('admin.get.action.category');
});
    //product
    Route::group(['prefix'=>'product'],function(){
        Route::get('/','AdminProductController@index')->name('admin.get.list.product');
        Route::get('/create','AdminProductController@create')->name('admin.get.create.product');
        Route::post('/create','AdminProductController@store')->name('admin.post.create.product');
        Route::get('/update/{id}','AdminProductController@edit')->name('admin.get.edit.product');
        Route::post('/update/{id}','AdminProductController@update')->name('admin.post.update.product');
        Route::get('/{action}/{id}','AdminProductController@action')->name('admin.get.action.product');
   });

});
?>
