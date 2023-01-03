<?php
require_once('controllers/base_controller.php');

class LogoutController extends BaseController
{
  function __construct()
  {
    $this->folder = 'logout';
  }

  public function view()
  {
    session_start();
    error_reporting(0);
    $_SESSION['id']=="";
    $_SESSION['name']=="";
    session_unset();
    session_destroy();
    header("location:index.php?page=home");
    exit();
  }
}
