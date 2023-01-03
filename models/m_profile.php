<?php
class Profile
{
    public $userId;

    function __construct($id)
    {
        $this->userId = $id;
    }

    function delete()
    {
        $db = DB::getInstance();
        // prepared named statement
        $req = $db->prepare('DELETE FROM user WHERE id = :id');
        $req->execute(array('id' => $this->userId));

        if ($req->rowCount()) {
            return 1;
        }
        return null;
    }

    function changePass($n, $o)
    {
        $db = DB::getInstance();
        // prepared named statement
        $req = $db->prepare('UPDATE user SET password=:newpassword WHERE id = :id AND password = :oldpassword');
        $req->execute(array('id' => $this->userId, 'newpassword' => $n, 'oldpassword' => $o));

        if ($req->rowCount()) {
            return 1;
        }
        return null;
    }
}