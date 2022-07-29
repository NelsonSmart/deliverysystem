<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/layout', function(){
    return view('admin.inc.layout');
});

Route::get('/about-us', function(){
    return view('pages.about-us');
})->name('about us');

// Route::get('/why-choose-us', function(){
//     return view('pages.why-us');
    
// })->name('why us');

Route::get('/global-location', function(){
    return view('pages.global-locations');
})->name('global location');

Route::get('/career', function(){
    return view('pages.careers');
})->name('career');

Route::get('/trace', function(){
    return view('pages.track-shipment');
})->name('track');

Route::get('/contact-us', function(){
    return view('pages.contacs');
})->name('contact');

Route::get('/request-quote', function(){
    return view('pages.request-quote');
})->name('request pickup');

Route::get('/terms', function(){

    return view('pages.terms');

})->name('terms');

Route::get('/privacy policy', function(){

    return view('pages.privacy');

})->name('privacy');

Route::get('/trace/track', [HomeController::class , 'trace'])->name('trace');

Route::post('/contact' , [HomeController::class, 'contact']);
Route::get('country/{country}/states', [HomeController::class, 'getStates']);

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

/////////  admin route //////////////////////

Route::prefix('adm')->middleware('auth')->group(function(){

    // Route::get('/', function(){
    //     return view('admin.index');
    // })->name('admin');

    Route::get('/profile', function(){
        return view('admin.profile');
    })->name('profile');

    Route::get('/settings', function(){
        return view('admin.setting');
    })->name('setting');

    Route::get('/add-user', function(){
        return view('admin.addWorker');
    })->name('addUser');

    Route::post('/save/setting' , [HomeController::class, 'setting'])->name('settings');

    Route::post('Add/User', [HomeController::class, 'newUser'])->name('add-User');

    Route::get('/package/create',[PackageController::class, 'index'])->name('createPackage');
    Route::post('/package/create',[PackageController::class, 'store'])->name('submitPackage');
    Route::get('/package/update', [PackageController::class, 'show'])->name('updatePackage');
    Route::post('/package/shipped', [PackageController::class, 'shipped'])->name('shipped');
    Route::post('/package/delivered', [PackageController::class, 'delivered'])->name('delivered');
    Route::get('/package/update/{id}', [PackageController::class, 'edit']);
    Route::post('/package/update/location',[PackageController::class,'location'])->name('location');

    Route::get('/package/delete/{id}', [PackageController::class, 'destroy']);
    Route::get('/user/delete/{id}', [HomeController::class, 'destroy']);

    Route::post('/profile/change', [HomeController::class, 'change'])->name('changePasswrd');
    Route::post('/profile/picture', [HomeController::class, 'updatePic'])->name('upload');

});


