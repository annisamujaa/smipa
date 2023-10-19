<?php

namespace App\Controllers;

use App\Models\UserModel;

class Peringkat extends BaseController
{
    public function index()
    {
        $user = new UserModel();
        // $data = $user->getUsers();
        $data['result'] = $user->getDescendingDataUser();
        return view('pages/menu_utama/peringkat', compact('data'));
        // return view('pages/sr');
        // return view('pages/menu_utama/tantangan');
    }
}
