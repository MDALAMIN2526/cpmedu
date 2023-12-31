<?php

use App\SmSchool;
use App\SmsTemplate;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\RolePermission\Entities\Permission;

class AddVersion701Migration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exam_merit_positions', function (Blueprint $table) {
            if(Schema::hasColumn('exam_merit_positions', 'grade')){
                $table->string('grade')->nullable()->change();
            }
        });
        Schema::table('sm_item_receives', function (Blueprint $table) {
            if(Schema::hasColumn('sm_item_receives', 'grand_total')){
                $table->float('grand_total')->nullable()->change();
            }
        });
        Schema::table('sm_item_receives', function (Blueprint $table) {
            if(Schema::hasColumn('sm_item_receives', 'total_quantity')){
                $table->float('total_quantity')->nullable()->change();
            }
        });
        Schema::table('sm_item_receives', function (Blueprint $table) {
            if(Schema::hasColumn('sm_item_receives', 'total_paid')){
                $table->float('total_paid')->nullable()->change();
            }
        });
        Schema::table('sm_item_receives', function (Blueprint $table) {
            if(Schema::hasColumn('sm_item_receives', 'total_due')){
                $table->float('total_due')->nullable()->change();
            }
        });
        Schema::table('sm_item_receive_children', function (Blueprint $table) {
            if(Schema::hasColumn('sm_item_receive_children', 'unit_price')){
                $table->float('unit_price')->nullable()->change();
            }
        });
        Schema::table('sm_item_receive_children', function (Blueprint $table) {
            if(Schema::hasColumn('sm_item_receive_children', 'quantity')){
                $table->float('quantity')->nullable()->change();
            }
        });
        Schema::table('sm_item_receive_children', function (Blueprint $table) {
            if(Schema::hasColumn('sm_item_receive_children', 'sub_total')){
                $table->float('sub_total')->nullable()->change();
            }
        });

        Schema::table('lesson_planners', function (Blueprint $table) {
            if(Schema::hasColumn('lesson_planners', 'topic_detail_id')){
                $table->integer('topic_detail_id')->nullable()->change();
            }
        });
        Schema::table('sm_item_sells', function (Blueprint $table) {
            if(Schema::hasColumn('sm_item_sells', 'grand_total')){
                $table->float('grand_total')->nullable()->change();
            }
        });
        Schema::table('sm_item_sells', function (Blueprint $table) {
            if(Schema::hasColumn('sm_item_sells', 'total_quantity')){
                $table->float('total_quantity')->nullable()->change();
            }
        });
        Schema::table('sm_item_sells', function (Blueprint $table) {
            if(Schema::hasColumn('sm_item_sells', 'total_paid')){
                $table->float('total_paid')->nullable()->change();
            }
        });
        Schema::table('sm_item_sells', function (Blueprint $table) {
            if(Schema::hasColumn('sm_item_sells', 'total_due')){
                $table->float('total_due')->nullable()->change();
            }
        });
        $feesRouteLists = array(
            'fees' => array(
                'module' => 'Fees',
                'sidebar_menu' => 'fees_collection',
                'name' => 'Fees',
                'lang_name' => 'fees.fees',
                'icon' => 'fas fa-money',
                'svg' => null,
                'route' => 'fees',
                'parent_route' => null,
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => null,
                'is_parent' => 0,
                'position' => 8,
                'is_saas' => 0,
                'is_menu' => 1,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 1,
                'old_id' => 20,
            ),
            'fees.fees-group' => array(
                'module' => 'Fees',
                'sidebar_menu' => null,
                'name' => 'Fees Group',
                'lang_name' => 'fees.fees_group',
                'icon' => null,
                'svg' => null,
                'route' => 'fees.fees-group',
                'parent_route' => 'fees',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 1,
                'is_saas' => 0,
                'is_menu' => 1,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 2,
                'old_id' => 1131,

            ),
            'fees.fees-group-store' => array(
                'module' => null,
                'sidebar_menu' => null,
                'name' => 'Add',
                'lang_name' => null,
                'icon' => null,
                'svg' => null,
                'route' => 'fees.fees-group-store',
                'parent_route' => 'fees.fees-group',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 1133,
                'is_saas' => 0,
                'is_menu' => 0,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 3,
                'old_id' => 1132,
            ),
            'fees.fees-group-edit' => array(
                'module' => null,
                'sidebar_menu' => null,
                'name' => 'Edit',
                'lang_name' => null,
                'icon' => null,
                'svg' => null,
                'route' => 'fees.fees-group-edit',
                'parent_route' => 'fees.fees-group',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 1134,
                'is_saas' => 0,
                'is_menu' => 0,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 3,
                'old_id' => 1133,
            ),
            'fees.fees-group-delete' => array(
                'module' => null,
                'sidebar_menu' => null,
                'name' => 'Delete',
                'lang_name' => null,
                'icon' => null,
                'svg' => null,
                'route' => 'fees.fees-group-delete',
                'parent_route' => 'fees.fees-group',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 1135,
                'is_saas' => 0,
                'is_menu' => 0,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 3,
                'old_id' => 1134,
            ),
            'fees.fees-type' => array(
                'module' => 'Fees',
                'sidebar_menu' => null,
                'name' => 'Fees Type',
                'lang_name' => 'fees.fees_type',
                'icon' => null,
                'svg' => null,
                'route' => 'fees.fees-type',
                'parent_route' => 'fees',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 2,
                'is_saas' => 0,
                'is_menu' => 1,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 2,
                'old_id' => 1135,

            ),
            'fees.fees-type-store' => array(
                'module' => null,
                'sidebar_menu' => null,
                'name' => 'Add',
                'lang_name' => null,
                'icon' => null,
                'svg' => null,
                'route' => 'fees.fees-type-store',
                'parent_route' => 'fees.fees-type',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 1137,
                'is_saas' => 0,
                'is_menu' => 0,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 3,
                'old_id' => 1136,
            ),
            'fees.fees-type-edit' => array(
                'module' => null,
                'sidebar_menu' => null,
                'name' => 'Edit',
                'lang_name' => null,
                'icon' => null,
                'svg' => null,
                'route' => 'fees.fees-type-edit',
                'parent_route' => 'fees.fees-type',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 1138,
                'is_saas' => 0,
                'is_menu' => 0,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 3,
                'old_id' => 1137,
            ),
            'fees.fees-type-delete' => array(
                'module' => null,
                'sidebar_menu' => null,
                'name' => 'Delete',
                'lang_name' => null,
                'icon' => null,
                'svg' => null,
                'route' => 'fees.fees-type-delete',
                'parent_route' => 'fees.fees-type',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 1139,
                'is_saas' => 0,
                'is_menu' => 0,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 3,
                'old_id' => 1138,
            ),
            'fees.fees-invoice-list' => array(
                'module' => 'Fees',
                'sidebar_menu' => null,
                'name' => 'Fees Invoice',
                'lang_name' => 'fees::feesModule.fees_invoice',
                'icon' => null,
                'svg' => null,
                'route' => 'fees.fees-invoice-list',
                'parent_route' => 'fees',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 3,
                'is_saas' => 0,
                'is_menu' => 1,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 2,
                'old_id' => 1139,

            ),
            'fees.fees-invoice-store' => array(
                'module' => null,
                'sidebar_menu' => null,
                'name' => 'Add',
                'lang_name' => null,
                'icon' => null,
                'svg' => null,
                'route' => 'fees.fees-invoice-store',
                'parent_route' => 'fees.fees-invoice-list',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 1137,
                'is_saas' => 0,
                'is_menu' => 0,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 3,
                'old_id' => 1136,
            ),
            'fees.fees-type-edit' => array(
                'module' => null,
                'sidebar_menu' => null,
                'name' => 'Edit',
                'lang_name' => null,
                'icon' => null,
                'svg' => null,
                'route' => 'fees.fees-type-edit',
                'parent_route' => 'fees.fees-invoice-list',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 1138,
                'is_saas' => 0,
                'is_menu' => 0,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 3,
                'old_id' => 1137,
            ),
            'fees.fees-invoice-delete' => array(
                'module' => null,
                'sidebar_menu' => null,
                'name' => 'Delete',
                'lang_name' => null,
                'icon' => null,
                'svg' => null,
                'route' => 'fees.fees-invoice-delete',
                'parent_route' => 'fees.fees-invoice-list',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 1139,
                'is_saas' => 0,
                'is_menu' => 0,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 3,
                'old_id' => 1138,
            ),
            'fees.add-fees-payment' => array(
                'module' => null,
                'sidebar_menu' => null,
                'name' => 'Add Payment',
                'lang_name' => null,
                'icon' => null,
                'svg' => null,
                'route' => 'fees.add-fees-payment',
                'parent_route' => 'fees.fees-invoice-list',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 1139,
                'is_saas' => 0,
                'is_menu' => 0,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 3,
                'old_id' => 1138,
            ),
            'fees.fees-invoice-view' => array(
                'module' => null,
                'sidebar_menu' => null,
                'name' => 'View',
                'lang_name' => null,
                'icon' => null,
                'svg' => null,
                'route' => 'fees.fees-invoice-view',
                'parent_route' => 'fees.fees-invoice-list',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 1139,
                'is_saas' => 0,
                'is_menu' => 0,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 3,
                'old_id' => 1138,
            ),
            'fees.fees-view-payment' => array(
                'module' => null,
                'sidebar_menu' => null,
                'name' => 'View Payment',
                'lang_name' => null,
                'icon' => null,
                'svg' => null,
                'route' => 'fees.fees-view-payment',
                'parent_route' => 'fees.fees-invoice-list',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 1139,
                'is_saas' => 0,
                'is_menu' => 0,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 3,
                'old_id' => 1138,
            ),
            'fees.bank-payment' => array(
                'module' => 'Fees',
                'sidebar_menu' => null,
                'name' => 'Bank Payment',
                'lang_name' => 'fees.bank_payment',
                'icon' => null,
                'svg' => null,
                'route' => 'fees.bank-payment',
                'parent_route' => 'fees',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 4,
                'is_saas' => 0,
                'is_menu' => 1,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 2,
                'old_id' => 1148,
            ),
            'fees.search-bank-payment' => array(
                'module' => 'Fees',
                'sidebar_menu' => null,
                'name' => 'Search',
                'lang_name' => null,
                'icon' => null,
                'svg' => null,
                'route' => 'fees.search-bank-payment',
                'parent_route' => 'fees.bank-payment',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 1150,
                'is_saas' => 0,
                'is_menu' => 0,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 3,
                'old_id' => 1149,
            ),
            'fees.approve-bank-payment' => array(
                'module' => 'Fees',
                'sidebar_menu' => null,
                'name' => 'Approve Payment',
                'lang_name' => null,
                'icon' => null,
                'svg' => null,
                'route' => 'fees.approve-bank-payment',
                'parent_route' => 'fees.bank-payment',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 1151,
                'is_saas' => 0,
                'is_menu' => 0,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 3,
                'old_id' => 1150,
            ),
            'fees.reject-bank-payment' => array(
                'module' => 'Fees',
                'sidebar_menu' => null,
                'name' => 'Reject Payment',
                'lang_name' => null,
                'icon' => null,
                'svg' => null,
                'route' => 'fees.reject-bank-payment',
                'parent_route' => 'fees.bank-payment',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 1152,
                'is_saas' => 0,
                'is_menu' => 0,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 3,
                'old_id' => 1151,
            ),
            'fees.fees-invoice-settings' => array(
                'module' => 'Fees',
                'sidebar_menu' => null,
                'name' => 'Fees Invoice Settings',
                'lang_name' => 'fees::feesModule.fees_invoice_settings',
                'icon' => null,
                'svg' => null,
                'route' => 'fees.fees-invoice-settings',
                'parent_route' => 'fees',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 5,
                'is_saas' => 0,
                'is_menu' => 1,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 2,
                'old_id' => 1152,
            ),
            'fees.fees-invoice-settings-update' => array(
                'module' => 'Fees',
                'sidebar_menu' => null,
                'name' => 'Update',
                'lang_name' => null,
                'icon' => null,
                'svg' => null,
                'route' => 'fees.fees-invoice-settings-update',
                'parent_route' => 'fees.fees-invoice-settings',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 1154,
                'is_saas' => 0,
                'is_menu' => 0,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 3,
                'old_id' => 1153,
            ),
            'fees.fees-report' => array(
                'module' => 'Fees',
                'sidebar_menu' => null,
                'name' => 'Report',
                'lang_name' => 'reports.report',
                'icon' => null,
                'svg' => null,
                'route' => 'fees.fees-report',
                'parent_route' => 'fees',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 6,
                'is_saas' => 0,
                'is_menu' => 1,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 2,
                'old_id' => 1154,
            ),
            'fees.due-fees' => array(
                'module' => 'Fees',
                'sidebar_menu' => null,
                'name' => 'Fees Due Report',
                'lang_name' => 'fees::feesModule.fees_due_report',
                'icon' => null,
                'svg' => null,
                'route' => 'fees.due-fees',
                'parent_route' => 'fees.fees-report',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 7,
                'is_saas' => 0,
                'is_menu' => 1,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 3,
                'old_id' => 1155,
            ),
            'fees.fine-report' => array(
                'module' => 'Fees',
                'sidebar_menu' => null,
                'name' => 'Fine Report',
                'lang_name' => 'accounts.fine_report',
                'icon' => null,
                'svg' => null,
                'route' => 'fees.fine-report',
                'parent_route' => 'fees.fees-report',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 8,
                'is_saas' => 0,
                'is_menu' => 1,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 3,
                'old_id' => 1158,
            ),
            'fees.payment-report' => array(
                'module' => 'Fees',
                'sidebar_menu' => null,
                'name' => 'Payment Report',
                'lang_name' => 'fees::feesModule.payment_report',
                'icon' => null,
                'svg' => null,
                'route' => 'fees.payment-report',
                'parent_route' => 'fees.fees-report',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 9,
                'is_saas' => 0,
                'is_menu' => 1,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 3,
                'old_id' => 1159,
            ),
            'fees.balance-report' => array(
                'module' => 'Fees',
                'sidebar_menu' => null,
                'name' => 'Balance Report',
                'lang_name' => 'fees::feesModule.balance_report',
                'icon' => null,
                'svg' => null,
                'route' => 'fees.balance-report',
                'parent_route' => 'fees.fees-report',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 10,
                'is_saas' => 0,
                'is_menu' => 1,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 3,
                'old_id' => 1160,
            ),
            'fees.waiver-report' => array(
                'module' => null,
                'sidebar_menu' => null,
                'name' => 'Waiver Report',
                'lang_name' => 'fees::feesModule.waiver_report',
                'icon' => null,
                'svg' => null,
                'route' => 'fees.waiver-report',
                'parent_route' => 'fees.fees-report',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 0,
                'is_saas' => 0,
                'is_menu' => 1,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 3,
                'old_id' => 1161,
            ),
        );
        foreach($feesRouteLists as $permission) {

            Permission::updateOrCreate([
                'route' => $permission['route'],
            ],
                [
                    'name' => $permission['name'],
                    'position'=>$permission['position'],
                    'module' => $permission['module'],
                    'sidebar_menu'=>$permission['sidebar_menu'],
                    'lang_name' => $permission['lang_name'],
                    'icon' => $permission['icon'],
                    'svg' => $permission['svg'],

                    'parent_route' => $permission['parent_route'],
                    'is_admin'=>$permission['is_admin'],
                    'is_teacher'=>$permission['is_teacher'],
                    'is_student'=>$permission['is_student'],
                    'is_parent'=>$permission['is_parent'],

                    'is_saas'=>$permission['is_saas'],
                    'is_menu'=>$permission['is_menu'],
                    'status'=>$permission['status'],
                    'menu_status'=>$permission['menu_status'],
                    'relate_to_child'=>$permission['relate_to_child'],
                    'alternate_module'=>$permission['alternate_module'],
                    'permission_section'=>$permission['permission_section'],
                    'type'=>$permission['type'],
                    'user_id'=>null,
                    'old_id'=>$permission['old_id'],
                    'school_id'=>$school_id ?? 1,

                ]);

        }

        \Modules\MenuManage\Entities\Sidebar::truncate();
    }

    public function down()
    {
        //
    }
}
