<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $model;
    public $session;

    function __construct()
    {
        $this->session = session();
        $this->model = new UserModel();
        $this->helpers = ['form', 'url'];
    }

    public function login()
    {
        // $this->session->setFlashdata('message', null);
        // $this->session->destroy();
        if ($this->isLoggedIn()) {
            return redirect()->to(base_url('/dashboard'));
        }
        $data = [
            'title' => 'Login | Autiscience'
        ];
        // $this->load->view('/login', $data);
        return view('/login', $data);
    }
    public function register()
    {
        if ($this->isLoggedIn()) {
            return redirect()->to(base_url('/dashboard'));
        }
        $data = [
            'title' => 'Register | Autiscience'
        ];
        return view('/register', $data);
    }

    private function isLoggedIn(): bool
    {
        if (session()->get('logged_in')) {
            return true;
        }
        return false;
    }

    public function store()
    {
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = [
            'name' => $name,
            'email' => $email,
            'password' => $password
        ];

        $save = $this->model->save($user);

        if ($save) {
            session()->setFlashdata('success', 'Register Berhasil!');
            return redirect()->to(base_url('login'));
        } else {
            session()->setFlashdata('error', $this->model->errors());
            return redirect()->back();
        }

        $this->session->store('users', $name);
    }

    public function loginProses()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $credentials = ['email' => $email];

        $user = $this->model->where($credentials)
            ->first();

        if (!$user) {
            session()->setFlashdata('error', 'Email atau password anda salah.');
            return redirect()->back();
        }

        $passwordCheck = password_verify($password, $user['password']);

        if (!$passwordCheck) {
            session()->setFlashdata('error', 'Email atau password anda salah.');
            return redirect()->back();
        }

        $userData = [
            'name' => $user['name'],
            'email' => $user['email'],
            'logged_in' => TRUE
        ];
        session()->set($userData);

        return redirect()->to(base_url('dashboard'));
    }

    public function logout()
    {
        $userData = [
            'name',
            'email',
            'logged_in'
        ];
        session()->remove($userData);

        return view('welcome');
    }

    public function submitData()
    {
        $data = $this->input->post();
        if (!empty($data)) {
            $this->db->insert('users', $data);

            $this->output->set_content_type('application/json');
            $this->output->set_output(json_encode(['success' => true]));
        } else {
            $this->output->set_content_type('application/json');
            $this->output->set_output(json_encode(['error' => true]));
        }
    }

    //     public function delete($id)
    //     {
    //         $model = new UserModel();
    //         $model->deleteById($id);
    //         return redirect()->to(base_url('admin/1'));
    //     }
}
