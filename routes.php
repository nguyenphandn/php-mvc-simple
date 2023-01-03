<?php
$pages = array(
  'home',
  'products',
  'login',
  'register',
  'profile',
  'logout',
  'dashboard',
  'error'
);

// if page dont exist or (try to go to dashboard or profile without logging in) => error page
if (!in_array($page, $pages) || (!isset($_SESSION['id']) && ($page == 'dashboard' || $page == 'profile')) ) {
  $page = 'error';
}

// include 'page'_controller.php from controllers
include_once('controllers/' . $page . '_controller.php');

// calling class 'Page'Controller
$klass = str_replace('_', '', ucwords($page, '_')) . 'Controller';
$controller = new $klass;
$controller->view();

// if ($controller == 'products' && isset($_GET['id'])) {
//   $controller->viewfind();
// } else {
//   $controller->view();
// }