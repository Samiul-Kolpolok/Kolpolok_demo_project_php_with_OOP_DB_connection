<?php

include "dbconnection.php";

//getting form input
$ID = $_GET['id']?? null;

if (!($ID)){

    die('Data Required');
}

$db = new Db();

if($db->delete(' contact_info_2',$ID )){
  echo "success";
}else{
  echo "fail";
}

?>