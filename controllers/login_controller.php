<?php
require_once('controllers/base_controller.php');
require_once('models/m_login.php');
require_once('controllers/utils/validation.php');

class LoginController extends BaseController
{
    function __construct()
    {
        $this->folder = 'login';
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
            'errmsg_password' => ''
            );

        if (isset($_POST['submit'])) {
                $data['username'] = $_POST['username'];
                $data['errmsg_username'] = validate_username($_POST['username']);
                $data['errmsg_password'] = validate_password($_POST['password']);
            
            if ($data['errmsg_username'] == '' && $data['errmsg_password'] == '') {
                $login = new Login($_POST['username'], hash('sha256', $_POST['password']));
                $userId = $login->find();
                if (!$userId) {
                    $data['errmsg'] =  "Invalid username or password.";
                } else {
                    $_SESSION['id'] = $userId;
                    $_SESSION['user'] = explode('@', $data['username'])[0];
                    $data['statusmsg'] = $_SESSION['user'];
                    header("location:index.php?page=dashboard");
                    exit();
                }
            }
        }

        $this->render('login', $data);

    }
}
