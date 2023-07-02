<?php

namespace App\Models;

use CodeIgniter\Model;

class CompanyModel extends Model
{
    protected $table      = 'm_company';
    protected $primaryKey = 'InternalID';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['InternalID','CompanyName','UserName','dtRecord','UserModified','dtModified','rowguid','CompanyID'];

    public function getTable($id = false)
    {
        if($id === false)
        {
            $data = $this->findAll();
        } else {
            $data = $this->getWhere(['InternalID' => $id]);
        }  
        log_message("info", "Company Log: ".$this->db->getLastQuery());
        return $data;
    }
 
    public function insertTable($data)
    {
    	$result = $this->db->table($this->table)->insert($data);
        log_message("info", "Insert data Log: ".$this->db->getLastQuery());
        return $result;
    }

    public function updateTable($data, $id)
    {
        $result = $this->db->table($this->table)->update($data, ['InternalID' => $id]);
        log_message("info", "Company Log: ".$this->db->getLastQuery());
        return $result;
    }

    public function deleteTable($id)
    {
        return $this->db->table($this->table)->delete(['InternalID' => $id]);
    } 

}