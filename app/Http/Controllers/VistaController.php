<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistaController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function jobLanding()
    {
        return view('job-landing');
    }

    public function authSigninBasic()
    {
        return view('auth-signin-basic');
    }
    public function advanceUiAnimation()
    {
        return view('advance-ui-animation');
    }
    public function advanceUiHighlight()
    {
        return view('advance-ui-highlight');
    }

    public function advanceUiNestable()
    {
        return view('advance-ui-nestable');
    }

    public function advanceUiRatings()
    {
        return view('advance-ui-ratings');
    }

    public function advanceUiScrollbar()
    {
        return view('advance-ui-scrollbar');
    }

    public function advanceUiScrollspy()
    {
        return view('advance-ui-scrollspy');
    }

    public function advanceUiSweetalerts()
    {
        return view('advance-ui-sweetalerts');
    }

    public function advanceUiSwiper()
    {
        return view('advance-ui-swiper');
    }

    public function advanceUiTour()
    {
        return view('advance-ui-tour');
    }

    public function appsApiKey()
    {
        return view('apps-api-key');
    }

    public function appsCalendar()
    {
        return view('apps-calendar');
    }

    public function appsChat()
    {
        return view('apps-chat');
    }

    public function appsCrmCompanies()
    {
        return view('apps-crm-companies');
    }

    public function appsCrmContacts()
    {
        return view('apps-crm-contacts');
    }

    public function appsCrmDeals()
    {
        return view('apps-crm-deals');
    }

    public function appsCrmLeads()
    {
        return view('apps-crm-leads');
    }

    public function appsCryptoBuySell()
    {
        return view('apps-crypto-buy-sell');
    }

    public function appsCryptoIco()
    {
        return view('apps-crypto-ico');
    }

    public function appsCryptoKyc()
    {
        return view('apps-crypto-kyc');
    }

    public function appsCryptoOrders()
    {
        return view('apps-crypto-orders');
    }

    public function appsCryptoTransactions()
    {
        return view('apps-crypto-transactions');
    }

    public function appsCryptoWallet()
    {
        return view('apps-crypto-wallet');
    }

    public function appsEcommerceAddProduct()
    {
        return view('apps-ecommerce-add-product');
    }

    public function appsEcommerceCart()
    {
        return view('apps-ecommerce-cart');
    }

    public function appsEcommerceCheckout()
    {
        return view('apps-ecommerce-checkout');
    }

    public function appsEcommerceCustomers()
    {
        return view('apps-ecommerce-customers');
    }

    public function appsEcommerceOrderDetails()
    {
        return view('apps-ecommerce-order-details');
    }

    public function appsEcommerceOrders()
    {
        return view('apps-ecommerce-orders');
    }

    public function appsEcommerceProductDetails()
    {
        return view('apps-ecommerce-product-details');
    }

    public function appsEcommerceProducts()
    {
        return view('apps-ecommerce-products');
    }

    public function appsEcommerceSellerDetails()
    {
        return view('apps-ecommerce-seller-details');
    }

    public function appsEcommerceSellers()
    {
        return view('apps-ecommerce-sellers');
    }

    public function appsEmailBasic()
    {
        return view('apps-email-basic');
    }

    public function appsEmailEcommerce()
    {
        return view('apps-email-ecommerce');
    }

    public function appsFileManager()
    {
        return view('apps-file-manager');
    }

    public function appsInvoicesCreate()
    {
        return view('apps-invoices-create');
    }

    public function appsInvoicesDetails()
    {
        return view('apps-invoices-details');
    }

    public function appsInvoicesList()
    {
        return view('apps-invoices-list');
    }

    public function appsJobApplication()
    {
        return view('apps-job-application');
    }

    public function appsJobCandidateGrid()
    {
        return view('apps-job-candidate-grid');
    }

    public function appsJobCandidateLists()
    {
        return view('apps-job-candidate-lists');
    }

    public function appsJobCategories()
    {
        return view('apps-job-categories');
    }

    public function appsJobCompaniesLists()
    {
        return view('apps-job-companies-lists');
    }

    public function appsJobDetails()
    {
        return view('apps-job-details');
    }

    public function appsJobGridLists()
    {
        return view('apps-job-grid-lists');
    }

    public function appsJobLists()
    {
        return view('apps-job-lists');
    }

    public function appsJobNew()
    {
        return view('apps-job-new');
    }

    public function appsJobStatistics()
    {
        return view('apps-job-statistics');
    }

    public function appsMailbox()
    {
        return view('apps-mailbox');
    }

    public function appsNftAuction()
    {
        return view('apps-nft-auction');
    }

    public function appsNftCollections()
    {
        return view('apps-nft-collections');
    }

    public function appsNftCreate()
    {
        return view('apps-nft-create');
    }

    public function appsNftCreators()
    {
        return view('apps-nft-creators');
    }

    public function appsNftExplore()
    {
        return view('apps-nft-explore');
    }

    public function appsNftItemDetails()
    {
        return view('apps-nft-item-details');
    }

    public function appsNftMarketplace()
    {
        return view('apps-nft-marketplace');
    }

    public function appsNftRanking()
    {
        return view('apps-nft-ranking');
    }

    public function appsNftWallet()
    {
        return view('apps-nft-wallet');
    }

    public function appsProjectsCreate()
    {
        return view('apps-projects-create');
    }

    public function appsProjectsList()
    {
        return view('apps-projects-list');
    }

    public function appsProjectsOverview()
    {
        return view('apps-projects-overview');
    }

    public function appsTasksDetails()
    {
        return view('apps-tasks-details');
    }

    public function appsTasksKanban()
    {
        return view('apps-tasks-kanban');
    }

    public function appsTasksListView()
    {
        return view('apps-tasks-list-view');
    }

    public function appsTicketsDetails()
    {
        return view('apps-tickets-details');
    }

    public function appsTicketsList()
    {
        return view('apps-tickets-list');
    }

    public function appsTodo()
    {
        return view('apps-todo');
    }

    public function auth404Alt()
    {
        return view('auth-404-alt');
    }

    public function auth404Basic()
    {
        return view('auth-404-basic');
    }

    public function auth404Cover()
    {
        return view('auth-404-cover');
    }

    public function auth500()
    {
        return view('auth-500');
    }

    public function authLockscreenBasic()
    {
        return view('auth-lockscreen-basic');
    }

    public function authLockscreenCover()
    {
        return view('auth-lockscreen-cover');
    }

    public function authLogoutBasic()
    {
        return view('auth-logout-basic');
    }

    public function authLogoutCover()
    {
        return view('auth-logout-cover');
    }

    public function authOffline()
    {
        return view('auth-offline');
    }

    public function authPassChangeBasic()
    {
        return view('auth-pass-change-basic');
    }

    public function authPassChangeCover()
    {
        return view('auth-pass-change-cover');
    }

    public function authPassResetBasic()
    {
        return view('auth-pass-reset-basic');
    }

    public function authPassResetCover()
    {
        return view('auth-pass-reset-cover');
    }

    public function authSigninCover()
    {
        return view('auth-signin-cover');
    }

    public function authSignupBasic()
    {
        return view('auth-signup-basic');
    }

    public function authSignupCover()
    {
        return view('auth-signup-cover');
    }

    public function authSuccessMsgBasic()
    {
        return view('auth-success-msg-basic');
    }

    public function authSuccessMsgCover()
    {
        return view('auth-success-msg-cover');
    }

    public function authTwostepBasic()
    {
        return view('auth-twostep-basic');
    }

    public function authTwostepCover()
    {
        return view('auth-twostep-cover');
    }

    public function chartsApexArea()
    {
        return view('charts-apex-area');
    }

    public function chartsApexBar()
    {
        return view('charts-apex-bar');
    }

    public function chartsApexBoxplot()
    {
        return view('charts-apex-boxplot');
    }

    public function chartsApexBubble()
    {
        return view('charts-apex-bubble');
    }

    public function chartsApexCandlestick()
    {
        return view('charts-apex-candlestick');
    }

    public function chartsApexColumn()
    {
        return view('charts-apex-column');
    }

    public function chartsApexFunnel()
    {
        return view('charts-apex-funnel');
    }

    public function chartsApexHeatmap()
    {
        return view('charts-apex-heatmap');
    }

    public function chartsApexLine()
    {
        return view('charts-apex-line');
    }

    public function chartsApexMixed()
    {
        return view('charts-apex-mixed');
    }

    public function chartsApexPie()
    {
        return view('charts-apex-pie');
    }

    public function chartsApexPolar()
    {
        return view('charts-apex-polar');
    }

    public function chartsApexRadar()
    {
        return view('charts-apex-radar');
    }

    public function chartsApexRangeArea()
    {
        return view('charts-apex-range-area');
    }

    public function chartsApexScatter()
    {
        return view('charts-apex-scatter');
    }

    public function chartsApexTimeline()
    {
        return view('charts-apex-timeline');
    }

    public function chartsApexTreemap()
    {
        return view('charts-apex-treemap');
    }

    public function chartsChartjs()
    {
        return view('charts-chartjs');
    }

    public function chartsEcharts()
    {
        return view('charts-echarts');
    }

    public function dashboardAnalytics()
    {
        return view('dashboard-analytics');
    }

    public function dashboardCrm()
    {
        return view('dashboard-crm');
    }

    public function dashboardCrypto()
    {
        return view('dashboard-crypto');
    }

    public function dashboardJob()
    {
        return view('dashboard-job');
    }

    public function dashboardNft()
    {
        return view('dashboard-nft');
    }

    public function dashboardProjects()
    {
        return view('dashboard-projects');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function formsAdvanced()
    {
        return view('forms-advanced');
    }

    public function formsCheckboxsRadios()
    {
        return view('forms-checkboxs-radios');
    }

    public function formsEditors()
    {
        return view('forms-editors');
    }

    public function formsElements()
    {
        return view('forms-elements');
    }

    public function formsFileUploads()
    {
        return view('forms-file-uploads');
    }

    public function formsLayouts()
    {
        return view('forms-layouts');
    }

    public function formsMasks()
    {
        return view('forms-masks');
    }

    public function formsPickers()
    {
        return view('forms-pickers');
    }

    public function formsRangeSliders()
    {
        return view('forms-range-sliders');
    }

    public function formsSelect()
    {
        return view('forms-select');
    }

    public function formsSelect2()
    {
        return view('forms-select2');
    }

    public function formsValidation()
    {
        return view('forms-validation');
    }

    public function formsWizard()
    {
        return view('forms-wizard');
    }

    public function iconsBoxicons()
    {
        return view('icons-boxicons');
    }

    public function iconsCrypto()
    {
        return view('icons-crypto');
    }

    public function iconsFeather()
    {
        return view('icons-feather');
    }

    public function iconsLineawesome()
    {
        return view('icons-lineawesome');
    }

    public function iconsMaterialdesign()
    {
        return view('icons-materialdesign');
    }

    public function iconsRemix()
    {
        return view('icons-remix');
    }

    public function layoutsDetached()
    {
        return view('layouts-detached');
    }

    public function layoutsHorizontal()
    {
        return view('layouts-horizontal');
    }

    public function layoutsTwoColumn()
    {
        return view('layouts-two-column');
    }

    public function layoutsVerticalHovered()
    {
        return view('layouts-vertical-hovered');
    }

    public function mapsGoogle()
    {
        return view('maps-google');
    }

    public function mapsLeaflet()
    {
        return view('maps-leaflet');
    }

    public function mapsVector()
    {
        return view('maps-vector');
    }

    public function navigationMenu()
    {
        return view('navigation-menu');
    }

    public function nftLanding()
    {
        return view('nft-landing');
    }

    public function pagesComingSoon()
    {
        return view('pages-coming-soon');
    }

    public function pagesFaqs()
    {
        return view('pages-faqs');
    }

    public function pagesGallery()
    {
        return view('pages-gallery');
    }

    public function pagesMaintenance()
    {
        return view('pages-maintenance');
    }

    public function pagesPricing()
    {
        return view('pages-pricing');
    }

    public function pagesPrivacyPolicy()
    {
        return view('pages-privacy-policy');
    }

    public function pagesProfileSettings()
    {
        return view('pages-profile-settings');
    }

    public function pagesProfile()
    {
        return view('pages-profile');
    }

    public function pagesSearchResults()
    {
        return view('pages-search-results');
    }

    public function pagesSitemap()
    {
        return view('pages-sitemap');
    }

    public function pagesStarter()
    {
        return view('pages-starter');
    }

    public function pagesTeam()
    {
        return view('pages-team');
    }

    public function pagesTermConditions()
    {
        return view('pages-term-conditions');
    }

    public function pagesTimeline()
    {
        return view('pages-timeline');
    }

    public function policy()
    {
        return view('policy');
    }

    public function tablesBasic()
    {
        return view('tables-basic');
    }

    public function tablesDatatables()
    {
        return view('tables-datatables');
    }

    public function tablesGridjs()
    {
        return view('tables-gridjs');
    }

    public function tablesListjs()
    {
        return view('tables-listjs');
    }

    public function uiAccordions()
    {
        return view('ui-accordions');
    }

    public function uiAlerts()
    {
        return view('ui-alerts');
    }

    public function uiBadges()
    {
        return view('ui-badges');
    }

    public function uiButtons()
    {
        return view('ui-buttons');
    }

    public function uiCards()
    {
        return view('ui-cards');
    }

    public function uiCarousel()
    {
        return view('ui-carousel');
    }

    public function uiColors()
    {
        return view('ui-colors');
    }

    public function uiDropdowns()
    {
        return view('ui-dropdowns');
    }

    public function uiEmbedVideo()
    {
        return view('ui-embed-video');
    }

    public function uiGeneralo()
    {
        return view('ui-general');
    }

    public function uiGrid()
    {
        return view('ui-grid');
    }

    public function uiImages()
    {
        return view('ui-images');
    }

    public function uiLinks()
    {
        return view('ui-links');
    }

    public function uiLists()
    {
        return view('ui-lists');
    }

    public function uiMedia()
    {
        return view('ui-media');
    }

    public function uiModals()
    {
        return view('ui-modals');
    }

    public function uiNotifications()
    {
        return view('ui-notifications');
    }

    public function uiOffcanvas()
    {
        return view('ui-offcanvas');
    }

    public function uiPlaceholders()
    {
        return view('ui-placeholders');
    }

    public function uiProgress()
    {
        return view('ui-progress');
    }

    public function uiRibbons()
    {
        return view('ui-ribbons');
    }

    public function uiTabs()
    {
        return view('ui-tabs');
    }

    public function uiTypography()
    {
        return view('ui-typography');
    }

    public function uiUtilities()
    {
        return view('ui-utilities');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function widgets()
    {
        return view('widgets');
    }

}
































