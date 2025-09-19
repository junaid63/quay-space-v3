<?php

use App\Http\Controllers\AccountSwitchController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FloorController;
use App\Http\Controllers\SpaceController;
use App\Http\Controllers\SpacetypeController;
use App\Http\Controllers\AmenitiesContorller;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/',[FrontendController::class, 'index'])->name('index');
Route::get('/about-us',[FrontendController::class, 'aboutus'])->name('aboutus');
Route::get('/our-team',[FrontendController::class, 'ourteam'])->name('ourteam');
Route::get('/faqs',[FrontendController::class, 'faqs'])->name('faqs');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/booknow', [FrontendController::class, 'booknow'])->name('booknow');
Route::get('/membership', [FrontendController::class, 'membership'])->name('membership');
Route::get('/contact-us',[FrontendController::class, 'contactus'])->name('contactus');
Route::post('/contact/submit',[FrontendController::class, 'contactSubmit'])->name('contactSubmit');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::middleware('login')->group(function () {
    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.ajax');
});

Route::prefix('dashboard')->middleware('auth')->name('dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('index');
    Route::get('/company', [CompanyController::class, 'company'])->name('company');
    Route::get('/company/json', [CompanyController::class, 'company_json'])->name('company_json');

    // Route::prefix('proceedings')->name('proceedings.')->group(function () {
    //     Route::get('/', [ProceedingController::class, 'proceedings'])->name('index');
    //     Route::get('/json', [ProceedingController::class, 'proceedings_json'])->name('json');
    //     Route::post('/store', [ProceedingController::class, 'proceedings_store'])->name('store');
    //     Route::patch('/{id}/toggle-status', [ProceedingController::class, 'toggleStatus'])->name('toggleStatus');
    //     Route::get('{id}', [ProceedingController::class, 'show'])->name('show');
    //     Route::put('{id}', [ProceedingController::class, 'update'])->name('update');
    //     Route::delete('{id}',  [ProceedingController::class, 'destroy'])->name('destroy');
    // });

    // Route::prefix('fundings')->name('fundings.')->group(function () {
    //     Route::get('/', [FundingController::class, 'fundings'])->name('index');
    //     Route::get('/json', [FundingController::class, 'fundings_json'])->name('json');
    //     Route::post('/store', [FundingController::class, 'fundings_store'])->name('store');
    //     Route::patch('/{id}/toggle-status', [FundingController::class, 'toggleStatus'])->name('toggleStatus');
    //     Route::get('{id}', [FundingController::class, 'show'])->name('show');
    //     Route::put('{id}', [FundingController::class, 'update'])->name('update');
    //     Route::delete('{id}',  [FundingController::class, 'destroy'])->name('destroy');
    // });

    Route::prefix('activity')->name('activity.')->group(function () {
        Route::get('/', [ActivityController::class, 'activity'])->name('index');
        Route::get('/json', [ActivityController::class, 'activity_json'])->name('json');
        Route::post('/store', [ActivityController::class, 'activity_store'])->name('store');
        Route::patch('/{id}/toggle-status', [ActivityController::class, 'toggleStatus'])->name('toggleStatus');
        Route::get('{id}', [ActivityController::class, 'show'])->name('show');
        Route::put('{id}', [ActivityController::class, 'update'])->name('update');
        Route::delete('{id}',  [ActivityController::class, 'destroy'])->name('destroy');
    });

    // Route::prefix('matterstatus')->name('matterstatus.')->group(function () {
    //     Route::get('/', [MatterStatusController::class, 'matterstatus'])->name('index');
    //     Route::get('/json', [MatterStatusController::class, 'matterstatus_json'])->name('json');
    //     Route::post('/store', [MatterStatusController::class, 'matterstatus_store'])->name('store');
    //     Route::patch('/{id}/toggle-status', [MatterStatusController::class, 'toggleStatus'])->name('toggleStatus');
    //     Route::get('{id}', [MatterStatusController::class, 'show'])->name('show');
    //     Route::put('{id}', [MatterStatusController::class, 'update'])->name('update');
    //     Route::delete('{id}',  [MatterStatusController::class, 'destroy'])->name('destroy');
    // });

    // Route::prefix('matterlist')->name('matterlist.')->group(function () {
    //     Route::get('/', [MatterListController::class, 'matterlist'])->name('index');
    //     Route::get('/json', [MatterListController::class, 'matterlist_json'])->name('json');
    //     Route::post('/store', [MatterListController::class, 'matterlist_store'])->name('store');
    //     Route::get('/export-data/{id}', [MatterListController::class, 'matterlist_export_data'])->name('export_data');
    //     Route::get('{id}', [MatterListController::class, 'show'])->name('show');
    //     Route::put('{id}', [MatterListController::class, 'update'])->name('update');
    //     Route::delete('{id}',  [MatterListController::class, 'destroy'])->name('destroy');
    // });

    // Route::prefix('client')->name('client.')->group(function () {
    //     Route::get('/', [ClientController::class, 'client'])->name('index');
    //     Route::get('/json', [ClientController::class, 'client_json'])->name('json');
    //     Route::get('/filters', [ClientController::class, 'client_filters'])->name('filters');
    //     Route::post('/store', [ClientController::class, 'client_store'])->name('store');
    //     Route::patch('/{id}/toggle-status', [ClientController::class, 'toggleStatus'])->name('toggleStatus');
    //     Route::get('{id}', [ClientController::class, 'show'])->name('show');
    //     Route::put('{id}', [ClientController::class, 'update'])->name('update');
    //     Route::delete('{id}',  [ClientController::class, 'destroy'])->name('destroy');
    // });

    // Route::prefix('timemanagement')->name('timemanagement.')->group(function () {
    //     Route::get('/', [TimeManagementController::class, 'timemanagement'])->name('index');
    //     Route::get('/json', [TimeManagementController::class, 'timemanagement_json'])->name('json');
    //     Route::get('/filters', [TimeManagementController::class, 'timemanagement_filters'])->name('filters');
    //     Route::get('/get-suggestion', [TimeManagementController::class, 'timemanagement_getsuggestion'])->name('getsuggestion');
    //     Route::get('/get-user-suggestion', [TimeManagementController::class, 'timemanagement_getUserSuggestion'])->name('getusersuggestion');
    //     Route::post('/store', [TimeManagementController::class, 'timemanagement_store'])->name('store');
    //     Route::get('{id}', [TimeManagementController::class, 'show'])->name('show');
    //     Route::put('{id}', [TimeManagementController::class, 'update'])->name('update');
    //     Route::delete('{id}',  [TimeManagementController::class, 'destroy'])->name('destroy');
    // });

    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/', [UserController::class, 'user'])->name('index');
        Route::get('/json', [UserController::class, 'user_json'])->name('json');
        Route::post('/store', [UserController::class, 'user_store'])->name('store');
        Route::patch('/{id}/toggle-status', [UserController::class, 'toggleStatus'])->name('toggleStatus');
        Route::get('{id}', [UserController::class, 'show'])->name('show');
        Route::put('{id}', [UserController::class, 'update'])->name('update');
        Route::delete('{id}',  [UserController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('floor')->name('floor.')->group(function () {
        Route::get('/', [FloorController::class, 'floor'])->name('index');
        Route::get('/json', [FloorController::class, 'floor_json'])->name('json');
        Route::post('/store', [FloorController::class, 'floor_store'])->name('store');
        Route::patch('/{id}/toggle-status', [FloorController::class, 'toggleStatus'])->name('toggleStatus');
        Route::get('{id}', [FloorController::class, 'show'])->name('show');
        Route::put('{id}', [FloorController::class, 'update'])->name('update');
        Route::delete('{id}',  [FloorController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('spacetype')->name('spacetype.')->group(function () {
        Route::get('/', [SpacetypeController::class, 'spacetype'])->name('index');
        Route::get('/json', [SpacetypeController::class, 'floor_json'])->name('json');
        Route::post('/store', [SpacetypeController::class, 'floor_store'])->name('store');
        Route::patch('/{id}/toggle-status', [SpacetypeController::class, 'toggleStatus'])->name('toggleStatus');
        Route::get('{id}', [SpacetypeController::class, 'show'])->name('show');
        Route::put('{id}', [SpacetypeController::class, 'update'])->name('update');
        Route::delete('{id}',  [SpacetypeController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('space')->name('space.')->group(function () {
        Route::get('/', [SpaceController::class, 'space'])->name('index');
        Route::get('/json', [SpaceController::class, 'space_json'])->name('json');
        Route::post('/store', [SpaceController::class, 'space_store'])->name('store');
        Route::patch('/{id}/toggle-status', [SpaceController::class, 'toggleStatus'])->name('toggleStatus');
        Route::get('{id}', [SpaceController::class, 'show'])->name('show');
        Route::put('{id}', [SpaceController::class, 'update'])->name('update');
        Route::delete('{id}',  [SpaceController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('amenities')->name('amenities.')->group(function () {
        Route::get('/', [AmenitiesContorller::class, 'amenities'])->name('index');
        Route::get('/json', [AmenitiesContorller::class, 'amenities_json'])->name('json');
        Route::post('/store', [AmenitiesContorller::class, 'amenities_store'])->name('store');
        Route::patch('/{id}/toggle-status', [AmenitiesContorller::class, 'toggleStatus'])->name('toggleStatus');
        Route::get('{id}', [AmenitiesContorller::class, 'show'])->name('show');
        Route::put('{id}', [AmenitiesContorller::class, 'update'])->name('update');
        Route::delete('{id}',  [AmenitiesContorller::class, 'destroy'])->name('destroy');
    });

});
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', function ($token) {return view('auth.reset-password', ['token' => $token]);})->middleware('login')->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::get('/ajax/accounts', function () {
    return \App\Models\User::select('role_id', 'ref_key', 'name')->where('role_id' , 2)->orderBy('name')->get();
})->middleware('auth');

Route::post('/switch-account', AccountSwitchController::class)->middleware(['auth', 'verified'])->name('account.switch');

Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');