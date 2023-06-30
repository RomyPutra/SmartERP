<?php
namespace App\Controllers;
use App\Models\SectionModel;
use CodeIgniter\Config\Config;
use CodeIgniter\Controller;

class Dashboard extends BaseController
{
    public function index()
    {
        $data['title']='SmartERP - Dashboard';
        echo view('dashboard',$data);
    }

    public function login()
    {
        $data['title']='SmartERP';
        echo view('page/login',$data);
    }

    public function fingerprint()
    {
        $data['title']='SmartERP - ';
        echo view('payroll/fingerprint',$data);
    }

    // $routes->get('/payroll/absence', 'Dashboard::absence');
    public function absence()
    {
        $data['title']='SmartERP - ';
        echo view('payroll/absence',$data);
    }

    // $routes->get('/payroll/daylysalary', 'Dashboard::daylysalary');
    public function daylysalary()
    {
        $data['title']='SmartERP - ';
        echo view('payroll/daylysalary',$data);
    }

    // $routes->get('/payroll/monthlysalary', 'Dashboard::monthlysalary');
    public function monthlysalary()
    {
        $data['title']='SmartERP - ';
        echo view('payroll/monthlysalary',$data);
    }

    // $routes->get('/accounting/mutasistock', 'Dashboard::mutasistock');
    public function mutasistock()
    {
        $data['title']='SmartERP - ';
        echo view('accounting/mutasistock',$data);
    }

    // $routes->get('/accounting/neraca', 'Dashboard::neraca');
    public function neraca()
    {
        $data['title']='SmartERP - ';
        echo view('accounting/neraca',$data);
    }

    // $routes->get('/accounting/profitandlost', 'Dashboard::profitandlost');
    public function profitandlost()
    {
        $data['title']='SmartERP - ';
        echo view('accounting/profitandlost',$data);
    }
    
    // $routes->get('/hpp/hpp', 'Dashboard::hpp');
    public function hpp()
    {
        $data['title']='SmartERP - HPP';
        echo view('hpp/hpp',$data);
    }
    
    // $routes->get('/masterdata/benefit', 'Dashboard::benefit');
    public function benefit()
    {
        $data['title']='SmartERP - ';
        echo view('masterdata/benefit',$data);
    }
    // $routes->get('/masterdata/category', 'Dashboard::category');
    public function category()
    {
        $data['title']='SmartERP - ';
        echo view('masterdata/category',$data);
    }
    // $routes->get('/masterdata/company', 'Dashboard::company');
    public function company()
    {
        $data['title']='SmartERP - ';
        echo view('masterdata/company',$data);
    }
    // $routes->get('/masterdata/days', 'Dashboard::days');
    public function days()
    {
        $data['title']='SmartERP - ';
        echo view('masterdata/days',$data);
    }
    // $routes->get('/masterdata/department', 'Dashboard::department');
    public function department()
    {
        $data['title']='SmartERP - ';
        echo view('masterdata/department',$data);
    }
    // $routes->get('/masterdata/employee', 'Dashboard::employee');
    public function employee()
    {
        $data['title']='SmartERP - ';
        echo view('masterdata/employee',$data);
    }
    // $routes->get('/masterdata/employeegroupshift', 'Dashboard::employeegroupshift');
    public function employeegroupshift()
    {
        $data['title']='SmartERP - ';
        echo view('masterdata/employeegroupshift',$data);
    }
    // $routes->get('/masterdata/hpp', 'Dashboard::hpp');
    public function masterhpp()
    {
        $data['title']='SmartERP - Master HPP';
        echo view('masterdata/hpp',$data);
    }
    // $routes->get('/masterdata/indexretur', 'Dashboard::indexretur');
    public function indexretur()
    {
        $data['title']='SmartERP - ';
        echo view('masterdata/indexretur',$data);
    }
    // $routes->get('/masterdata/inventory', 'Dashboard::inventory');
    public function inventory()
    {
        $data['title']='SmartERP - ';
        echo view('masterdata/inventory',$data);
    }
    // $routes->get('/masterdata/machine', 'Dashboard::machine');
    public function machine()
    {
        $data['title']='SmartERP - ';
        echo view('masterdata/machine',$data);
    }
    // $routes->get('/masterdata/position', 'Dashboard::position');
    public function position()
    {
        $data['title']='SmartERP - ';
        echo view('masterdata/position',$data);
    }
    // $routes->get('/masterdata/price', 'Dashboard::price');
    public function price()
    {
        $data['title']='SmartERP - ';
        echo view('masterdata/price',$data);
    }
    // $routes->get('/masterdata/rate', 'Dashboard::rate');
    public function rate()
    {
        $data['title']='SmartERP - ';
         echo view('masterdata/rate',$data);
    }
    // $routes->get('/masterdata/salesperson', 'Dashboard::salesperson');
    public function salesperson()
    {
        $data['title']='SmartERP - ';
         echo view('masterdata/salesperson',$data);
    }
    // $routes->get('/masterdata/schedulepattern', 'Dashboard::schedulepattern');
    public function schedulepattern()
    {
        $data['title']='SmartERP - ';
         echo view('masterdata/schedulepattern',$data);
    }
    // $routes->get('/masterdata/section', 'Dashboard::section');
    public function section()
    {
        $tSection = new SectionModel();
        $data['Getsection'] = $tSection->findAll();
        $data['title']='SmartERP - ';
        echo view('masterdata/section',$data);
    }
    // $routes->get('/masterdata/skemapayroll', 'Dashboard::skemapayroll');
    public function skemapayroll()
    {
        $data['title']='SmartERP - ';
        echo view('masterdata/skemapayroll',$data);
    }
    // $routes->get('/masterdata/source', 'Dashboard::source');
    public function source()
    {
        $data['title']='SmartERP - ';
        echo view('masterdata/source',$data);
    }
    // $routes->get('/masterdata/type', 'Dashboard::type');
    public function type()
    {
        $data['title']='SmartERP - ';
        echo view('masterdata/type',$data);
    }
    // $routes->get('/masterdata/umk', 'Dashboard::umk');
    public function umk()
    {
        $data['title']='SmartERP - ';
         echo view('masterdata/umk',$data);
    }
    // $routes->get('/masterdata/uom', 'Dashboard::uom');
    public function uom()
    {
        $data['title']='SmartERP - ';
        echo view('masterdata/uom',$data);
    }
    // $routes->get('/masterdata/warehouse', 'Dashboard::warehouse');
    public function warehouse()
    {
        $data['title']='SmartERP - ';
        echo view('masterdata/warehouse',$data);
    }
    // $routes->get('/masterdata/wholesaleprice', 'Dashboard::wholesaleprice');
    public function wholesaleprice()
    {
        $data['title']='SmartERP - ';
        echo view('masterdata/wholesaleprice',$data);
    }
    
