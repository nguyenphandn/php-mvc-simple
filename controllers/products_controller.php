<?php
require_once('controllers/base_controller.php');
require_once('models/m_products.php');

class ProductsController extends BaseController
{
  function __construct()
  {
    $this->folder = 'products';
  }

  public function view()
  {
    if (isset($_GET['id'])) {
      $product = Products::findId($_GET['id']);
      $data = array('product' => $product);
      $this->render('showproduct', $data);
    } else {
      $products = Products::all();
      $data = array('products' => $products);
      $this->render('products', $data);
    }
  }
}
