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

Route::get('/', 'ApiController@indexAction');
Route::get('/CPU', 'ApiController@CPUAction');
Route::get('/Motherboard', 'ApiController@MotherboardAction');
Route::get('/Videocard', 'ApiController@VideocardAction');
Route::get('/DRAM', 'ApiController@DRAMAction');
Route::get('/PowerSupply', 'ApiController@PowerSupplyAction');
Route::get('/Harddrive', 'ApiController@HarddriveAction');
