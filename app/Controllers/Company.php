<?php
namespace App\Controllers;
use App\Models\CompanyModel;
use CodeIgniter\Config\Config;
use CodeIgniter\Controller;

class Company extends BaseController
{
    public function index()
    {
        $data['title'] = 'SmartERP - Company';

        $model = new CompanyModel();
        $data['company'] = $model->getTable();
        echo view('masterdata/company',$data);
    }

    public function create()
    {
    	$model = new CompanyModel();
        $data['title'] = 'SmartERP - Add Company';
        log_message("info", "credit data Log: ".print_r($data, true));
    	echo view('masterdata/company_credit', $data);
    }

    public function edit($id)
    {
    	$model = new CompanyModel();
        $data['title'] = 'SmartERP - Add Company';
        log_message("info", "credit id Log: ".isset($id));
    	if (isset($id))
    	{
	        $data['title'] = 'SmartERP - Edit Company';
	    	$data['company'] = $model->getTable($id)->getRowArray();
    	}
        log_message("info", "credit data Log: ".print_r($data, true));
    	echo view('masterdata/company_credit', $data);
    }

    public function store()
    {
        $validation =  \Config\Services::validation();
        $model = new CompanyModel();

        $data = array(
            'CompanyName'   => $this->request->getPost('companyname'),
            'UserName'   	=> $this->request->getPost('username'),
            'dtRecord'   	=> date("Y-m-d H:i:s"),
            'UserModified'  => $this->request->getPost('username'),
            'dtModified'   	=> date("Y-m-d H:i:s"),
            'rowguid'		=> $model->guidV4(),
            'CompanyID'   	=> $this->request->getPost('initial'),
        );

        // log_message("info", "store data Log: ".print_r($data, true));
        if($validation->run($data, 'company') == FALSE){
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('company/create'));
        } else {
            $simpan = $model->insertTable($data);
            if($simpan)
            {
                session()->setFlashdata('success', 'Created Company successfully');
                return redirect()->to(base_url('company')); 
            }
        }
    }
 
    public function update()
    {
        $id = $this->request->getPost('internalid');
        $validation =  \Config\Services::validation();
        $model = new CompanyModel();

        $data = array(
            'CompanyName'   => $this->request->getPost('companyname'),
            'UserName'   	=> $this->request->getPost('username'),
            'dtRecord'   	=> date("YYYY-MM-DD hh:mm:ss"),
            'UserModified'  => $this->request->getPost('username'),
            'dtModified'   	=> date("YYYY-MM-DD hh:mm:ss"),
            'rowguid'		=> $model->guidV4(),
            'CompanyID'   	=> $this->request->getPost('initial'),
        );
        
        if($validation->run($data, 'company') == FALSE){
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('company/edit/'.$id));
        } else {
            $ubah = $model->updateTable($data, $id);
            if($ubah)
            {
                session()->setFlashdata('info', 'Updated successfully');
                return redirect()->to(base_url('company')); 
            }
        }
    }
 
    public function delete($id)
    {
        $model = new CompanyModel();
        $hapus = $model->deleteTable($id);
        if($hapus)
        {
            session()->setFlashdata('warning', 'Deleted successfully');
            return redirect()->to(base_url('company')); 
        }
    }
}