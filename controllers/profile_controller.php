<?php
require_once('controllers/base_controller.php');
require_once('models/m_profile.php');
require_once('controllers/utils/validation.php');

class ProfileController extends BaseController
{
  function __construct()
  {
    $this->folder = 'profile';
  }

  public function view()
  {
    session_start();
    error_reporting(0);

    $profile = new Profile($_SESSION['id']);

    $data = array(
        'name' => $_SESSION['user'],
        'id' => $_SESSION['id'],
        'errmsg' => '',
        'statusmsg' => '',
        'errmsg_oldpass' => '',
        'errmsg_newpass' => ''
    );

    if ($_POST['account'] == 'modify') {
        $data['errmsg_oldpass'] = validate_password($_POST['oldpass']);
        $data['errmsg_newpass'] = compare_newpassword($_POST['newpass'], $_POST['oldpass']);
        
        if ($data['errmsg_oldpass'] == '' && $data['errmsg_newpass'] == '') {
            $res = $profile->changePass(hash('sha256', $_POST['newpass']), hash('sha256', $_POST['oldpass']));
            if (!$res) {
                $data['errmsg'] = "Wrong password.";
            } else {
                $data['statusmsg'] = "Change settings successfully!";
            }
            $data['statusmsg'] = "Change settings successfully!";
        }

    } else if ($_POST['account'] == 'delete') {
        $res = $profile->delete();
        if (!$res) {
            $data['errmsg'] = "Cannot delete account.";
        } else {
            $data['statusmsg'] = "Delete account successfully!";
            $_SESSION['account'] = "deleted";
            header("location:index.php?page=logout");
            exit();
        }
    }

    $this->render('profile', $data);
  }

}
