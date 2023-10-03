<?php

namespace App\Controllers;

use App\Models\TumbuhanModel;

class Tumbuhan extends BaseController
{
    public function index()
    {
        $tumbuhan = new TumbuhanModel();
        $data = $tumbuhan->findAll();
        return view('pages/tumbuhan/tumbuhan-1', compact('data'));
        // return view('pages/tumbuhan');
    }

    public function index2()
    {
        $tumbuhan = new TumbuhanModel();
        $data = $tumbuhan->findAll();
        return view('pages/tumbuhan/tumbuhan-2', compact('data'));
        // return view('pages/tumbuhan');
    }
    public function index3()
    {
        $tumbuhan = new TumbuhanModel();
        $data = $tumbuhan->findAll();
        return view('pages/tumbuhan/tumbuhan-3', compact('data'));
        // return view('pages/tumbuhan');
    }
    public function index4()
    {
        $tumbuhan = new TumbuhanModel();
        $data = $tumbuhan->findAll();
        return view('pages/tumbuhan/tumbuhan-4', compact('data'));
        // return view('pages/tumbuhan');
    }
    public function index5()
    {
        $tumbuhan = new TumbuhanModel();
        $data = $tumbuhan->findAll();
        return view('pages/tumbuhan/tumbuhan-5', compact('data'));
        // return view('pages/tumbuhan');
    }
}
