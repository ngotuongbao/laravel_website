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

//user
Route::get('/', [App\Http\Controllers\homeController::class,'index'])->name('/home');
Route::get('/shop', [App\Http\Controllers\homeController::class,'shopPage']);
Route::post('/search', [App\Http\Controllers\homeController::class,'searchPage']);

//edit me!!!
Route::get('/product-details/{id}', [App\Http\Controllers\homeController::class,'productDetailsPage']);
Route::get('/checkout', [App\Http\Controllers\shopController::class,'index']);
Route::get('/cart', [App\Http\Controllers\shopController::class,'index']);
Route::get('/blog', [App\Http\Controllers\shopController::class,'index']);
Route::get('/blog-single', [App\Http\Controllers\shopController::class,'index']);
Route::get('/err', [App\Http\Controllers\shopController::class,'index']);
Route::get('/contact-us', [App\Http\Controllers\shopController::class,'index']);

//Category list home
Route::get('/category-list/{id}', [App\Http\Controllers\categoriesController::class,'showCategoryHome']);

//Brand list home
Route::get('/brand-list/{id}', [App\Http\Controllers\brandController::class,'showBrandHome']);


//admin
Route::get('/dashboard',[App\Http\Controllers\adminController::class,'index']);
Route::get('/admin/login',[App\Http\Controllers\adminController::class,'login']);
Route::get('/logout', [App\Http\Controllers\adminController::class,'logout']);
Route::post('/admin-dashboard', [App\Http\Controllers\adminController::class,'dashboard']);


//Category Product
Route::get('/add-category-product', [App\Http\Controllers\categoriesController::class,'addCategoryProduct']);
Route::get('/edit-category-product/{id}', [App\Http\Controllers\categoriesController::class,'editCategoryProduct']);
Route::get('/delete-category-product/{id}', [App\Http\Controllers\categoriesController::class,'deleteCategoryProduct']);
Route::get('/all-category-product', [App\Http\Controllers\categoriesController::class,'allCategoryProduct']);
Route::get('/unactive-category-product/{id}', [App\Http\Controllers\categoriesController::class,'unActiveCategoryProduct']);
Route::get('/active-category-product/{id}', [App\Http\Controllers\categoriesController::class,'activeCategoryProduct']);
Route::post('/save-category-product', [App\Http\Controllers\categoriesController::class,'saveCategoryProduct']);
Route::post('/update-category-product/{id}', [App\Http\Controllers\categoriesController::class,'updateCategoryProduct']);


//Brand Product
Route::get('/add-brand-product', [App\Http\Controllers\brandController::class,'addBrandProduct']);
Route::get('/edit-brand-product/{id}', [App\Http\Controllers\brandController::class,'editBrandProduct']);
Route::get('/delete-brand-product/{id}', [App\Http\Controllers\brandController::class,'deleteBrandProduct']);
Route::get('/all-brand-product', [App\Http\Controllers\brandController::class,'allBrandProduct']);
Route::get('/unactive-brand-product/{id}', [App\Http\Controllers\brandController::class,'unActiveBrandProduct']);
Route::get('/active-brand-product/{id}', [App\Http\Controllers\brandController::class,'activeBrandProduct']);
Route::post('/save-brand-product', [App\Http\Controllers\brandController::class,'saveBrandProduct']);
// Route::post('/update-brand-product/{id}', [App\Http\Controllers\brandController::class,'updateBrandProduct']);


//Product
Route::get('/add-product', [App\Http\Controllers\productController::class,'addProduct']);
Route::get('edit-product/{id}', [App\Http\Controllers\productController::class,'editProduct']);
Route::get('/delete-product/{id}', [App\Http\Controllers\productController::class,'deleteProduct']);
Route::get('/all-product', [App\Http\Controllers\productController::class,'allProduct']);
Route::get('/unactive-product/{id}', [App\Http\Controllers\productController::class,'unActiveProduct']);
Route::get('/active-product/{id}', [App\Http\Controllers\productController::class,'activeProduct']);
Route::post('/save-product', [App\Http\Controllers\productController::class,'saveProduct']);
Route::post('/update-product/{id}', [App\Http\Controllers\productController::class,'updateProduct']);

//Cart
Route::post('/save-cart', [App\Http\Controllers\cartController::class,'saveCart']);
Route::get('/show-cart', [App\Http\Controllers\cartController::class,'showCart']);
Route::get('/delete-cart/{id}', [App\Http\Controllers\cartController::class,'deleteCart']);
Route::post('/update-cart', [App\Http\Controllers\cartController::class,'updateCart']);

 

//login-logout Customer 
Route::get('/login', [App\Http\Controllers\checkoutController::class,'index']);
// Route::post('/login', [App\Http\Controllers\userController::class,'checkLogin']);
// Route::post('/login/signin',[App\Http\Controllers\userController::class,'store']);
Route::post('/add-customer', [App\Http\Controllers\checkoutController::class,'addCustomer']);
Route::get('/checkout', [App\Http\Controllers\checkoutController::class,'checkout']);
Route::post('/save-checkout', [App\Http\Controllers\checkoutController::class,'saveCheckout']);





// Route::redirect('/demo','/','302');
// Route::get('/user/{name}/id/{id}', function($name, $id){
//     return 'User '.$name.$id;
// });

// Route::get('/demo', function(){
//     //
// })->name('dm');
// $url = route('dm');
// return redirect()->route('dm');

