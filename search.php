<?php
require_once('connection.php');
if (isset($_GET['name'])) {
    $hint="";
    $name = $_GET['name'];

    //lookup all links from the xml file if length of q>0
    if (strlen($name)>0) {
        
        $db = DB::getInstance();
        $req = $db->prepare("SELECT * FROM product WHERE pname LIKE :pname ORDER BY pname ASC");
        $req->execute(array('pname' => $name.'%'));

        $results = $req->fetchAll();

        for($i = 0; $i < count($results); $i++) {
            $pid = $results[$i]['id'];
            $pname = $results[$i]['pname'];
            $desc = $results[$i]['description'];
            if ($hint=="") {
                $hint="<a href='index.php?page=products&id=".$pid."'>".$pname."</a>";
            } else {
                $hint=$hint . "<br /><a href='index.php?page=products&id=".$pid."'>".$pname."</a>";
            }
        }
    }

    // Set output to "no suggestion" if no hint was found
    // or to the correct values
    if ($hint=="") {
        $response="no suggestion";
    } else {
        $response=$hint;
    }

    //output the response
    echo $response;
} else {
    echo 'Not found.';
}