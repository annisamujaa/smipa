<?php

namespace App\Models;

use CodeIgniter\Model;

class PetunjukModel extends Model
{
    protected $table = 'petunjuk';

    public function getPetunjuk()
    {
        return $this->findAll();
    }
}
