<?php
use RealRashid\SweetAlert\Facades\Alert;

Route::get('/', function () {
    return view('welcome');
    // return redirect('login')
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Controller untuk user
Route::group(['middleware' => ['auth']], function(){
// create user
Route::resource('user','UserController');
Route::resource('pelanggan','PelangganController');
Route::resource('hewan','HewanController');
Route::resource('shop','ShopController');
});
?>
