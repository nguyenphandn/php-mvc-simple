<?php
class Products
{
  public $id;
  public $pname;
  public $desc;

  function __construct($id, $pname, $desc)
  {
    $this->id = $id;
    $this->pname = $pname;
    $this->desc = $desc;
  }

  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM product');

    foreach ($req->fetchAll() as $item) {
      $list[] = new Products($item['id'], $item['pname'], $item['description']);
    }

    return $list;
  }

  static function findId($id)
  {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM product WHERE id = :id');
    $req->execute(array('id' => $id));

    $item = $req->fetch();
    if (isset($item['id'])) {
      return new Products($item['id'], $item['pname'], $item['description']);
    }
    return null;
  }
}
