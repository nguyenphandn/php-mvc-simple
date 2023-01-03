<?php
require_once('controllers/base_controller.php');

class HomeController extends BaseController
{
  function __construct()
  {
    $this->folder = 'home';
  }

  public function view()
  {
    session_start();
    error_reporting(0);
    $this->render('home', array());
  }
}
