<?php

echo "<pre>";

include "dbconnection.php";

//getting form input
$ID = $_GET['id']?? null;

if (!($ID)){

die('ID Required');
}

$name = $_GET['name']?? null;

if (!($name)){

die('Data Required');
}

$db = new Db();

if($db->update(' contact_info_2',$name,$ID )){
  echo "success";
}else{
  echo "fail";
}


/*
//specify the server name and here it is localhost
$server_name = "localhost";

//specify the username - here it is root
$user_name = "root";

//specify the password - it is empty
$password = "";

// Creating the connection by specifying the connection details
//$connection2 = mysqli_connect($server_name, $user_name, $password, "db2");

$connection2 = new mysqli($server_name, $user_name, $password, "db2");


//for db_2
$sql = "UPDATE contact_info_2 SET name='".$name."' WHERE id = $ID ";

if (mysqli_query($connection2, $sql)) {
 echo 'successfully updated';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($connection2);
}*/

?>