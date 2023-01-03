<?php
require_once('controllers/base_controller.php');

class DashboardController extends BaseController
{
  function __construct()
  {
    $this->folder = 'dashboard';
  }

  public function view()
  {
    session_start();
    error_reporting(0);
    $data = array(
      'id' => $_SESSION['id'],
      'name' => $_SESSION['user']
    );
    $this->render('dashboard', $data);
  }
}
