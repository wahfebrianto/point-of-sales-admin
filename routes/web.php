<?php

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

Route::get('/', 'HomeController@index');

/**
 * Register the typical authentication routes for an application.
 * Replacing: Auth::routes();
 */
Route::group(['namespace' => 'Auth'], function () {
    // Authentication Routes...
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('logout');
});

// Redirect to /dashboard
Route::get('/home', 'HomeController@index')->name('home');

/**
 * Requires authentication.
 */
Route::group(['middleware' => 'auth'], function () {
    /**
     * Dashboard. Common access.
     * // Matches The "/dashboard/*" URLs
     */
    Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard', 'as' => 'dashboard::'], function () {
        /**
         * Dashboard Index
         * // Route named "dashboard::index"
         */
        Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);

        /**
         * Profile
         * // Route named "dashboard::profile"
         */
        Route::get('profile', ['as' => 'profile', 'uses' => 'ProfileController@showProfile']);
        Route::post('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@updateProfile']);
    });

    /**
     * // Matches The "/admin/*" URLs
     */
    Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin::'], function () {
        /**
         * Admin Access
         */
        Route::group(['middleware' => 'admin'], function () {
            /**
             * Admin Index
             * // Route named "admin::index"
             */
            Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);

            /**
             * Manage Users.
             * // Routes name "admin.users.*"
             */
            Route::resource('users', 'UsersController');
        });
    });

});


Auth::routes();

Route::get('/home', 'HomeController@index');



Route::resource('clinics', 'ClinicController');

Route::resource('features', 'FeatureController');

Route::resource('packets', 'PacketController');

Route::resource('menus', 'MenuController');

Route::resource('payments', 'PaymentController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('promos', 'PromoController');

Route::resource('topups', 'TopupController');

Route::resource('supports', 'SupportController');

Route::resource('conversations', 'ConversationController');

Route::resource('messages', 'MessageController');

Route::resource('bills', 'BillController');

Route::resource('logs', 'LogController');

Route::resource('users', 'UserController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
