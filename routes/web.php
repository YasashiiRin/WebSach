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
Route::get('/', function () {
    return view('page.Pagelog');
});
Route::get('index',[
       'as'=>'trang-chu',
       'uses'=>'App\Http\Controllers\PController@getIndex'
 ]);
Route::get('loai-san-pham/{type}',[
       'as'=>'loaisanpham',
       'uses'=>'App\Http\Controllers\PController@getLoaiSP'
 ]);
Route::get('chi-tiet-san-pham/{id}',[
       'as'=>'chitietsanpham',
       'uses'=>'App\Http\Controllers\PController@getChitiet'
 ]);
Route::get('lien-he',[
       'as'=>'lienhe',
       'uses'=>'App\Http\Controllers\PController@getLienHe'
 ]);
Route::get('gioi-thieu',[
       'as'=>'gioithieu',
       'uses'=>'App\Http\Controllers\PController@getGioiThieu'
 ]);
Route::get('page-log',[
       'as'=>'pagelog',
       'uses'=>'App\Http\Controllers\PController@getPL'
 ]);
Route::get('dang-nhap',[
       'as'=>'login',
       'uses'=>'App\Http\Controllers\PController@getLogin'
 ]);
Route::post('dang-nhap',[
       'as'=>'login',
       'uses'=>'App\Http\Controllers\PController@postLogin'
 ]);
Route::get('dang-ky',[
       'as'=>'sigup',
       'uses'=>'App\Http\Controllers\PController@getSigup'
 ]);
Route::post('dang-ky',[
       'as'=>'sigup',
       'uses'=>'App\Http\Controllers\PController@postSigup'
 ]);
Route::get('dang-xuat',[
       'as'=>'logout',
       'uses'=>'App\Http\Controllers\PController@getlogout'
 ]);
Route::get('search',[
       'as'=>'search',
       'uses'=>'App\Http\Controllers\PController@getsearch'
 ]);
Route::get('profile',[
       'as'=>'prf',
       'uses'=>'App\Http\Controllers\PController@profile'
 ]);
// Route::get('upload',[
//        'as'=>'upl',
//        'uses'=>'App\Http\Controllers\PController@getUpload'
//  ]);
Route::post('upload',[
       'as'=>'uploadh',
       'uses'=>'App\Http\Controllers\PController@getUploatavata'
 ]);
Route::get('add-cart/{id}',[
       'as'=>'giohang',
       'uses'=>'App\Http\Controllers\PController@getaddcart'
 ]);
Route::get('delete-cart/{id}',[
       'as'=>'xoagiohang',
       'uses'=>'App\Http\Controllers\PController@getdeletecart'
 ]);
Route::get('dat-hang',[
       'as'=>'dathang',
       'uses'=>'App\Http\Controllers\PController@getdathang'
 ]);
Route::post('dat-hang',[
       'as'=>'dathang',
       'uses'=>'App\Http\Controllers\PController@postdathang'
 ]);


