<?php
namespace App\Controllers;
use App\Models\AgentModel;

class AuthController extends BaseController {
    public function login() {
        return view('login');
    }

    public function loginPost() {
        $agentModel = new AgentModel();
        $username = $this->request->getPost('username', FILTER_SANITIZE_STRING) ?? '';
        $password = $this->request->getPost('password', FILTER_SANITIZE_STRING) ?? '';

        $agent = $agentModel->where('username', $username)->first();

        if ($agent && password_verify($password, $agent['password'])) {
            session()->set('logged_in', true);
            session()->set('agent_id', $agent['id']); // Simpan ID atau data lain yang diperlukan

            return redirect()->to('/policy');
        } else {
            return redirect()->back()->with('error', 'Invalid Credentials');
        }
    }

    public function logout() {
        session()->destroy();
        return redirect()->to('/login');
    }
}