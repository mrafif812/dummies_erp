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

use Illuminate\Support\Facades\Route;
use Modules\ProjectManagement\Http\Controllers\contract\ContractTypeController;

Route::middleware('auth')->prefix('projectmanagement')->group(function() {
    Route::get('/', 'ProjectManagementController@index');

    Route::resource('contract-type', ContractTypeController::class);
});
