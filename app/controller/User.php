<?php

namespace App\Controller;
use System\Controller;
use App\Model\UserModel;
use System\Helpers\Session;

class User extends Controller
{
    private $userModel;
    public function __construct()
    {
        parent::__construct();
        $this->session = new Session();
        $this->userModel = new UserModel();
    }

    public function signin()
    {
        $header = array(
            'title' => 'Signin Page',
            'user_email' => get_session('email')
        );

        $data = [];

        if (isset($_POST['submit'])) {
            $email = $this->post('email');
            $password = md5($this->post('password'));

            $user = $this->userModel->findLogin($email, $password);

            if ($user) {
                $this->session->set('user_id', $user['user_id']);
                $this->session->set('email', $user['email']);

                $data['message'] = "<div style='color: green;'>Login successful! Welcome {$user['email']}.</div>
        <script>
            setTimeout(function() {
                window.location.href = '" . base_url() . "User/dashboard';
            }, 3000); // 3 seconds
        </script>";
            } else {
                $data['message'] = "<div style='color: red;'>Invalid email or password.</div>";
            }
        }

        $this->load->view('pages/header', $header);
        $this->load->view('user/signin', $data);
        $this->load->view('pages/footer');
    }

    public function signup()
    {
        $this->load->view('pages/header');
        $this->load->view('user/signup');
        $this->load->view('pages/footer');

        if(isset($_POST['submit'])) {

            $login = array(
                'email' => $this->post('email'),
                'password' => md5($this->post('password'))
            );

            $userId = $this->userModel->insertLogin($login);

            $userDetail = array(
                'user_id' => $userId,
                'first_name' => $this->post('first_name'),
                'last_name' => $this->post('last_name'),
            );

            //Calling Model to Insert Data in Table
            $run = $this->userModel->insertUserDetails($userDetail);

            if (!$run) {
                echo "<div style='color: green;'>User registered successfully!</div>";
            } else {
                echo "<div style='color: red;'>Failed to save user details.</div>";
            }

        }
    }

    public function dashboard()
    {
        $this->load->view('panel/sidebar');
        $this->load->view('panel/dashboard');
    }
}
