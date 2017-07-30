<?php

//index
Route::get('/',  ['uses' =>'WebsiteController@index']);

Route::group(['middleware' => ['auth:web']], function()
{
  //all global machines and services
  Route::prefix('machines')->group(function() {

  Route::get('/', ['uses'=>'MachineController@allGlobalMachines']);
  Route::get('/services', ['uses'=>'MachineController@allGlobalServices']);
  Route::get('/{machineId}', ['uses'=> 'MachineController@machineDetail']);
  Route::get('/{machineId}/services', ['uses'=>'ServiceController@allServices']);
  Route::post('/', 'MachineController@addGlobalMachine');
  });

  //all local machines and services
  Route::prefix('user')->group(function() {

  Route::get('/machines', ['uses'=>'MachineController@allLocalMachines']);
  Route::get('/services', ['uses'=>'MachineController@allLocalServices']);
  Route::get('/machines/{machineId}', ['uses'=> 'MachineController@machineDetail']);
  Route::get('/{machineId}/services', ['uses'=>'ServiceController@allServices']);
  Route::post('/machines/{machineId}', ['uses'=>'MachineController@addLocalMachine']);
  });

});


Auth::routes();

//user related routes
Route::group(['middleware' => ['web']], function() {
    Route::get('/profile','ProfileController@profile');
    route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
});

//admin related routes
Route::prefix('admin')->group(function(){
   Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login'); //--> geef login form weer.
   Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
   Route::get('/', 'AdminController@index')->name('admin.dashboard');
   Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});
