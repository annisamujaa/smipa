<?php

namespace App\Controllers;

use App\Models\BendaModel;

class Benda extends BaseController
{
    public function index()
    {
        $benda = new BendaModel();
        $data = $benda->findAll();
        return view('pages/benda/benda-1', compact('data'));
        // return view('pages/benda');
    }

    public function index2()
    {
        $benda = new BendaModel();
        $data = $benda->findAll();
        return view('pages/benda/benda-2', compact('data'));
        // return view('pages/benda');
    }
    public function index3()
    {
        $benda = new BendaModel();
        $data = $benda->findAll();
        return view('pages/benda/benda-3', compact('data'));
        // return view('pages/benda');
    }
    public function index4()
    {
        $benda = new BendaModel();
        $data = $benda->findAll();
        return view('pages/benda/benda-4', compact('data'));
        // return view('pages/benda');
    }
    public function index5()
    {
        $benda = new BendaModel();
        $data = $benda->findAll();
        return view('pages/benda/benda-5', compact('data'));
        // return view('pages/benda');
    }
}
