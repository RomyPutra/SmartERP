<?php
namespace App\Controllers;
class Dashboard extends BaseController
{
    public function index()
    {
        $header['title']='SmartERP';
        echo view('partial/header',$header);
        echo view('partial/top_menu');
        echo view('partial/side_menu');
        echo view('dashboard');
        echo view('partial/footer');
    }

    public function login(){
        $header['title']='SmartERP';
        echo view('page/login',$header);
    }

    public function fingerprint(){
        echo view('payroll/fingerprint');
    }

    // $routes->get('/payroll/absence', 'Dashboard::absence');
    public function absence(){
        echo view('payroll/absence');
    }

    // $routes->get('/payroll/daylysalary', 'Dashboard::daylysalary');
    public function daylysalary(){
        echo view('payroll/daylysalary');
    }

    // $routes->get('/payroll/monthlysalary', 'Dashboard::monthlysalary');
    public function monthlysalary(){
        echo view('payroll/monthlysalary');
    }

    // $routes->get('/accounting/mutasistock', 'Dashboard::mutasistock');
    public function mutasistock(){
        echo view('accounting/mutasistock');
    }

    // $routes->get('/accounting/neraca', 'Dashboard::neraca');
    public function neraca(){
        echo view('accounting/neraca');
    }

    // $routes->get('/accounting/profitandlost', 'Dashboard::profitandlost');
    public function profitandlost(){
        echo view('accounting/profitandlost');
    }
    
    // $routes->get('/hpp/hpp', 'Dashboard::hpp');
    public function hpp(){
        echo view('hpp/hpp');
    }
    
    // $routes->get('/masterdata/benefit', 'Dashboard::benefit');
    public function benefit(){
        echo view('masterdata/benefit');
    }
    // $routes->get('/masterdata/category', 'Dashboard::category');
    public function category(){
        echo view('masterdata/category');
    }
    // $routes->get('/masterdata/company', 'Dashboard::company');
    public function company(){
        echo view('masterdata/company');
    }
    // $routes->get('/masterdata/days', 'Dashboard::days');
    public function days(){
        echo view('masterdata/days');
    }
    // $routes->get('/masterdata/department', 'Dashboard::department');
    public function department(){
        
        echo view('masterdata/department');
    }
    // $routes->get('/masterdata/employee', 'Dashboard::employee');
    public function employee(){
        
        echo view('masterdata/employee');
    }
    // $routes->get('/masterdata/employeegroupshift', 'Dashboard::employeegroupshift');
    public function employeegroupshift(){
       
        echo view('masterdata/employeegroupshift');
    }
    // $routes->get('/masterdata/hpp', 'Dashboard::hpp');
    public function masterhpp(){
        
        echo view('masterdata/hpp');
    }
    // $routes->get('/masterdata/indexretur', 'Dashboard::indexretur');
    public function indexretur(){
        
        echo view('masterdata/indexretur');
    }
    // $routes->get('/masterdata/inventory', 'Dashboard::inventory');
    public function inventory(){
        
        echo view('masterdata/inventory');
    }
    // $routes->get('/masterdata/machine', 'Dashboard::machine');
    public function machine(){
        
        echo view('masterdata/machine');
    }
    // $routes->get('/masterdata/position', 'Dashboard::position');
    public function position(){
       
        echo view('masterdata/position');
    }
    // $routes->get('/masterdata/price', 'Dashboard::price');
    public function price(){
       
        echo view('masterdata/price');
    }
    // $routes->get('/masterdata/rate', 'Dashboard::rate');
    public function rate(){
        
        echo view('masterdata/rate');
    }
    // $routes->get('/masterdata/salesperson', 'Dashboard::salesperson');
    public function salesperson(){
        
        echo view('masterdata/salesperson');
    }
    // $routes->get('/masterdata/schedulepattern', 'Dashboard::schedulepattern');
    public function schedulepattern(){
        
        echo view('masterdata/schedulepattern');
    }
    // $routes->get('/masterdata/section', 'Dashboard::section');
    public function section(){
       
        echo view('masterdata/section');
    }
    // $routes->get('/masterdata/skemapayroll', 'Dashboard::skemapayroll');
    public function skemapayroll(){
       
        echo view('masterdata/skemapayroll');
    }
    // $routes->get('/masterdata/source', 'Dashboard::source');
    public function source(){
        echo view('masterdata/source');
    }
    // $routes->get('/masterdata/type', 'Dashboard::type');
    public function type(){
        echo view('masterdata/type');
    }
    // $routes->get('/masterdata/umk', 'Dashboard::umk');
    public function umk(){
        
        echo view('masterdata/umk');
    }
    // $routes->get('/masterdata/uom', 'Dashboard::uom');
    public function uom(){
        echo view('masterdata/uom');
    }
    // $routes->get('/masterdata/warehouse', 'Dashboard::warehouse');
    public function warehouse(){
        echo view('masterdata/warehouse');
    }
    // $routes->get('/masterdata/wholesaleprice', 'Dashboard::wholesaleprice');
    public function wholesaleprice(){
        echo view('masterdata/wholesaleprice');
    }
    
    // $routes->get('/makloon/sparepartmitra', 'Dashboard::sparepartmitra');
    public function sparepartmitra(){
        echo view('makloon/sparepartmitra');
    }
    
