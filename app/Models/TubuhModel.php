<?php

namespace App\Models;

use CodeIgniter\Model;

class TubuhModel extends Model
{
    protected $table = 'tubuh';


    public function getUsers()
    {
        return $this->findAll();
    }
}
