<?php

namespace App\Controllers;

use App\Models\UserModel;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('/');
        }

        $data = [
            'title' => 'Dashboard | Autiscience'
        ];
        return view('pages/menu_utama/dashboard', $data);
    }

    public function profile()
    {
        $profile = new UserModel();
        $data = $profile->getUsers();
        return view('pages/profile', compact('data'));
        // return view('pages/profile');
    }

    private function isLoggedIn(): bool
    {
        if (session()->get('logged_in')) {
            return true;
        }
        return false;
    }
}
