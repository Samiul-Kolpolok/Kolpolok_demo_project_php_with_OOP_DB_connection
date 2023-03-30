<?php

include "dbconnection.php";



$db = new Db();

$contact=$db->GetContact($ID = $_GET['id']?? null);

var_dump($contact);


?>