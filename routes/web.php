<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'NewShopController@index')->name('/');
Route::get('/category-product/{id}', 'NewShopController@categoryContent')->name('category-product');


Route::get('/product-details/{id}/{name}', 'NewShopController@productDetails')->name('product-details');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');




// Route::group(['middleware' => ['AuthenticateMiddleware']], function () {
    /* Category Info */
Route::get('/category/add', 'CategoryController@createCategory');

Route::post('/category/save', 'CategoryController@storeCategory');

Route::get('/category/manage', 'CategoryController@manageCategory');

Route::get('/category/edit/{id}', 'CategoryController@editCategory');
Route::post('/category/update', 'CategoryController@updateCategory');

Route::get('/category/delete/{id}', 'CategoryController@deleteCategory');

/* Manufacturer Info */
Route::get('/manufacturer/add', 'ManufacturerController@createManufacturer');
Route::post('/manufacturer/save', 'ManufacturerController@storeManufacturer');

Route::get('/manufacturer/manage', 'ManufacturerController@manageManufacturer');

Route::get('/manufacturer/edit/{id}', 'ManufacturerController@editManufacturer');
Route::post('/manufacturer/update', 'ManufacturerController@updateManufacturer');

Route::get('/manufacturer/delete/{id}', 'ManufacturerController@deleteManufacturer');

/* Product Info */
Route::get('/product/add', 'ProductController@createProduct');
Route::post('/product/save', 'ProductController@storeProduct');

Route::get('/product/manage', 'ProductController@manageProduct');
Route::get('/product/view/{id}', 'ProductController@viewProduct');

Route::get('/product/edit/{id}', 'ProductController@editProduct');
Route::post('/product/update', 'ProductController@updateProduct');

Route::get('/product/delete/{id}', 'ProductController@deleteProduct');


/*User Info*/

Route::get('/user/manage', 'UserController@manageUser');

// });

/*Cart Info*/ 

Route::post('/cart/add','CartController@addToCart')->name('add-to-cart');
Route::get('/cart/show','CartController@showCart')->name('show-cart');
Route::get('/cart/delete/{id}','CartController@deleteCart')->name('delete-cart-item');
Route::post('/cart/update', 'CartController@updateCart')->name('update-cart');


Route::get('/checkout', 'CheckoutController@index')->name('checkout');

Route::post('/customer/registration', 'CheckoutController@customerSignUp')->name('customer-sign-up');

Route::get('/checkout/shipping', 'CheckoutController@shippingForm')->name('checkout-shipping');

Route::post('/shipping/save', 'CheckoutController@saveShippingInfo')->name('new-shipping');
Route::get('/checkout/payment', 'CheckoutController@paymentForm')->name('checkout-payment');









