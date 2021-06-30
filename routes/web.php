<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','frontend\FrontendController@index');
//Route::get('/product-list','frontend\FrontendController@productList')->name('product.list');
Route::get('/product-list','frontend\ProductFilterController@allProductList')->name('product.list');

Route::get('/category-wise-product-list/{id}','frontend\ProductFilterController@catProductList')->name('category.wise.product');

Route::get('/get-shopping-cost','frontend\ProductFilterController@getShippingCost')->name('get-shopping-cost');
Route::get('/sub-category-wise-product-list/{id}','frontend\ProductFilterController@subCatProductList')->name('sub.category.wise.product');

Route::get('/brand-wise-product-list/{id}','frontend\ProductFilterController@brandProductList')->name('brand.wise.product');
Route::get('/price-wise-product-list','frontend\ProductFilterController@priceProductList')->name('price.wise.product');
Route::get('/product-details/{slug}','frontend\FrontendController@productDetails')->name('product.details');

Route::get('/search','PageController@search')->name('search');

// //cart route
// Route::get('/shop', 'CartController@shop');
// Route::get('/cart', 'CartController@cart')->name('cart.index');
// Route::post('/add', 'frontend\CartController@add')->name('cart.add');

Route::get('/shopping/cart','frontend\FrontendController@shoppingCart')->name('shopping.cart');
Route::post('/add-to-cart','frontend\CartController@addToCart')->name('insert.cart');
Route::get('/view-cart','frontend\CartController@showCart')->name('view.cart');
Route::post('/edit-cart','frontend\CartController@updateCart')->name('edit.cart');
Route::get('/del-cart/{rowId}','frontend\CartController@deleteCart')->name('del.cart');
Route::post('/coupon_insert', 'CouponsController@store')->name('coupon.insert');
Route::delete('/coupon_del', 'CouponsController@destroy')->name('coupon.destroy');
Route::post('/compare', 'frontend\FrontendController@compare')->name('cart.compare');
Route::get('/getcompare', 'frontend\FrontendController@display')->name('compare.display');

/*Customer Login system*/
Route::get('/customer-login','frontend\CheckoutController@customerLogin')->name('customer.login');
Route::get('/customer-signup','frontend\CheckoutController@customerSignup')->name('customer.signup');
Route::post('/customer-signup-store','frontend\CheckoutController@SignupStore')->name('customer.signup.store');
Route::get('/email-verify','frontend\CheckoutController@emailVerify')->name('email.verify');
Route::post('/verify-store','frontend\CheckoutController@verifyStore')->name('verify.store');
Route::get('/checkout','frontend\CheckoutController@checkOut')->name('customer.checkout');
Route::post('/checkout/store','frontend\CheckoutController@checkoutStore')->name('customer.checkout.store');

Route::group(['middleware'=>['auth','customer']],function(){
   Route::get('/dashboard','frontend\DashboardController@dashboard')->name('dashboard');
   Route::get('/customer.edit.profile','frontend\DashboardController@editProfile')->name('customer.edit.profile');
   Route::post('/customer.update.profile','frontend\DashboardController@updateProfile')->name('customer.update.profile');
   Route::get('/customer.password.change','frontend\DashboardController@passwordChange')->name('customer.password.change');
   Route::post('/customer.password.update','frontend\DashboardController@passwordUpdate')->name('customer.password.update');
   /*payment route*/
   Route::get('/payment','frontend\DashboardController@payment')->name('customer.payment');
   Route::post('/payment/store','frontend\DashboardController@paymentStore')->name('customer.payment.store');
   Route::get('/order-list','frontend\DashboardController@orderList')->name('customer.order.list');
   Route::get('/order-details/{id}','frontend\DashboardController@orderDetails')->name('customer.order.details');
   Route::get('/edit-account/{id}','frontend\DashboardController@editAccount')->name('edit-account');
   Route::post('/store/edit-account/{id}','frontend\DashboardController@storeAccount')->name('customer.edit.store');
   Route::get('/customer.password.change','frontend\DashboardController@passwordChange')->name('customer.password.change');
   Route::post('/customer.password.update','frontend\DashboardController@passwordUpdate')->name('customer.password.update');

});


Auth::routes();