    // $routes->get('/pruchashing/materialreceivedvoucher', 'Dashboard::materialreceivedvoucher');
    public function materialreceivedvoucher(){
        echo view('pruchashing/materialreceivedvoucher');
    }
    
    // $routes->get('/pruchashing/mrvinventory', 'Dashboard::mrvinventory');
    public function mrvinventory(){
        echo view('pruchashing/mrvinventory');
    }
    
    // $routes->get('/pruchashing/mrvpurchinvoice', 'Dashboard::mrvpurchinvoice');
    public function mrvpurchinvoice(){
        echo view('pruchashing/mrvpurchinvoice');
    }
    
    // $routes->get('/pruchashing/purchasereturninventory', 'Dashboard::purchasereturninventory');
    public function purchasereturninventory(){
        echo view('pruchashing/purchasereturninventory');
    }
    
    // $routes->get('/pruchashing/purchasingorder', 'Dashboard::purchasingorder');
    public function purchasingorder(){
        echo view('pruchashing/purchasingorder');
    }
    
    // $routes->get('/pruchashing/purchasingrequisition', 'Dashboard::purchasingrequisition');
    public function purchasingrequisition(){
        echo view('pruchashing/purchasingrequisition');
    }
    
    // $routes->get('/production/adjusmentwip', 'Dashboard::adjusmentwip');
    public function adjusmentwip(){
        echo view('production/adjusmentwip');
    }
    
    // $routes->get('/production/bom', 'Dashboard::bom');
    public function bom(){
        echo view('production/bom');
    }
    
    // $routes->get('/production/bonproduction', 'Dashboard::bonproduction');
    public function bonproduction(){
        echo view('production/bonproduction');
    }
    
    // $routes->get('/production/customprice', 'Dashboard::customprice');
    public function customprice(){
        echo view('production/customprice');
    }
    
    // $routes->get('/production/cutting', 'Dashboard::cutting');
    public function cutting(){
        echo view('production/cutting');
    }
    
    // $routes->get('/production/deposit', 'Dashboard::deposit');
    public function deposit(){
        echo view('production/deposit');
    }
    
    // $routes->get('/production/dkp', 'Dashboard::dkp');
    public function dkp(){
        echo view('production/dkp');
    }
    
    // $routes->get('/production/extruder', 'Dashboard::extruder');
    public function extruder(){
        echo view('production/extruder');
    }
    
    // $routes->get('/production/materialneeded', 'Dashboard::materialneeded');
    public function materialneeded(){
        echo view('production/materialneeded');
    }
    
    // $routes->get('/production/mixing', 'Dashboard::mixing');
    public function mixing(){
        echo view('production/mixing');
    }
    
    // $routes->get('/production/packinglist', 'Dashboard::packinglist');
    public function packinglist(){
        echo view('production/packinglist');
    }
    
    // $routes->get('/production/printing', 'Dashboard::printing');
    public function printing(){
        echo view('production/printing');
    }
    
    // $routes->get('/production/production', 'Dashboard::production');
    public function production(){
        echo view('production/production');
    }
    
    // $routes->get('/production/progresscontrol', 'Dashboard::progresscontrol');
    public function progresscontrol(){
        echo view('production/progresscontrol');
    }
    
    // $routes->get('/production/progressop', 'Dashboard::progressop');
    public function progressop(){
        echo view('production/progressop');
    }
    
    // $routes->get('/production/smiv', 'Dashboard::smiv');
    public function smiv(){
        echo view('production/smiv');
    }
    
    // $routes->get('/production/smrv', 'Dashboard::smrv');
    public function smrv(){
        echo view('production/smrv');
    }
    
    // $routes->get('/production/stockwip', 'Dashboard::stockwip');
    public function stockwip(){
        echo view('production/stockwip');
    }
    
    // $routes->get('/sales/invoice', 'Dashboard::invoice');
    public function invoice(){
        echo view('sales/invoice');
    }
    // $routes->get('/sales/returnbarcode', 'Dashboard::returnbarcode');
    public function returnbarcode(){
        echo view('sales/returnbarcode');
    }
    // $routes->get('/sales/returninventory', 'Dashboard::returninventory');
    public function returninventory(){
        echo view('sales/returninventory');
    }
    // $routes->get('/sales/salesorder', 'Dashboard::salesorder');
    public function salesorder(){
        echo view('sales/salesorder');
    }
    // $routes->get('/sales/shipping', 'Dashboard::shipping');
    public function shipping(){
        echo view('sales/shipping');
    }
    // $routes->get('/sales/shippingcashinventroy', 'Dashboard::shippingcashinventroy');
    public function shippingcashinventroy(){
        echo view('sales/shippingcashinventroy');
    }
    // $routes->get('/sales/shippinginventroy', 'Dashboard::shippinginventroy');
    public function shippinginventroy(){
        echo view('sales/shippinginventroy');
    }
    // $routes->get('/sales/sop', 'Dashboard::sop');
    public function sop(){
        echo view('sales/sop');
    }
    // $routes->get('/sales/sppb', 'Dashboard::stocsppbkwip');
    public function sppb(){
        echo view('sales/sppb');
    }


    // $routes->get('/stockopname/stockopname', 'Dashboard::stockopname');
    public function stockopname(){
        echo view('stockopname/stockopname');
    }
    

}