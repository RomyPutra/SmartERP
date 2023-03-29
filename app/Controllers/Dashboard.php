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

    public function page(){
        $header['title']='SmartERP';
        echo view('page/login',$header);
    }

    // public function fingerprint(){
    //     $header['title']='SmartERP';
    //     echo view('page/fingerprint',$header);
    // }

}