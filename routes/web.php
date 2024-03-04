<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\PaymentController;

require __DIR__ . '/auth.php';

//Auth pages Routs
Route::group(['prefix' => 'auth'], function () {
  Route::get('login', [HomeController::class, 'authLogin'])->name('auth.login');
  Route::get('register', [HomeController::class, 'authRegister'])->name('auth.register');
  Route::get('recover-password', [HomeController::class, 'authRecoverPassword'])->name('auth.recover-password');
  Route::get('verify-email', [HomeController::class, 'authverifyEmail'])->name('auth.verify-email');
  Route::get('lock-screen', [HomeController::class, 'authlockScreen'])->name('auth.lock-screen');
  Route::get('reset-password', [HomeController::class, 'authresetpassword'])->name('auth.reset-password');
});


// Dashboard Routes
Route::get('/', [HomeController::class, 'index'])->name('dashboard.1')->middleware('auth');


//Forms Page Routs
Route::get('/generatePaymentLink', [HomeController::class, 'generatePaymentLink'])->name('forms.generatePaymentLink')->middleware('auth');
Route::post('payment', [PaymentController::class, 'store'])->name('payment')->middleware('auth');

// -------------------------------------------------------------------------------------------------------------------------------------------------------------

// Route::get('/', function () {
//   return view('dashboards.dashboard1');
// });


Route::get('/dashboard', function () {
  return view('dashboard');
})->name('dashboard');


// customer route
Route::get('/customer', [HomeController::class, 'customer'])->name('customer');
Route::get('/customer-view', [HomeController::class, 'customerView'])->name('customer.view');
Route::get('/customer-add', [HomeController::class, 'customerAdd'])->name('customer.add');
Route::get('customer-edit', [HomeController::class, 'customerEdit'])->name('customer.edit');

//product route
Route::get('/product', [HomeController::class, 'product'])->name('product.product');
Route::get('/product-add', [HomeController::class, 'productAdd'])->name('product.product-add');

//order route
Route::get('/order', [HomeController::class, 'order'])->name('order.order');
Route::get('/order-detail', [HomeController::class, 'orderDetail'])->name('order.order-detail');
Route::get('/order-new', [HomeController::class, 'orderNew'])->name('order.order-new');

//invoice routes
Route::get('/invoice', [HomeController::class, 'invoice'])->name('invoice.invoice');
Route::get('/invoice-view', [HomeController::class, 'invoiceView'])->name('invoice.invoice-view');

//calender routes
Route::get('/calender', [HomeController::class, 'calender'])->name('calender');


//App Details Pages Routs
Route::group(['prefix' => 'app'], function () {

  //Userdetail Page Routs
  Route::get('user/profile', [HomeController::class, 'userprofile'])->name('app.userdetail.userprofile');
  Route::get('user/add', [HomeController::class, 'useradd'])->name('app.userdetail.useradd');
  Route::get('user/userlist', [HomeController::class, 'userList'])->name('app.userdetail.userlist');
  Route::get('user/profile-edit', [HomeController::class, 'userprofileEdit'])->name('app.userdetail.profileedit');
  Route::get('user/account-setting', [HomeController::class, 'useraccountSettings'])->name('app.userdetail.accountsetting');
  Route::get('user/privacy-setting', [HomeController::class, 'userprivacySettings'])->name('app.userdetail.privacysetting');
  Route::get('user/terms-of-services', [HomeController::class, 'termsOfService'])->name('app.userdetail.termsofservice');

  //Chat Page Routs
  Route::get('chat', [HomeController::class, 'chat'])->name('app.chat');

  //Todo Page Routs
  Route::get('todo', [HomeController::class, 'todo'])->name('app.todo');
});

//UI Pages Routs
Route::group(['prefix' => 'ui'], function () {
  Route::get('grid', [HomeController::class, 'UiGrid'])->name('ui.grid');
  Route::get('tabs', [HomeController::class, 'UiTabs'])->name('ui.tabs');
  Route::get('cards', [HomeController::class, 'UiCards'])->name('ui.cards');
  Route::get('modal', [HomeController::class, 'UiModal'])->name('ui.modal');
  Route::get('alerts', [HomeController::class, 'UiAlerts'])->name('ui.alerts');
  Route::get('badges', [HomeController::class, 'UiBadges'])->name('ui.badges');
  Route::get('colors', [HomeController::class, 'UiColors'])->name('ui.colors');
  Route::get('images', [HomeController::class, 'UiImages'])->name('ui.images');
  Route::get('avatars', [HomeController::class, 'UiAvatars'])->name('ui.avatars');
  Route::get('buttons', [HomeController::class, 'UiButtons'])->name('ui.buttons');
  Route::get('carousel', [HomeController::class, 'UiCarousel'])->name('ui.carousel');
  Route::get('popovers', [HomeController::class, 'UiPopovers'])->name('ui.popovers');
  Route::get('tooltips', [HomeController::class, 'UiTooltips'])->name('ui.tooltips');
  Route::get('boxshadows', [HomeController::class, 'UiBoxshadows'])->name('ui.boxshadows');
  Route::get('breadcrumb', [HomeController::class, 'UiBreadcrumb'])->name('ui.breadcrumb');
  Route::get('listgroup', [HomeController::class, 'UiListgroup'])->name('ui.listgroup');
  Route::get('pagination', [HomeController::class, 'UiPagination'])->name('ui.pagination');
  Route::get('typography', [HomeController::class, 'UiTypography'])->name('ui.typography');
  Route::get('media', [HomeController::class, 'UiMedia'])->name('ui.media');
  Route::get('progressbars', [HomeController::class, 'UiProgressbars'])->name('ui.progressbars');
  Route::get('buttongroup', [HomeController::class, 'UiButtongroup'])->name('ui.buttongroup');
  Route::get('notification', [HomeController::class, 'UiNotification'])->name('ui.notification');
  Route::get('video', [HomeController::class, 'UiVideo'])->name('ui.video');
});

