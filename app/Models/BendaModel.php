<?php

namespace App\Models;

use CodeIgniter\Model;

class BendaModel extends Model
{
    protected $table = 'benda';

    public function getUsers()
    {
        return $this->findAll();
    }
}
