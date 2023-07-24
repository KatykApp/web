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
Route::get('home/apps-invoices-create', [VistaController::class, 'appsInvoicesCreate']);
Route::get('home/apps-invoices-details', [VistaController::class, 'appsInvoicesDetails']);
Route::get('home/apps-invoices-list', [VistaController::class, 'appsInvoicesList']);
Route::get('home/apps-job-application', [VistaController::class, 'appsJobApplication']);
Route::get('home/apps-job-candidate-grid', [VistaController::class, 'appsJobCandidateGrid']);
Route::get('home/apps-job-candidate-lists', [VistaController::class, 'appsJobCandidateLists']);
Route::get('home/apps-job-categories', [VistaController::class, 'appsJobCategories']);
Route::get('home/apps-job-companies-lists', [VistaController::class, 'appsJobCompaniesLists']);
Route::get('home/apps-job-details', [VistaController::class, 'appsJobDetails']);
Route::get('home/apps-job-grid-lists', [VistaController::class, 'appsJobGridLists']);
Route::get('home/apps-job-lists', [VistaController::class, 'appsJobLists']);
Route::get('home/apps-job-new', [VistaController::class, 'appsJobNew']);
Route::get('home/apps-job-statistics', [VistaController::class, 'appsJobStatistics']);
Route::get('home/apps-mailbox', [VistaController::class, 'appsMailbox']);
Route::get('home/apps-nft-auction', [VistaController::class, 'appsNftAuction']);
Route::get('home/apps-nft-collections', [VistaController::class, 'appsNftCollections']);
Route::get('home/apps-nft-create', [VistaController::class, 'appsNftCreate']);
Route::get('home/apps-nft-creators', [VistaController::class, 'appsNftCreators']);
Route::get('home/apps-nft-explore', [VistaController::class, 'appsNftExplore']);
Route::get('home/apps-nft-item-details', [VistaController::class, 'appsNftItemDetails']);
Route::get('home/apps-nft-marketplace', [VistaController::class, 'appsNftMarketplace']);
Route::get('home/apps-nft-ranking', [VistaController::class, 'appsNftRanking']);
Route::get('home/apps-nft-wallet', [VistaController::class, 'appsNftWallet']);
Route::get('home/apps-projects-create', [VistaController::class, 'appsProjectsCreate']);
Route::get('home/apps-projects-list', [VistaController::class, 'appsProjectsList']);
Route::get('home/apps-projects-overview', [VistaController::class, 'appsProjectsOverview']);
Route::get('home/apps-tasks-details', [VistaController::class, 'appsTasksDetails']);
Route::get('home/apps-tasks-kanban', [VistaController::class, 'appsTasksKanban']);
Route::get('home/apps-tasks-list-view', [VistaController::class, 'appsTasksListView']);
Route::get('home/apps-tickets-details', [VistaController::class, 'appsTicketsDetails']);
Route::get('home/apps-tickets-list', [VistaController::class, 'appsTicketsList']);
Route::get('home/apps-todo', [VistaController::class, 'appsTodo']);
Route::get('home/auth-404-alt', [VistaController::class, 'auth404Alt']);
Route::get('home/auth-404-basic', [VistaController::class, 'auth404Basic']);
Route::get('home/auth-404-cover', [VistaController::class, 'auth404Cover']);
Route::get('home/auth-500', [VistaController::class, 'auth500']);
Route::get('home/auth-lockscreen-basic', [VistaController::class, 'authLockscreenBasic']);
Route::get('home/auth-lockscreen-cover', [VistaController::class, 'authLockscreenCover']);
Route::get('home/auth-logout-basic', [VistaController::class, 'authLogoutBasic']);
Route::get('home/auth-logout-cover', [VistaController::class, 'authLogoutCover']);
Route::get('home/auth-offline', [VistaController::class, 'authOffline']);
Route::get('home/auth-pass-change-basic', [VistaController::class, 'authPassChangeBasic']);
Route::get('home/auth-pass-change-cover', [VistaController::class, 'authPassChangeCover']);
Route::get('home/auth-pass-reset-basic', [VistaController::class, 'authPassResetBasic']);
Route::get('home/auth-pass-reset-cover', [VistaController::class, 'authPassResetCover']);
Route::get('home/auth-signin-basic', [VistaController::class, 'authSigninBasic']);
Route::get('home/auth-signin-cover', [VistaController::class, 'authSigninCover']);
Route::get('home/auth-signup-basic', [VistaController::class, 'authSignupBasic']);
Route::get('home/auth-signup-cover', [VistaController::class, 'authSignupCover']);
Route::get('home/auth-success-msg-basic', [VistaController::class, 'authSuccessMsgBasic']);
Route::get('home/auth-success-msg-cover', [VistaController::class, 'authSuccessMsgCover']);
Route::get('home/auth-twostep-basic', [VistaController::class, 'authTwostepBasic']);
Route::get('home/auth-twostep-cover', [VistaController::class, 'authTwostepCover']);
Route::get('home/charts-apex-area', [VistaController::class, 'chartsApexArea']);
Route::get('home/charts-apex-bar', [VistaController::class, 'chartsApexBar']);
Route::get('home/charts-apex-boxplot', [VistaController::class, 'chartsApexBoxplot']);
Route::get('home/charts-apex-bubble', [VistaController::class, 'chartsApexBubble']);
Route::get('home/charts-apex-candlestick', [VistaController::class, 'chartsApexCandlestick']);
Route::get('home/charts-apex-column', [VistaController::class, 'chartsApexColumn']);
Route::get('home/charts-apex-funnel', [VistaController::class, 'chartsApexFunnel']);
Route::get('home/charts-apex-heatmap', [VistaController::class, 'chartsApexHeatmap']);
Route::get('home/charts-apex-line', [VistaController::class, 'chartsApexLine']);
Route::get('home/charts-apex-mixed', [VistaController::class, 'chartsApexMixed']);
Route::get('home/charts-apex-pie', [VistaController::class, 'chartsApexPie']);
Route::get('home/charts-apex-polar', [VistaController::class, 'chartsApexPolar']);
Route::get('home/charts-apex-radar', [VistaController::class, 'chartsApexRadar']);
Route::get('home/charts-apex-radialbar', [VistaController::class, 'chartsApexRadialbar']);  // Falta crear el metodo
Route::get('home/charts-apex-range-area', [VistaController::class, 'chartsApexRangeArea']);
Route::get('home/charts-apex-scatter', [VistaController::class, 'chartsApexScatter']);
Route::get('home/charts-apex-timeline', [VistaController::class, 'chartsApexTimeline']);
Route::get('home/charts-apex-treemap', [VistaController::class, 'chartsApexTreemap']);
Route::get('home/charts-chartjs', [VistaController::class, 'chartsChartjs']);
Route::get('home/charts-echarts', [VistaController::class, 'chartsEcharts']);
Route::get('home/dashboard-analytics', [VistaController::class, 'dashboardAnalytics']);
Route::get('home/dashboard-crm', [VistaController::class, 'dashboardCrm']);
Route::get('home/dashboard-crypto', [VistaController::class, 'dashboardCrypto']);
Route::get('home/dashboard-job', [VistaController::class, 'dashboardJob']);
Route::get('home/dashboard-nft', [VistaController::class, 'dashboardNft']);
Route::get('home/dashboard-projects', [VistaController::class, 'dashboardProjects']);
Route::get('home/dashboard', [VistaController::class, 'dashboard']);    // error
Route::get('home/forms-advanced', [VistaController::class, 'formsAdvanced']);
Route::get('home/forms-checkboxs-radios', [VistaController::class, 'formsCheckboxsRadios']);
Route::get('home/forms-editors', [VistaController::class, 'formsEditors']);
Route::get('home/forms-elements', [VistaController::class, 'formsElements']);
Route::get('home/forms-file-uploads', [VistaController::class, 'formsFileUploads']);
Route::get('home/forms-layouts', [VistaController::class, 'formsLayouts']);
Route::get('home/forms-masks', [VistaController::class, 'formsMasks']);
Route::get('home/forms-pickers', [VistaController::class, 'formsPickers']);
Route::get('home/forms-range-sliders', [VistaController::class, 'formsRangeSliders']);
Route::get('home/forms-select', [VistaController::class, 'formsSelect']);
Route::get('home/forms-select2', [VistaController::class, 'formsSelect2']);
Route::get('home/forms-validation', [VistaController::class, 'formsValidation']);
Route::get('home/forms-wizard', [VistaController::class, 'formsWizard']);
Route::get('home/icons-boxicons', [VistaController::class, 'iconsBoxicons']);
Route::get('home/icons-crypto', [VistaController::class, 'iconsCrypto']);
Route::get('home/icons-feather', [VistaController::class, 'iconsFeather']);
Route::get('home/icons-lineawesome', [VistaController::class, 'iconsLineawesome']);
Route::get('home/icons-materialdesign', [VistaController::class, 'iconsMaterialdesign']);
Route::get('home/icons-remix', [VistaController::class, 'iconsRemix']);
/* Route::get('home/index', [VistaController::class, 'index']);  // Ya esta en lista
Route::get('home/job-landing', [VistaController::class, 'jobLanding']);  // ya esta en lista */
Route::get('home/landing', [VistaController::class, 'jobLanding']);  
Route::get('home/layouts-detached', [VistaController::class, 'layoutsDetached']);  
Route::get('home/layouts-horizontal', [VistaController::class, 'layoutsHorizontal']);  
Route::get('home/layouts-two-column', [VistaController::class, 'layoutsTwoColumn']);  
Route::get('home/layouts-vertical-hovered', [VistaController::class, 'layoutsVerticalHovered']);  
Route::get('home/maps-google', [VistaController::class, 'mapsGoogle']);  
Route::get('home/maps-leaflet', [VistaController::class, 'mapsLeaflet']);  
Route::get('home/maps-vector', [VistaController::class, 'mapsVector']);  
Route::get('home/navigation-menu', [VistaController::class, 'navigationMenu']);  // Error
Route::get('home/nft-landing', [VistaController::class, 'nftLanding']);  
Route::get('home/pages-coming-soon', [VistaController::class, 'pagesComingSoon']);  
Route::get('home/pages-faqs', [VistaController::class, 'pagesFaqs']);  
Route::get('home/pages-gallery', [VistaController::class, 'pagesGallery']);  
Route::get('home/pages-maintenance', [VistaController::class, 'pagesMaintenance']);  
Route::get('home/pages-pricing', [VistaController::class, 'pagesPricing']);  
Route::get('home/pages-privacy-policy', [VistaController::class, 'pagesPrivacyPolicy']);  
Route::get('home/pages-profile-settings', [VistaController::class, 'pagesProfileSettings']);  // Error
Route::get('home/pages-profile', [VistaController::class, 'pagesProfile']);  // Error
Route::get('home/pages-search-results', [VistaController::class, 'pagesSearchResults']);  
Route::get('home/pages-sitemap', [VistaController::class, 'pagesSitemap']);  
Route::get('home/pages-starter', [VistaController::class, 'pagesStarter']);  
Route::get('home/pages-team', [VistaController::class, 'pagesTeam']);  
Route::get('home/pages-term-conditions', [VistaController::class, 'pagesTermConditions ']);  // Error
Route::get('home/pages-timeline', [VistaController::class, 'pagesTimeline']);  
Route::get('home/policy', [VistaController::class, 'policy']);  // Error
Route::get('home/tables-basic', [VistaController::class, 'tablesBasic']);  
Route::get('home/tables-datatables', [VistaController::class, 'tablesDatatables']);  
Route::get('home/tables-gridjs', [VistaController::class, 'tablesGridjs']);  
Route::get('home/tables-listjs', [VistaController::class, 'tablesListjs']);  
Route::get('home/terms', [VistaController::class, 'terms']);  // Error
Route::get('home/ui-accordions', [VistaController::class, 'uiAccordions']);  
Route::get('home/ui-alerts', [VistaController::class, 'uiAlerts']);  
Route::get('home/ui-badges', [VistaController::class, 'uiBadges']);  
Route::get('home/ui-buttons', [VistaController::class, 'uiButtons']);  
Route::get('home/ui-cards', [VistaController::class, 'uiCards']);  
Route::get('home/ui-carousel', [VistaController::class, 'uiCarousel']);  
Route::get('home/ui-colors', [VistaController::class, 'uiColors']);  
Route::get('home/ui-dropdowns', [VistaController::class, 'uiDropdowns']);  
Route::get('home/ui-embed-video', [VistaController::class, 'uiEmbedVideo']);  
Route::get('home/ui-general', [VistaController::class, 'uiGeneralo']);  
Route::get('home/ui-grid', [VistaController::class, 'uiGrid']);  
Route::get('home/ui-images', [VistaController::class, 'uiImages']);  
Route::get('home/ui-links', [VistaController::class, 'uiLinks']);  
Route::get('home/ui-lists', [VistaController::class, 'uiLists']);  
Route::get('home/ui-media', [VistaController::class, 'uiMedia']);  
Route::get('home/ui-modals', [VistaController::class, 'uiModals']);  
Route::get('home/ui-notifications', [VistaController::class, 'uiNotifications']);  
Route::get('home/ui-offcanvas', [VistaController::class, 'uiOffcanvas']);  
Route::get('home/ui-placeholders', [VistaController::class, 'uiPlaceholders']);  
Route::get('home/ui-progress', [VistaController::class, 'uiProgress']);  
Route::get('home/ui-ribbons', [VistaController::class, 'uiRibbons']);  
Route::get('home/ui-tabs', [VistaController::class, 'uiTabs']);  
Route::get('home/ui-typography', [VistaController::class, 'uiTypography']);  
Route::get('home/ui-utilities', [VistaController::class, 'uiUtilities']);  
Route::get('home/welcome', [VistaController::class, 'welcome']);  
Route::get('home/widgets', [VistaController::class, 'widgets']);  // Error







/* ------------------------------------------------------- */