//Forms Pages Routs
Route::group(['prefix' => 'forms'], function () {
  //Widget Page Routs

  Route::group(['prefix' => 'widget'], function () {
    Route::get('datepicker', [HomeController::class, 'FormsDatepicker'])->name('forms.datepicker');
    Route::get('select', [HomeController::class, 'FormsSelect'])->name('forms.select');
    Route::get('fileuploader', [HomeController::class, 'FormsFileuploader'])->name('forms.fileuploader');
    Route::get('quill', [HomeController::class, 'FormsQuill'])->name('forms.quill');
  });
  Route::group(['prefix' => 'control'], function () {
    //Forms Control Page Routs
    Route::get('radio', [HomeController::class, 'FormsRadio'])->name('forms.radio');
    Route::get('layout', [HomeController::class, 'FormsLayout'])->name('forms.layout');
    Route::get('checkbox', [HomeController::class, 'FormsCheckbox'])->name('forms.checkbox');
    Route::get('textarea', [HomeController::class, 'FormsTextarea'])->name('forms.textarea');
    Route::get('validation', [HomeController::class, 'FormsValidation'])->name('forms.validation');
    Route::get('inputgroup', [HomeController::class, 'FormsInputgroup'])->name('forms.inputgroup');
    Route::get('switch', [HomeController::class, 'FormsSwitch'])->name('forms.switch');
  });
});


//Table Page Routs
Route::group(['prefix' => 'table'], function () {
  Route::get('basics', [HomeController::class, 'tableBasics'])->name('table.tablebasics');
  Route::get('data', [HomeController::class, 'tableData'])->name('table.tabledata');
  Route::get('tree', [HomeController::class, 'tableTree'])->name('table.tabletree');
  Route::get('editable', [HomeController::class, 'tableEditable'])->name('table.tableeditable');
});

//Icons pages Routs
Route::group(['prefix' => 'icons'], function () {
  Route::get('heroicons', [HomeController::class, 'HeroIcons'])->name('icons.heroicons');
});
//Chart Page Routs
Route::group(['prefix' => 'charts'], function () {
  Route::get('apex', [HomeController::class, 'chartApex'])->name('chart.apex');
  Route::get('high', [HomeController::class, 'chartHigh'])->name('chart.high');
  Route::get('morries', [HomeController::class, 'chartMorries'])->name('chart.morries');
});

//Extra pages Routs
Route::group(['prefix' => 'extra'], function () {
  //Timeline Page Routs
  Route::get('timeline/timeline1', [HomeController::class, 'timeline1'])->name('timeline.timeline1');
  Route::get('timeline/timeline2', [HomeController::class, 'timeline2'])->name('timeline.timeline2');

  //Error pages Routs
  Route::get('error/error404', [HomeController::class, 'Error404'])->name('pageError.error404');
  Route::get('error/error500', [HomeController::class, 'Error500'])->name('pageError.error500');

  Route::get('faq', [HomeController::class, 'ExtrapagesFaq'])->name('extrapages.faq');
  Route::get('invoice', [HomeController::class, 'ExtrapagesInvoice'])->name('extrapages.invoice');
  Route::get('blankpage', [HomeController::class, 'ExtrapagesBlankpage'])->name('extrapages.blankpage');
  Route::get('maintenance', [HomeController::class, 'ExtrapagesMaintenance'])->name('extrapages.maintenance');
  Route::get('comingsoon', [HomeController::class, 'ExtrapagesComingsoon'])->name('extrapages.comingsoon');
  Route::get('pricing', [HomeController::class, 'ExtrapagesPricing'])->name('extrapages.pricing');
});

Route::group(['middleware' => ['auth', 'verified']], function () {
  Route::group(['namespace' => ''], function () {
    Route::resource('permission', PermissionController::class);
    Route::get('permission/add/{type}', [PermissionController::class, 'addPermission'])->name('permission.add');
    Route::post('permission/save', [PermissionController::class, 'savePermission'])->name('permission.save');
  });
  Route::resource('role', RoleController::class);

  Route::get('changeStatus', [HomeController::class, 'changeStatus'])->name('changeStatus');
});

Route::get('/ajax-list', [HomeController::class, 'getAjaxList'])->name('ajax-list');