    // $routes->get('/makloon/sparepartmitra', 'Dashboard::sparepartmitra');
    public function sparepartmitra()
    {
        $data['title']='SmartERP - ';
        echo view('makloon/sparepartmitra',$data);
    }
    
    // $routes->get('/pruchashing/materialreceivedvoucher', 'Dashboard::materialreceivedvoucher');
    public function materialreceivedvoucher()
    {
        $data['title']='SmartERP - ';
        echo view('pruchashing/materialreceivedvoucher',$data);
    }
    
    // $routes->get('/pruchashing/mrvinventory', 'Dashboard::mrvinventory');
    public function mrvinventory()
    {
        $data['title']='SmartERP - ';
        echo view('pruchashing/mrvinventory',$data);
    }
    
    // $routes->get('/pruchashing/mrvpurchinvoice', 'Dashboard::mrvpurchinvoice');
    public function mrvpurchinvoice()
    {
        $data['title']='SmartERP - ';
        echo view('pruchashing/mrvpurchinvoice',$data);
    }
    
    // $routes->get('/pruchashing/purchasereturninventory', 'Dashboard::purchasereturninventory');
    public function purchasereturninventory()
    {
        $data['title']='SmartERP - ';
        echo view('pruchashing/purchasereturninventory',$data);
    }
    
    // $routes->get('/pruchashing/purchasingorder', 'Dashboard::purchasingorder');
    public function purchasingorder()
    {
        $data['title']='SmartERP - ';
        echo view('pruchashing/purchasingorder',$data);
    }
    
    // $routes->get('/pruchashing/purchasingrequisition', 'Dashboard::purchasingrequisition');
    public function purchasingrequisition()
    {
        $data['title']='SmartERP - ';
        echo view('pruchashing/purchasingrequisition',$data);
    }
    
    // $routes->get('/production/adjusmentwip', 'Dashboard::adjusmentwip');
    public function adjusmentwip()
    {
        $data['title']='SmartERP - ';
        echo view('production/adjusmentwip',$data);
    }
    
    // $routes->get('/production/bom', 'Dashboard::bom');
    public function bom()
    {
        $data['title']='SmartERP - ';
        echo view('production/bom',$data);
    }
    
    // $routes->get('/production/bonproduction', 'Dashboard::bonproduction');
    public function bonproduction()
    {
        $data['title']='SmartERP - ';
        echo view('production/bonproduction',$data);
    }
    
    // $routes->get('/production/customprice', 'Dashboard::customprice');
    public function customprice()
    {
        $data['title']='SmartERP - ';
        echo view('production/customprice',$data);
    }
    
