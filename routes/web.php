<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GroupRequests;
use App\Http\Controllers\AddGroupController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\View;

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

Route::get('/token', function (Request $request) {
    $token = $request->session()->token();
    $token = csrf_token();
    return $token;
});

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', [HomeController::class, 'index'])->middleware(['auth'])->name('home');
Route::get('/GetAdminDefault', [AdminController::class, 'index']);

Route::post('/GroupRequestStatusAccept', [GroupRequests::class, 'accept']);
Route::post('/GroupRequestStatusDestroy', [GroupRequests::class, 'Destroy']);

Route::post('/CreateNewGroupRequest', [AddGroupController::class, 'index']);

Route::post('/RequestUserGroupMembers', [GroupRequests::class, 'RequestUserGroupMembers']);
Route::post('/RequestUserGroupMembersMore', [GroupRequests::class, 'RequestUserGroupMembersMore']);
Route::post('/AddingToMyGroup', [GroupRequests::class, 'index']);
Route::post('/UpdateNavbar', [AdminController::class, 'updateNavbar']);
Route::post('/UpdateGroup', [AdminController::class, 'updateGroup']);

Route::get('/admin/home', function () {
    return view('admin');
})->middleware(['auth'])->name('admin/home');

require __DIR__.'/auth.php';
