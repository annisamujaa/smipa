<?php

namespace App\Controllers;

use App\Models\TubuhModel;

class Tubuh extends BaseController
{
    public function index()
    {
        $tubuh = new TubuhModel();
        $data = $tubuh->findAll();
        return view('pages/tubuh/tubuh-1', compact('data'));
        // return view('pages/tubuh');
    }

    public function index2()
    {
        $tubuh = new TubuhModel();
        $data = $tubuh->findAll();
        return view('pages/tubuh/tubuh-2', compact('data'));
        // return view('pages/tubuh');
    }
    public function index3()
    {
        $tubuh = new TubuhModel();
        $data = $tubuh->findAll();
        return view('pages/tubuh/tubuh-3', compact('data'));
        // return view('pages/tubuh');
    }
    public function index4()
    {
        $tubuh = new TubuhModel();
        $data = $tubuh->findAll();
        return view('pages/tubuh/tubuh-4', compact('data'));
        // return view('pages/tubuh');
    }
}
