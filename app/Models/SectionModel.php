<?php

namespace App\Models;

use CodeIgniter\Model;

class SectionModel extends Model
{
    protected $table      = 'm_section';
    protected $primaryKey = 'internalid';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['InternalID','SectionID','SectionName','UserName','DtRecord','UserModified','DtModified'];
}