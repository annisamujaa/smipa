<?php

namespace App\Controllers;

use App\Models\PetunjukModel;

class Petunjuk extends BaseController
{
    public function index()
    {
        $hewan = new PetunjukModel();
        $data = $hewan->getPetunjuk();
        return view('pages/menu_utama/petunjuk', compact('data'));
        // return view('pages/hewan');
    }
}