Route::group(['middleware'=>['auth','admin'] , 'prefix' => 'admin'], function(){
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('user','backend\UserController');
Route::resource('profile','backend\ProfileController');
Route::get('/view-password','backend\ProfileController@viewPass')->name('view.password');
Route::post('/change-password','backend\ProfileController@changePass')->name('change.password');

Route::resource('product','backend\ProductController');
Route::get('product/changeStatus/{id}', 'backend\ProductController@changeStatus')->name('best.change.status');
Route::get('feature/product/changeStatus/{id}', 'backend\ProductController@featureChangeStatus')->name('featured.change.status');
Route::get('offers/product/changeStatus/{id}', 'backend\ProductController@offersChangeStatus')->name('offer.change.status');


Route::resource('category','backend\CategoryController');
Route::get('category/change-category-status/{id}', 'backend\CategoryController@changeCategoryStatus')->name('change.category.status');
Route::resource('sub-category','backend\SubCategoryController');

Route::resource('brand','backend\BrandController');
Route::get('brand/change-brand-status/{id}', 'backend\BrandController@changeBrandStatus')->name('change.brand.status');
//get sub category in product creation
Route::get('/get-sub-category','backend\DefaultController@getSubCategory')->name('get-sub-category');

Route::get('/stock','backend\StockController@index')->name('stock.index');
Route::get('/stock/edit/{id}','backend\StockController@edit')->name('stock.edit');
Route::post('/stock/update/{id}','backend\StockController@update')->name('stock.update');
Route::get('/stock/report','backend\StockController@stockReport')->name('stock.report');
Route::get('/report/print','backend\StockController@stockReportPrint')->name('stock.report.print');

//order route
Route::resource('order','backend\OrderController');
Route::get('/pending-list','backend\OrderController@pendingList')->name('order.pending.list');
Route::get('/approve-list','backend\OrderController@approveList')->name('order.approve.list');
Route::get('/details/{id}','backend\OrderController@details')->name('order.details');
Route::get('/approve{id}','backend\OrderController@approve')->name('order.approve');
Route::get('order/report/print/{id}','backend\OrderController@orderReportPrint')->name('order.report.print');

Route::get('/invoice/daily/report','backend\OrderController@invoiceReport')->name('invoice.report');
Route::get('invoice/report/print','backend\OrderController@invoiceReportPrint')->name('invoice.daily.report.print');


//Invoice System
Route::resource('invoice','backend\InvoiceController');
Route::get('/invoice/pending/list','backend\InvoiceController@pendingList')->name('invoice.pending.list');
Route::get('/invoice/approve/{id}','backend\InvoiceController@approve')->name('invoice.approve');
Route::post('/invoice/approval/store/{id}','backend\InvoiceController@approvalStore')->name('invoice.approval.store');
Route::get('print/{id}','backend\InvoiceController@printInvoice')->name('invoice.print');

//local Invoice
Route::get('/local/invoice/daily/report','backend\LocalInvoiceController@localInvoiceReport')->name('local.invoice.report');
Route::get('/local/invoice/report/print','backend\LocalInvoiceController@localInvoiceReportPrint')->name('local.invoice.daily.report.print');
Route::get('local/customer/daily/due/report','backend\LocalInvoiceController@dueReport')->name('local.due.daily.report');
Route::get('local/due/report/print','backend\LocalInvoiceController@customerdueReportPrint')->name('local.customer.daily.due.report.print');

//customer route
Route::get('/customer/index','backend\CustomerController@index')->name('customer.index');
Route::get('/customer/draft/view','backend\CustomerController@draftView')->name('draft.customer');
Route::get('/customer/draft/delete/{id}','backend\CustomerController@delete')->name('draft.customer.delete');
Route::get('/local/customer/view','backend\CustomerController@localCustomer')->name('local.customer');
Route::get('local/customer/delete/{id}','backend\CustomerController@localDelete')->name('local.customer.delete');
Route::get('/local/customer/due-list','backend\CustomerController@localCustomerDue')->name('local.customer.due.list');
Route::get('/local/customer/credit/report/pdf','backend\CustomerController@creditCustomerPdf')->name('credit.customer.pdf');
Route::get('/local/customer/edit/invoice/{invoice_id}','backend\CustomerController@editInvoice')->name('customer.edit.invoice');
Route::post('/local/customer/update/invoice/{invoice_id}','backend\CustomerController@updateInvoice')->name('customer.update.invoice');

//Size
Route::resource('size','backend\SizeController');
//color
Route::resource('color','backend\ColorController');
Route::resource('shipping-cost','backend\ShippingCostController');
//
Route::resource('coupons','backend\CouponController');
Route::get('changeStatus/{id}', 'backend\CouponController@changeStatus')->name('change.status');

Route::resource('purchase','backend\PurchaseController');
Route::get('/purchase/daily/report','backend\PurchaseController@purchaseReports')->name('purchase.report');
Route::get('/purchase/daily/report/print','backend\PurchaseController@purchaseDailyReport')->name('purchase.daily.report.print');

Route::resource('supplier','backend\SupplierController');
Route::resource('unit','backend\UnitController');


Route::get('/get-category','backend\DefaultController@getCategory')->name('get-category');
Route::get('/get-product','backend\DefaultController@getProduct')->name('get-product');
Route::get('/check-product-price','backend\DefaultController@getProductPrice')->name('check-product-price');
Route::get('/check-product-stock','backend\DefaultController@checkProductStock')->name('check-product-stock');
Route::get('/get-purchase-qty','backend\DefaultController@getProductQty')->name('get-purchase-qty');

Route::resource('slider','backend\SliderController');
Route::get('slider/changeUpperStatus/{id}', 'backend\SliderController@changeUpperStatus')->name('change.upper.status');
Route::get('slider/changeMiddleStatus/{id}', 'backend\SliderController@changeMiddleStatus')->name('change.middle.status');
Route::get('slider/changeLowerStatus/{id}', 'backend\SliderController@changeLowerStatus')->name('change.lower.status');

Route::resource('size-measurement','backend\SizeMeasurementController');
Route::resource('product-measurement','backend\ProductMeasurementController');

Route::get('category-cart','HomeController@categoryCart')->name('home.category.cart');
Route::get('customer-cart','HomeController@customerCart')->name('home.customer.cart');
Route::get('report-cart','HomeController@reportCart')->name('home.report.cart');
Route::get('order-cart','HomeController@orderCart')->name('home.order.cart');
Route::get('other-cart','HomeController@otherCart')->name('home.other.cart');

Route::post('/add-to-cart','backend\CartController@addToCart')->name('inserts.cart');
Route::get('/show-cart','backend\CartController@showCart')->name('show.cart');
Route::post('/update-cart','backend\CartController@updateCart')->name('update.cart');
Route::get('/delete-cart/{rowId}','backend\CartController@deleteCart')->name('delete.cart');
Route::resource('cart','backend\CartDeleteController');
Route::get('setting','backend\ApplicationController@index')->name('application.setting');
Route::post('setting','backend\ApplicationController@update');
});