    // $routes->get('/production/cutting', 'Dashboard::cutting');
    public function cutting()
    {
        $data['title']='SmartERP - ';
        echo view('production/cutting',$data);
    }
    
    // $routes->get('/production/deposit', 'Dashboard::deposit');
    public function deposit()
    {
        $data['title']='SmartERP - ';
        echo view('production/deposit',$data);
    }
    
    // $routes->get('/production/dkp', 'Dashboard::dkp');
    public function dkp()
    {
        $data['title']='SmartERP - ';
        echo view('production/dkp',$data);
    }
    
    // $routes->get('/production/extruder', 'Dashboard::extruder');
    public function extruder()
    {
        $data['title']='SmartERP - ';
        echo view('production/extruder',$data);
    }
    
    // $routes->get('/production/materialneeded', 'Dashboard::materialneeded');
    public function materialneeded()
    {
        $data['title']='SmartERP - ';
        echo view('production/materialneeded',$data);
    }
    
    // $routes->get('/production/mixing', 'Dashboard::mixing');
    public function mixing()
    {
        $data['title']='SmartERP - ';
        echo view('production/mixing',$data);
    }
    
    // $routes->get('/production/packinglist', 'Dashboard::packinglist');
    public function packinglist()
    {
        $data['title']='SmartERP - ';
        echo view('production/packinglist',$data);
    }
    
    // $routes->get('/production/printing', 'Dashboard::printing');
    public function printing()
    {
        $data['title']='SmartERP - ';
        echo view('production/printing',$data);
    }
    
    // $routes->get('/production/production', 'Dashboard::production');
    public function production()
    {
        $data['title']='SmartERP - ';
        echo view('production/production',$data);
    }
    
    // $routes->get('/production/progresscontrol', 'Dashboard::progresscontrol');
    public function progresscontrol()
    {
        $data['title']='SmartERP - ';
        echo view('production/progresscontrol',$data);
    }
    
    // $routes->get('/production/progressop', 'Dashboard::progressop');
    public function progressop()
    {
        $data['title']='SmartERP - ';
        echo view('production/progressop',$data);
    }
    
    // $routes->get('/production/smiv', 'Dashboard::smiv');
    public function smiv()
    {
        $data['title']='SmartERP - ';
        echo view('production/smiv',$data);
    }
    
    // $routes->get('/production/smrv', 'Dashboard::smrv');
    public function smrv()
    {
        $data['title']='SmartERP - ';
        echo view('production/smrv',$data);
    }
    
    // $routes->get('/production/stockwip', 'Dashboard::stockwip');
    public function stockwip()
    {
        $data['title']='SmartERP - ';
        echo view('production/stockwip',$data);
    }
    
    // $routes->get('/sales/invoice', 'Dashboard::invoice');
    public function invoice()
    {
        $data['title']='SmartERP - ';
        echo view('sales/invoice',$data);
    }
    // $routes->get('/sales/returnbarcode', 'Dashboard::returnbarcode');
    public function returnbarcode()
    {
        $data['title']='SmartERP - ';
        echo view('sales/returnbarcode',$data);
    }
    // $routes->get('/sales/returninventory', 'Dashboard::returninventory');
    public function returninventory()
    {
        $data['title']='SmartERP - ';
        echo view('sales/returninventory',$data);
    }
    // $routes->get('/sales/salesorder', 'Dashboard::salesorder');
    public function salesorder()
    {
        $data['title']='SmartERP - ';
        echo view('sales/salesorder',$data);
    }
    // $routes->get('/sales/shipping', 'Dashboard::shipping');
    public function shipping()
    {
        $data['title']='SmartERP - ';
        echo view('sales/shipping',$data);
    }
    // $routes->get('/sales/shippingcashinventroy', 'Dashboard::shippingcashinventroy');
    public function shippingcashinventroy()
    {
        $data['title']='SmartERP - ';
        echo view('sales/shippingcashinventroy',$data);
    }
    // $routes->get('/sales/shippinginventroy', 'Dashboard::shippinginventroy');
    public function shippinginventroy()
    {
        $data['title']='SmartERP - ';
        echo view('sales/shippinginventroy',$data);
    }
    // $routes->get('/sales/sop', 'Dashboard::sop');
    public function sop()
    {
        $data['title']='SmartERP - ';
        echo view('sales/sop',$data);
    }
    // $routes->get('/sales/sppb', 'Dashboard::stocsppbkwip');
    public function sppb()
    {
        $data['title']='SmartERP - ';
        echo view('sales/sppb',$data);
    }

    // $routes->get('/stockopname/stockopname', 'Dashboard::stockopname');
    public function stockopname()
    {
        $data['title']='SmartERP - ';
        echo view('stockopname/stockopname',$data);
    }

}