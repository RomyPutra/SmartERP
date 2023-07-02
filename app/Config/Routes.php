<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Dashboard::index');
$routes->get('/page/login', 'Dashboard::login');

$routes->get('company', 'Company::index');
$routes->get('company/create', 'Company::create');
$routes->post('company/store', 'Company::store');
$routes->post('company/update', 'Company::update');
$routes->get('company/edit/(:any)', 'Company::edit/$1');
$routes->post('company/update/(:any)', 'Company::update/$1');
$routes->get('company/delete/(:any)', 'Company::delete/$1');

// router folder payroll
$routes->get('/payroll/fingerprint', 'Dashboard::fingerprint');
$routes->get('/payroll/absence', 'Dashboard::absence');
$routes->get('/payroll/daylysalary', 'Dashboard::daylysalary');
$routes->get('/payroll/monthlysalary', 'Dashboard::monthlysalary');

// router folder accounting
$routes->get('/accounting/mutasistock', 'Dashboard::mutasistock');
$routes->get('/accounting/neraca', 'Dashboard::neraca');
$routes->get('/accounting/profitandlost', 'Dashboard::profitandlost');

// router folder hpp
$routes->get('/hpp/hpp', 'Dashboard::hpp');

// router folder masterdata
$routes->get('/masterdata/benefit', 'Dashboard::benefit');
$routes->get('/masterdata/category', 'Dashboard::category');
$routes->get('/masterdata/company', 'Dashboard::company');
$routes->get('/masterdata/days', 'Dashboard::days');
$routes->get('/masterdata/department', 'Dashboard::department');
$routes->get('/masterdata/employee', 'Dashboard::employee');
$routes->get('/masterdata/employeegroupshift', 'Dashboard::employeegroupshift');
$routes->get('/masterdata/hpp', 'Dashboard::masterhpp');
$routes->get('/masterdata/indexretur', 'Dashboard::indexretur');
$routes->get('/masterdata/inventory', 'Dashboard::inventory');
$routes->get('/masterdata/machine', 'Dashboard::machine');
$routes->get('/masterdata/position', 'Dashboard::position');
$routes->get('/masterdata/price', 'Dashboard::price');
$routes->get('/masterdata/rate', 'Dashboard::rate');
$routes->get('/masterdata/salesperson', 'Dashboard::salesperson');
$routes->get('/masterdata/schedulepattern', 'Dashboard::schedulepattern');
$routes->get('/masterdata/section', 'Dashboard::section');
$routes->get('/masterdata/skemapayroll', 'Dashboard::skemapayroll');
$routes->get('/masterdata/source', 'Dashboard::source');
$routes->get('/masterdata/type', 'Dashboard::type');
$routes->get('/masterdata/umk', 'Dashboard::umk');
$routes->get('/masterdata/uom', 'Dashboard::uom');
$routes->get('/masterdata/warehouse', 'Dashboard::warehouse');
$routes->get('/masterdata/wholesaleprice', 'Dashboard::wholesaleprice');

// router folder makloon
$routes->get('/makloon/sparepartmitra', 'Dashboard::sparepartmitra');

// router folder pruchashing
$routes->get('/pruchashing/materialreceivedvoucher', 'Dashboard::materialreceivedvoucher');
$routes->get('/pruchashing/mrvinventory', 'Dashboard::mrvinventory');
$routes->get('/pruchashing/mrvpurchinvoice', 'Dashboard::mrvpurchinvoice');
$routes->get('/pruchashing/purchasereturninventory', 'Dashboard::purchasereturninventory');
$routes->get('/pruchashing/purchasingorder', 'Dashboard::purchasingorder');
$routes->get('/pruchashing/purchasingrequisition', 'Dashboard::purchasingrequisition');

// router folder production
$routes->get('/production/adjusmentwip', 'Dashboard::adjusmentwip');
$routes->get('/production/bom', 'Dashboard::bom');
$routes->get('/production/bonproduction', 'Dashboard::bonproduction');
$routes->get('/production/customprice', 'Dashboard::customprice');
$routes->get('/production/cutting', 'Dashboard::cutting');
$routes->get('/production/deposit', 'Dashboard::deposit');
$routes->get('/production/dkp', 'Dashboard::dkp');
$routes->get('/production/extruder', 'Dashboard::extruder');
$routes->get('/production/materialneeded', 'Dashboard::materialneeded');
$routes->get('/production/mixing', 'Dashboard::mixing');
$routes->get('/production/packinglist', 'Dashboard::packinglist');
$routes->get('/production/printing', 'Dashboard::printing');
$routes->get('/production/production', 'Dashboard::production');
$routes->get('/production/progresscontrol', 'Dashboard::progresscontrol');
$routes->get('/production/progressop', 'Dashboard::progressop');
$routes->get('/production/smiv', 'Dashboard::smiv');
$routes->get('/production/smrv', 'Dashboard::smrv');
$routes->get('/production/stockwip', 'Dashboard::stockwip');

// router folder sales
$routes->get('/sales/invoice', 'Dashboard::invoice');
$routes->get('/sales/returnbarcode', 'Dashboard::returnbarcode');
$routes->get('/sales/returninventory', 'Dashboard::returninventory');
$routes->get('/sales/salesorder', 'Dashboard::salesorder');
$routes->get('/sales/shipping', 'Dashboard::shipping');
$routes->get('/sales/shippingcashinventroy', 'Dashboard::shippingcashinventroy');
$routes->get('/sales/shippinginventroy', 'Dashboard::shippinginventroy');
$routes->get('/sales/sop', 'Dashboard::sop');
$routes->get('/sales/sppb', 'Dashboard::stocsppbkwip');

// router folder production
$routes->get('/stockopname/stockopname', 'Dashboard::stockopname');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
