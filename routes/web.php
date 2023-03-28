<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\User\UserPageController;
use App\Http\Controllers\User\UserPostController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AdminPostController;

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

Route::get('/', [PageController::class, 'index']);

Route::get('/about-us', [PageController::class, 'about']);

Route::get('/investment', [PageController::class, 'investment']);

Route::get('/investors', [PageController::class, 'investor']);

Route::get('/faq', [PageController::class, 'faq']);

Route::get('/contact-us', [PageController::class, 'contact']);

Route::post('sigin', [AuthController::class, 'signin']);

Route::get('register', [PageController::class, 'register']);

Route::get('/login', [PageController::class, 'login'])->name('login');

Route::get('/forget-password', [PageController::class, 'resetpassword'])->name('forget.password.get');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');

Route::post('/forget-password', [ResetPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');

Route::post('/reset-password', [ResetPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::post('savelogin', [AuthController::class, 'savelogin']);

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth', 'prefix' => 'user', 'before' => 'user'], function () {

    Route::get('/dashboard', [UserPageController::class, 'dashboard'])->name('userdashboard');

    Route::get('/investment-plan', [UserPageController::class, 'investplan']);

    Route::get('/invest', [UserPageController::class, 'invest'])->name('userinvest');

    Route::post('/save-invest', [UserPostController::class, 'saveinvest'])->name('save-invest');

    Route::get('/payment', [UserPageController::class, 'payment'])->name('userpayment');

    Route::get('/investment-order', [UserPageController::class, 'investorder'])->name('userinvestmentorder');

    Route::get('/pending-investment-order', [UserPageController::class, 'pendinginvest'])->name('userpendinginvestment');

    Route::get('/withdrawal-form', [UserPageController::class, 'withdrawal']);

    Route::post('/request-withdrawal', [UserPostController::class, 'savewithdraw']);

    Route::get('/withdrawal-order', [UserPageController::class, 'withdraworder'])->name('userwithdraworder');

    Route::get('/pending-withdrawal-order', [UserPageController::class, 'pendingwithdraw'])->name('userpendingwithdraw');
});

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'before' => 'admin'], function () {

    Route::get('/dashboard', [AdminPageController::class, 'dashboard'])->name('admindashboard');

    Route::get('/users-info', [AdminPageController::class, 'users']);

    Route::post('update-profile/{id}', [AuthController::class, 'updateprofile'])->name('updateprofile');

    Route::get('/interest', [AdminPageController::class, 'interest']);

    Route::get('/single-user-deposit-list/{id}', [AdminPageController::class, 'userdeposit'])->name('userdepositlist');

    Route::get('/manual-deposit', [AdminPageController::class, 'manualdeposit']);

    Route::post('/save-deposit', [AdminPostController::class, 'savedeposit']);

    Route::get('/activate-user/{id}', [AdminPostController::class, 'activateuser'])->name('activateuser');

    Route::get('/deactivate-user/{id}', [AdminPostController::class, 'deactivateuser'])->name('deactivateuser');

    Route::get('/pending-deposit', [AdminPageController::class, 'pendingdeposit']);

    Route::get('/approve-deposit/{id}', [AdminPostController::class, 'approvedeposit'])->name('approvedeposit');

    Route::get('/pending-withdrawal', [AdminPageController::class, 'pendingwithdrawal']);

    Route::get('/approve-withdraw/{id}', [AdminPostController::class, 'approvedwithdraw'])->name('approvewithdraw');

    Route::get('/confirm-withdrawal', [AdminPageController::class, 'confirmwithdrawal']);

    Route::get('/confirm-deposit', [AdminPageController::class, 'confirmdeposit']);

    Route::get('delete-deposit/{id}', [AdminPostController::class, 'deletedeposit'])->name('deletedeposit');

    Route::get('delete-withdraw/{id}', [AdminPostController::class, 'deletewithdraw'])->name('deletewithdraw');
});