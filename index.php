<?php
require_once('connection.php');
session_start();
error_reporting(0);
if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 'home';
}

require_once('routes.php');