<?php

use App\Http\Controllers\jobController;
use App\Http\Controllers\VistaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
}); */

Route::get('/', jobController::class);  // Controla una unica vista

// Control de varias vistas 
/* Route::get('vistas/create', [VistasController::class, 'create']); */
/* Route::controller(VistaController::class)->group(function(){
    Route::get('/home', 'index');
    Route::get('/home/job-landing', 'jobLanding');
    Route::get('/home/auth-signin-basic', 'authSigninBasic');
}); */



Route::get('home', [VistaController::class, 'index']);
Route::get('home/job-landing', [VistaController::class, 'jobLanding']);
Route::get('home/auth-signin-basic', [VistaController::class, 'authSigninBasic']);
Route::get('home/advance-ui-animation', [VistaController::class, 'advanceUiAnimation']);
Route::get('home/advance-ui-highlight', [VistaController::class, 'advanceUiHighlight']);
Route::get('home/advance-ui-nestable', [VistaController::class, 'advanceUiNestable']);
Route::get('home/advance-ui-ratings', [VistaController::class, 'advanceUiRatings']);
Route::get('home/advance-ui-scrollbar', [VistaController::class, 'advanceUiScrollbar']);
Route::get('home/advance-ui-scrollspy', [VistaController::class, 'advanceUiScrollspy']);
Route::get('home/advance-ui-sweetalerts', [VistaController::class, 'advanceUiSweetalerts']);
Route::get('home/advance-ui-swiper', [VistaController::class, 'advanceUiSwiper']);
Route::get('home/advance-ui-tour', [VistaController::class, 'advanceUiTour']);
Route::get('home/apps-api-key', [VistaController::class, 'appsApiKey']);
Route::get('home/apps-calendar', [VistaController::class, 'appsCalendar']);
Route::get('home/apps-chat', [VistaController::class, 'appsChat']);
Route::get('home/apps-crm-companies', [VistaController::class, 'appsCrmCompanies']);






Route::get('home/apps-crm-contacts', [VistaController::class, 'appsCrmContacts']);
Route::get('home/apps-crm-deals', [VistaController::class, 'appsCrmDeals']);
Route::get('home/apps-crm-leads', [VistaController::class, 'appsCrmLeads']);
Route::get('home/apps-crypto-buy-sell', [VistaController::class, 'appsCryptoBuySell']);
Route::get('home/apps-crypto-ico', [VistaController::class, 'appsCryptoIco']);
Route::get('home/apps-crypto-kyc', [VistaController::class, 'appsCryptoKyc']);
Route::get('home/apps-crypto-orders', [VistaController::class, 'appsCryptoOrders']);
Route::get('home/apps-crypto-transactions', [VistaController::class, 'appsCryptoTransactions']);
Route::get('home/apps-crypto-wallet', [VistaController::class, 'appsCryptoWallet']);
Route::get('home/apps-ecommerce-add-product', [VistaController::class, 'appsEcommerceAddProduct']);
Route::get('home/apps-ecommerce-cart', [VistaController::class, 'appsEcommerceCart']);
Route::get('home/apps-ecommerce-checkout', [VistaController::class, 'appsEcommerceCheckout']);
Route::get('home/apps-ecommerce-customers', [VistaController::class, 'appsEcommerceCustomers']);
Route::get('home/apps-ecommerce-order-details', [VistaController::class, 'appsEcommerceOrderDetails']);
Route::get('home/apps-ecommerce-orders', [VistaController::class, 'appsEcommerceOrders']);
Route::get('home/apps-ecommerce-product-details', [VistaController::class, 'appsEcommerceProductDetails']);
Route::get('home/apps-ecommerce-products', [VistaController::class, 'appsEcommerceProducts']);
Route::get('home/apps-ecommerce-seller-details', [VistaController::class, 'appsEcommerceSellerDetails']);
Route::get('home/apps-ecommerce-sellers', [VistaController::class, 'appsEcommerceSellers']);
Route::get('home/apps-email-basic', [VistaController::class, 'appsEmailBasic']);
Route::get('home/apps-email-ecommerce', [VistaController::class, 'appsEmailEcommerce']);
Route::get('home/apps-file-manager', [VistaController::class, 'appsFileManager']);








