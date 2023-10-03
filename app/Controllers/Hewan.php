<?php

namespace App\Controllers;

use App\Models\HewanModel;

class Hewan extends BaseController
{
    public function index()
    {
        $hewan = new HewanModel();
        $data = $hewan->findAll();
        return view('pages/hewan/hewan-1', compact('data'));
        // return view('pages/hewan');
    }

    public function index2()
    {
        $hewan = new HewanModel();
        $data = $hewan->findAll();
        return view('pages/hewan/hewan-2', compact('data'));
        // return view('pages/hewan');
    }
    public function index3()
    {
        $hewan = new HewanModel();
        $data = $hewan->findAll();
        return view('pages/hewan/hewan-3', compact('data'));
        // return view('pages/hewan');
    }
    public function index4()
    {
        $hewan = new HewanModel();
        $data = $hewan->findAll();
        return view('pages/hewan/hewan-4', compact('data'));
        // return view('pages/hewan');
    }
    public function index5()
    {
        $hewan = new HewanModel();
        $data = $hewan->findAll();
        return view('pages/hewan/hewan-5', compact('data'));
        // return view('pages/hewan');
    }
}
