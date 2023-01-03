<?php
class Login
{
  public $username;
  public $password;

  function __construct($username, $password)
  {
    $this->username = $username;
    $this->password = $password;
  }

  function find()
  {
    $db = DB::getInstance();
    // prepared named statement
    $req = $db->prepare('SELECT * FROM user WHERE username = :username AND password = :password');
    $req->execute(array('username' => $this->username, 'password' => $this->password));

    $item = $req->fetch(PDO::FETCH_ASSOC);
    if ($item) {
      return $item['id'];
    }
    return null;
  }
}