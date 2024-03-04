<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Persona;
use App\Services\DashboardService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
     * Dashboard Pages Routs
     */

    public function index()
    {
        $dashboardService = new DashboardService();
        $payments = $dashboardService->getDataPymentByDate(date('Y-m-d 00:00:00'), date('Y-m-d 23:59:59'));
        //  return $payments;
        return view('dashboards.dashboard', compact('payments'));
    }


    public function generatePaymentLink(Request $request)
    {
        return view('forms.generatePaymentLink');
    }

    /*
     * Customer pages routes
     */

    function customer()
    {
        return view('customer.customer');
    }

    function customerEdit()
    {
        return view('customer.customer-edit');
    }

    function customerView()
    {
        return view('customer.customer-view');
    }

    function customerAdd()
    {
        return view('customer.customer-add');
    }


    /*
     * product pages routes
     */

    function product()
    {
        return view('product.product');
    }

    function productAdd()
    {
        return view('product.product-add');
    }

    /*
     * order pages routes
     */

    function order()
    {
        return view('order.order');
    }

    function orderNew()
    {
        return view('order.order-new');
    }

    function orderDetail()
    {
        return view('order.order-detail');
    }

    /*
     * invoice route
     */

    function invoice()
    {
        return view('invoice.invoice');
    }

    function invoiceView()
    {
        return view('invoice.invoice-view');
    }

    /*
     * calender pages Routs
     */

    function calender()
    {
        return view('calender.calender');
    }

    /*
     * Auth pages Routs
     */

    function authLogin()
    {
        return view('auth.login');
    }

    function authRegister()
    {
        return view('auth.register');
    }

    function authRecoverPassword()
    {
        return view('auth.forgot-password');
    }

    function authConfirmEmail()
    {
        return view('auth.verify-email');
    }

    function authLockScreen()
    {
        return view('auth.lock-screen');
    }

    /*
     * Charts Page Routs
     */

    public function chartApex()
    {
        return view('chart.apex');
    }

    public function chartHigh()
    {
        return view('chart.high');
    }

    public function chartMorries()
    {
        return view('chart.morries');
    }

    /*
     * Form Page Routs
     */

    public function FormsQuill()
    {
        return view('forms.quill');
    }

    public function FormsRadio()
    {
        return view('forms.radio');
    }

    public function FormsLayout()
    {
        return view('forms.layout');
    }

    public function FormsSelect()
    {
        return view('forms.select');
    }

    public function FormsSwitch()
    {
        return view('forms.switch');
    }

    public function FormsCheckbox()
    {
        return view('forms.checkbox');
    }

    public function FormsTextarea()
    {
        return view('forms.textarea');
    }

    public function FormsDatepicker()
    {
        return view('forms.datepicker');
    }

    public function FormsValidation()
    {
        return view('forms.validation');
    }

    public function FormsInputgroup()
    {
        return view('forms.inputgroup');
    }

    public function FormsFileuploader()
    {
        return view('forms.fileuploader');
    }

    /*
     * Icons Page Routs
     */

    public function HeroIcons()
    {
        return view('icons.heroicons');
    }

    /*
     * UI Page Routs
     */

    public function UiGrid()
    {
        return view('ui.grid');
    }

    public function UiTabs()
    {
        return view('ui.tabs');
    }

    public function UiCards()
    {
        return view('ui.cards');
    }

    public function UiModal()
    {
        return view('ui.modal');
    }

    public function UiAlerts()
    {
        return view('ui.alerts');
    }

    public function UiBadges()
    {
        return view('ui.badges');
    }

    public function UiColors()
    {
        return view('ui.colors');
    }

    public function UiImages()
    {
        return view('ui.images');
    }

    public function UiAvatars()
    {
        return view('ui.avatars');
    }

    public function UiButtons()
    {
        return view('ui.buttons');
    }

    public function UiCarousel()
    {
        return view('ui.carousel');
    }

    public function UiPopovers()
    {
        return view('ui.popovers');
    }

    public function UiTooltips()
    {
        return view('ui.tooltips');
    }

    public function UiBoxshadows()
    {
        return view('ui.boxshadows');
    }

    public function UiBreadcrumb()
    {
        return view('ui.breadcrumb');
    }

    public function UiListgroup()
    {
        return view('ui.listgroup');
    }

    public function UiPagination()
    {
        return view('ui.pagination');
    }

    public function UiTypography()
    {
        return view('ui.typography');
    }

    public function UiMedia()
    {
        return view('ui.media');
    }

    public function UiProgressbars()
    {
        return view('ui.progressbars');
    }

    public function UiButtongroup()
    {
        return view('ui.buttongroup');
    }
    public function UiNotification()
    {
        return view('ui.notification');
    }

    public function UiVideo()
    {
        return view('ui.video');
    }

    /*
     * App Page Routs
     */

    /*
       * App UserPage Routs
       */

    public function Userprofile()
    {
        return view('app.userdetail.userprofile');
    }

    public function Useradd()
    {
        return view('app.userdetail.useradd');
    }

    public function Userlist()
    {
        return view('app.userdetail.userlist');
    }

    public function userprofileEdit()
    {
        return view('app.userdetail.userprofileedit');
    }

    public function useraccountSettings()
    {
        return view('app.userdetail.accountsetting');
    }

    public function userprivacySettings()
    {
        return view('app.userdetail.privacysetting');
    }

    public function termsOfService()
    {
        return view('app.userdetail.termsofservice');
    }

    public function todo()
    {
        return view('app.todo');
    }

    public function chat(Request $request)
    {
        return view('app.chat');
    }

    /*
     * Error Page Routs
     */

    public function Error404()
    {
        return view('pageError.error404');
    }

    public function Error500()
    {
        return view('pageError.error500');
    }

    /*
     * Extra Pages Routs
     */

    public function ExtrapagesFaq()
    {
        return view('extrapages.faq');
    }

    public function ExtrapagesInvoice()
    {
        return view('extrapages.invoice');
    }

    public function ExtrapagesBlankpage()
    {
        return view('extrapages.blankpage');
    }

    public function ExtrapagesMaintenance()
    {
        return view('extrapages.maintenance');
    }

    public function ExtrapagesComingsoon()
    {
        return view('extrapages.comingsoon');
    }

    public function ExtrapagesPricing()
    {
        return view('extrapages.pricing');
    }

    /*
     * Timeline Page Routs
     */

    public function timeline1()
    {
        return view('timeline.timeline1');
    }

    public function timeline2()
    {
        return view('timeline.timeline2');
    }

    /*
     * Table Page Routs
     */

    public function tableBasics()
    {
        return view('table.tablebasics');
    }

    public function tableData()
    {
        return view('table.tabledata');
    }

    public function tableTree()
    {
        return view('table.tabletree');
    }

    public function tableEditable()
    {
        return view('table.tableeditable');
    }

    public function changeStatus(Request $request)
    {
        $type = $request->type;

        $message = trans('messages.update_form', ['form' => trans('messages.status')]);
        switch ($type) {
            case 'role':
                $role = \App\Models\Role::find($request->id);
                $role->status = $request->status;
                $role->save();
                break;
            default:
                $message = 'error';
                break;
        }

        return response()->json(['message' => $message]);
    }

    public function getAjaxList(Request $request)
    {
        $items = array();
        $value = $request->q;
        $auth_user = authSession();
        switch ($request->type) {
            case 'permission':
                $items = \App\Models\Permission::select('id', 'name as text')->whereNull('parent_id');
                if ($value != '') {
                    $items->where('name', 'LIKE', $value . '%');
                }
                $items = $items->get();
                break;
            default:
                break;
        }
        return response()->json(['status' => 'true', 'results' => $items]);
    }
}
