<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\DivisionController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PenddingNewsController;
use App\Http\Controllers\reporter\ReporterController;
use App\Http\Controllers\guest\GuestController;
use App\Http\Controllers\Admin\SettingController;
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

// Route::get('/', function () {
//     return view('frontend.index');
// })->name('');
Route::get('/',[HomeController::class, 'Index'])->name('home');

Route::get('/login',[AuthenticationController::class, 'Login'])->name('login');


Route::post('/user/login',[AuthenticationController::class, 'LoginUser'])->name('user.login');

Route::get('/forgot',[AuthenticationController::class, 'Forgot'])->name('user.forgot');

Route::get('/signup',[UserController::class, 'UserRegister'])->name('user.register');
Route::post('/register',[UserController::class, 'UserSave'])->name('store');






// Route::get('/dashboard',[AuthenticationController::class, 'dashboard'])->name('index');




/////////// Admin Route 

Route::group(['prefix'=> 'admin', 'middleware'=>(['admin'])], function(){
    Route::get('/logout',[AuthenticationController::class, 'LogOut'])->name('logout');
    Route::get('/dashboard',[AdminController::class, 'AdminDashboard']);
    Route::get('/logout',[AuthenticationController::class, 'LogOut'])->name('logout');


// Category Route 
    Route::controller(CategoryController::class)->group(function () {
      
        Route::get('categories/manage', 'CategoryManage')->name('categore.manage');
        Route::post('category/add', 'CategoryStore')->name('store.category');
        Route::get('category/edit/{id}/{slug}', 'EditCategory');
        Route::post('category/update', 'UpdateCategory')->name('update.category');
        Route::get('category/delete/{id}/{slug}', 'DeleteCategory');
       
    });

    // Sub Category Route 
    Route::controller(SubCategoryController::class)->group(function () {    
        Route::get('sub-categories/manage', 'SubCategoryManage')->name('subcategore.manage');
        Route::post('sub-categories/add', 'SubCategoryStore')->name('store.subcategory');
        Route::get('sub-categories/edit/{id}/{slug}', 'EditSubCategory');
        Route::post('sub-categories/update', 'UpdateSubCategory')->name('update.subcategory');
        Route::get('sub-categories/delete/{id}/{slug}', 'DeleteCategory');
       
    });

    // Division Route 
    Route::controller(DivisionController::class)->group(function () {    
        Route::get('division/manage', 'DivisionManage')->name('manage.division');
        Route::post('division/add', 'DivisionStore')->name('store.division');
        Route::get('division/edit/{id}/{slug}', 'EditDivision');
        Route::post('division/update', 'UpdateDivision')->name('update.division');
        Route::get('division/delete/{id}/{slug}', 'DeleteDivision');
       
    });

    // District Route 
    Route::controller(DistrictController::class)->group(function () {    
        Route::get('district/manage', 'DistrictManage')->name('manage.district');
        Route::post('district/add', 'DistrictStore')->name('store.district');
        Route::get('district/edit/{id}/{slug}', 'EditDistrict');
        Route::post('district/update', 'UpdateDistrict')->name('update.district');
        Route::get('district/delete/{id}/{slug}', 'DeleteDistrict');
       
    });

    // News Route 
    Route::controller(NewsController::class)->group(function () {    
        Route::get('news/manage', 'NewsManage')->name('manage.news');
        Route::get('news/add', 'AddNews')->name('add.news');
        Route::post('news/store', 'StoreNews')->name('store.news');
        Route::get('news/edit/{id}/{slug}', 'EditNews');
        Route::post('news/update', 'UpdateNews')->name('update.news');
        Route::get('news/delete/{id}/{slug}', 'DeleteNews');
        Route::get('news/inactive/{id}/{slug}', 'NewsInactive');
        Route::get('news/active/{id}/{slug}', 'NewsActive');

        Route::get('subcategory/ajax/{categoryId}', 'GetSubCategory');
        Route::get('district/ajax/{divisionId}', 'GetDistrict');

       
       
    });
    // News Route 
    Route::controller(PenddingNewsController::class)->group(function () {    
        Route::get('reporter/news/pendding', 'ReporterPending')->name('reporter.pendding.news');
        Route::get('reporter/news/approve/{id}/{slug}', 'ReporterNewsApprove');
        Route::get('guest/news/pendding', 'GuestPending')->name('guest.pendding.news');
        Route::get('news/unapproved', 'UnApproved')->name('admin.unapprove');
        Route::get('guest/news/approve/{id}/{slug}', 'GuestNewsApprove');
        Route::get('news/add', 'AddNews')->name('add.news');
         
    });
    // News Route 
    Route::controller(SettingController::class)->group(function () {    
        Route::get('site/setting', 'Setting')->name('site.setting');
        Route::post('site/setting/update', 'UpdateSetting')->name('update.setting');
         
    });



});


/////////// Reporter Route 

Route::group(['prefix'=> 'reporter', 'middleware'=>(['admin'])], function(){

    // News Route 
    Route::controller(ReporterController::class)->group(function () { 
        Route::get('/dashboard', 'Index')->name('reporter.dashboard');   
        Route::get('news/manage', 'NewsManage')->name('reporter.manage.news');
        Route::get('news/pendding', 'PenddingManage')->name('reporter.pendding.Manage');
        Route::get('news/unapproved', 'UnApproved')->name('reporter.unapproved.Manage');
        Route::get('news/add', 'AddNews')->name('reporter.add.news');
        Route::post('news/store', 'StoreNews')->name('reporter.store.news');
        Route::get('news/edit/{id}/{slug}', 'EditNews');
        Route::post('news/update', 'UpdateNews')->name('reporter.update.news');
        Route::get('news/delete/{id}/{slug}', 'DeleteNews');

       
    });



});

/////////// Guest Route 

Route::group(['prefix'=> 'guest', 'middleware'=>(['admin'])], function(){

    // News Route 
    Route::controller(GuestController::class)->group(function () { 
        Route::get('/dashboard', 'Index')->name('guest.dashboard');   
        Route::get('news/manage', 'NewsManage')->name('guest.manage.news');
        Route::get('news/pendding', 'PenddingManage')->name('guest.pendding.Manage');
        Route::get('news/unapproved', 'UnApproved')->name('guest.unapproved.Manage');
        Route::get('news/add', 'AddNews')->name('guest.add.news');
        Route::post('news/store', 'StoreNews')->name('guest.store.news');
        Route::get('news/edit/{id}/{slug}', 'EditNews');
        Route::post('news/update', 'UpdateNews')->name('guest.update.news');
        Route::get('news/delete/{id}/{slug}', 'DeleteNews');
        Route::get('news/inactive/{id}/{slug}', 'NewsInactive');
        Route::get('news/active/{id}/{slug}', 'NewsActive');

        Route::get('subcategory/ajax/{categoryId}', 'GetSubCategory');
        Route::get('district/ajax/{divisionId}', 'GetDistrict');

       
       
    });



});


/////////// User Route 

Route::group(['prefix'=> 'user', 'middleware'=>(['User'])], function(){
	
    Route::get('/dashboard',[AuthenticationController::class, 'dashboard']);
    Route::get('/logout',[AuthenticationController::class, 'LogOut'])->name('logout');
});


Route::controller(HomeController::class)->group(function () {    
    Route::get('details/{id}/{slug}', 'NewsDetails');
    Route::get('category/{id}/{slug}', 'CategoryNews');
    Route::get('division/{id}/{slug}', 'DivisionNews');

   
});
