<?php
require_once('controllers/base_controller.php');
require_once('models/m_register.php');
require_once('controllers/utils/validation.php');

class RegisterController extends BaseController
{
    function __construct()
    {
        $this->folder = 'register';
    }

    public function view()
    {
        session_start();
        error_reporting(0);

        $data = array(
            'username' => '',
            'errmsg' => '',
            'statusmsg' => '',
            'errmsg_username' => '',
            'errmsg_password' => '',
            'errmsg_repassword' => ''
            );

        if (isset($_POST['submit'])) {
                $data['username'] = $_POST['username'];
                $data['errmsg_username'] = validate_username($_POST['username']);
                $data['errmsg_password'] = validate_password($_POST['password']);
                $data['errmsg_repassword'] = compare_repassword($_POST['repassword'], $_POST['password']);
            
            if ($data['errmsg_username'] == '' && $data['errmsg_password'] == '' && $data['errmsg_repassword'] == '') {
                $register = new Register($_POST['username'], hash('sha256', $_POST['password']));
                $res = $register->insert();
                if (!$res) {
                    $data['errmsg'] =  "Cannot register your account.";
                } else {
                    $_SESSION['id'] = $res;
                    $_SESSION['user'] = explode('@', $data['username'])[0];
                    $data['statusmsg'] = $_SESSION['user'];
                    header("location:index.php?page=dashboard");
                    exit();
                }
            }
        }

        $this->render('register', $data);

    }
}
