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
     //    Route::get('/order','AdminProductController@index1')->name('admin.get.list.order');
   });
    //order
    Route::group(['prefix'=>'order'],function(){
    
     Route::get('/OrderApprove','AdminOrderController@getOrderApprove')->name('admin.get.list.order');
     Route::get('/OrderDetail/{id}','AdminOrderController@showOrder')->name('order.detail');
     Route::get('/OrderNotApprove','AdminOrderController@getOrderNotApprove')->name('admin.get.list.order.not');
     Route::get('/','AdminOrderController@getCart')->name('admin.get.cart');

     Route::get('/cart', 'AdminOrderController@cart')->name('cart.index');
     Route::get('/checkout', 'AdminOrderController@checkout')->name('check.get');
     Route::post('/checkout', 'AdminOrderController@saveOrder')->name('check.post');
     Route::post('/add', 'AdminOrderController@add')->name('cart.store');
     // Route::post('/update', 'AdminOrderController@update')->name('cart.update');
     // Route::post('/remove', 'AdminOrderController@remove')->name('cart.remove');     
     Route::get('/clear', 'AdminOrderController@clear')->name('cart.clear');
});

});
//auth

Route::group(['namespace'=>'Auth'],function(){
     Route::group(['prefix'=>'auth'],function(){
          Route::get('/admin','RegisterController@index')->name('get.home.login');
          Route::get('/register','RegisterController@create')->name('get.register');
          Route::post('/register','RegisterController@store')->name('post.register');
          Route::get('/login','LoginController@getlogin')->name('admin.get.login');
          Route::post('/login','LoginController@postlogin')->name('admin.post.login');
          Route::get('/logout','LoginController@logout')->name('admin.logout');
          Route::post('/forgetpassword','UserController@action')->name('');
          Route::post('/resetpassword','UserController@action')->name('');
     });
});
?>
