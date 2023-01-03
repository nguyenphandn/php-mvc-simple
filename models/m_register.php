<?php
class Register
{
  public $username;
  public $password;

  function __construct($username, $password)
  {
    $this->username = $username;
    $this->password = $password;
  }

  function insert()
  {
    $db = DB::getInstance();
    // prepared named statement
    $req = $db->prepare('INSERT INTO user(username,password) VALUES(:username, :password)');
    $req->execute(array('username' => $this->username, 'password' => $this->password));

    if ($req->rowCount()) {
        $getId = $db->prepare('SELECT * FROM user WHERE username = :username AND password = :password');
        $getId->execute(array('username' => $this->username, 'password' => $this->password));
        $item = $getId->fetch(PDO::FETCH_ASSOC);
        if ($item) {
          return $item['id'];
        }
    }

    return null;
  }
}