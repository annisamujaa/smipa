<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{

    public function profile()
    {
        $profile = new UserModel();
        $data = $profile->getUsers();
        return view('pages/menu_utama/profile', compact('data'));
        // return view('pages/profile');
    }

    // public function edit_profile()
    // {
    //     return view('pages/ubah_profile');
    // }
}
