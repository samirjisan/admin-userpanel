<?php

//Route::get('/', function () {
//    return view('welcome');
//});

//<-- Panel Login Route -->
//user route
Route::get('/login','UserLoginController@index')->name('user.login.show');
Route::post('/login','UserLoginController@login')->name('user.login');
Route::get('/logout','UserLoginController@logout')->name('user.logout');


//Route::Resource('operator','OperatorController');



Route::get('/user','UserRegisterController@index')->name('user.register');
Route::post('/user','UserRegisterController@register')->name('user.register');


//admin route
Route:: get('/admin/login','AdminLoginController@index')->name('admin.login.show');
Route:: post('/admin/login','AdminLoginController@login')->name('admin.login');
Route:: get('/admin/logout','AdminLoginController@logout')->name('admin.logout');



Route::group(['middleware'=> 'chkUser'],function () {
    Route::get('/dashboard', 'UserManageController@index')->name('user.show');
    Route::get('/user/{id}/edit', 'UserManageController@edit')->name('user.edit');
    Route::post('/user/{id}/update', 'UserManageController@update')->name('user.update');
    Route::get('/user/{id}/delete', 'UserManageController@delete')->name('user.delete');
    Route::get('/search','UserManageController@search')->name('user.search');



    Route::get('/operator','OperatorManageController@index')->name('operators.index');
//    Route::post('/operator','OperatorManageController@store')->name('operators.store');
//    Route::get('/operator/logout','OperatorManageController@index')->name('operators.logout');


});

    Route::group(['middleware'=> 'chkAdmin'],function () {

        Route::get('/adminAccess','AdminManageController@index')->name('adminAccess.index');
        Route::post('/adminAccess','AdminManageController@index')->name('adminAccess.index');
        Route::post('/adminAccess','AdminManageController@store')->name('adminAccess.store');
     //   Route::get('/adminAccess/logout','AdminManageController@index')->name('adminAccess.logout');


        Route:: get('/admin/dashboard','AdminLoginController@dashboard')->name('admin.dashboard');


        Route::get('/adminAccess/{id}/edit', 'AdminManageController@edit')->name('adminAccess.edit');
        Route::post('/adminAccess/{id}/update', 'AdminManageController@update')->name('adminAccess.update');
        Route::get('/adminAccess/{id}/delete', 'AdminManageController@delete')->name('adminAccess.delete');
    });

//<-- Panel Login Route -->

Route::get('profiles',"Profiles@index");


// Search Route
//Route::get('/find', 'AccountController@find');
//Route::post('/findSearch', 'AccountController@findSearch');



//use App\User;
//use Illuminate\Support\Facades\Input;
//
////Route::get('/dashboard', 'UserManageController@index')->name('user.show');
//
//Route::get('/', function () {
//    return view('test_search');
//});
//
//
//Route::any('/dashboard',function(){
//    $q = Input::get ( 'q' );
//    $user = User::where('username','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
//    if(count($user) > 0)
//        return view('test_search')->withDetails($user)->withQuery ( $q );
//    else return view ('test_search')->withMessage('No Details found. Try to search again !');
//});


