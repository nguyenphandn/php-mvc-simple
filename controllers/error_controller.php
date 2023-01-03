<?php
require_once('controllers/base_controller.php');

class ErrorController extends BaseController
{
  function __construct()
  {
    $this->folder = 'error';
  }

  public function view()
  {
    session_start();
    error_reporting(0);
    $this->render('error', array());
  }
}
