<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebhookController;
use App\Http\Livewire\Admin\Claims;
use App\Http\Livewire\Admin\Compounds;
use App\Http\Livewire\Admin\Create;
use App\Http\Livewire\Admin\Home as AdminHome;
use App\Http\Livewire\Admin\Investments;
use App\Http\Livewire\Admin\Pending;
use App\Http\Livewire\Admin\Plans;
use App\Http\Livewire\Admin\Tokens;
use App\Http\Livewire\Admin\Withdrawals;
use App\Http\Livewire\User\Deposit;
use App\Http\Livewire\User\Downlines;
use App\Http\Livewire\User\Funds;
use App\Http\Livewire\User\History;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\User\Home;
use App\Http\Livewire\User\Invest;
use App\Http\Livewire\User\Otc;
use App\Http\Livewire\User\Portfolio;
use App\Http\Livewire\User\Profile;
use App\Http\Livewire\User\Settings;
use App\Http\Livewire\User\Transfer;
use App\Http\Livewire\User\Withdrawal;
use Illuminate\Mail\Markdown;

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
    return view('index');
})->name('landing');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/auto-arbitrage', function () {
    return view('auto-arbitrage');
})->name('auto-arbitrage');

Route::get('/market-making', function () {
    return view('market-making');
})->name('market-making');

Route::get('/liquidity-enhancement', function () {
    return view('liquidity-enhancement');
})->name('liquidity-enhancement');

Route::get('/risk-management', function () {
    return view('risk-management');
})->name('risk-management');

Route::get('/otc-trading', function () {
    return view('otc-trading');
})->name('otc-trading');

Route::get('/company', function () {
    return view('company');
})->name('company');

Route::get('/investment-approach', function () {
    return view('investment-approach');
})->name('investment-approach');

Route::get('/technology', function () {
    return view('technology');
})->name('technology');

Route::get('/insights', function () {
    return view('insights');
})->name('insights');

Route::get('/careers', function () {
    return view('careers');
})->name('careers');

Route::get('/open-positions', function () {
    return view('open-positions');
})->name('open-positions');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth', 'role:user'], 'prefix' => 'user'], function() {
    Route::get('/', Home::class )->name('home');
    Route::get('/funds', Funds::class )->name('funds');
    Route::get('/profile', Profile::class )->name('profile');
    Route::get('/invest', Invest::class )->name('invest');
    Route::get('/portfolio', Portfolio::class )->name('portfolio');
    Route::get('/history', History::class )->name('history');
    Route::get('/transfer', Transfer::class )->name('transfer');
    Route::get('/downlines', Downlines::class )->name('downlines');
    Route::get('/otc', Otc::class )->name('otc');
    Route::get('/settings', Settings::class )->name('settings');
    Route::get('/deposit', Deposit::class )->name('deposit');
    Route::get('/withdraw', Withdrawal::class )->name('withdrawal');
    Route::post('/updatepaymentstatus', [HomeController::class, 'updatepaymentstatus'])->name('user.updatepaymentstatus');
    Route::get('mail', function () {
        $markdown = new Markdown(view(), config('mail.markdown'));
    
        return $markdown->render('emails.ReferralRegistration');
    });
    
});

Route::group(['middleware' => ['auth', 'role:administrator'], 'prefix' => 'admin'], function() {
    Route::get('/', AdminHome::class )->name('admin.home');
    Route::get('/investments', Investments::class )->name('admin.investments');
    Route::get('/claims', Claims::class )->name('admin.claims');
    Route::get('/withdrawals', Withdrawals::class )->name('admin.withdrawals');
    Route::get('/compounds', Compounds::class )->name('admin.compounds');
    Route::get('/pending', Pending::class )->name('admin.pending');
    Route::get('/tokens', Tokens::class )->name('admin.tokens');
    Route::get('/plans', Plans::class )->name('admin.plans');
    Route::get('/create', Create::class )->name('admin.create');
});

Route::any('/webhook', [WebhookController::class, 'webhook']);

require __DIR__.'/auth.php';