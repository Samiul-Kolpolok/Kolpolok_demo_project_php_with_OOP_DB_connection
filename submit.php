<?php

echo "<pre>";

include "dbconnection.php";

print_r($_POST);

//getting form input
$name = $_POST['name']?? null;
$email = $_POST['email']?? null;
$mobile = $_POST['mobile']??null;
$message = $_POST['message']??null;

if (!($name && $email && $mobile && $message)){

die('Data Required');
}

echo "</pre>";

$db = new Db();


if($db->contactinsert($name,$email,$mobile,$message)){
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

// Creating the connection by specifying the connection details procedural way
//$connection = mysqli_connect($server_name, $user_name, $password, "contact_db");
//$connection2 = mysqli_connect($server_name, $user_name, $password, "db2");

//creating the connection by specifying the connection details object oriented way
$connection=new mysqli($server_name, $user_name, $password, "contact_db");
$connection2 = new mysqli($server_name, $user_name, $password, "db2");*/

/*
class Dbconnection{
  //properties
  public $server_name;
  public $user_name;
  public $password;
  public $db;

  //Methods
  function set_servername($server_name) {
    $this->servername =$server_name;
  }
  function get_servername() {
    return $this->server_name;
  }
  function set_username($user_name) {
    $this->username =$user_name;
  }
  function get_username() {
    return $this->user_name;
  }
  function set_password($password) {
    $this->password = $password;
  }
  function get_password() {
    return $this->password;
  }
  function set_db($db) {
    $this->db = $db;
  }
  function get_db() {
    return $this->db;
  }
}

$connection2 = new Dbconnection();

$connection2->set_servername('localhost');
$connection2->set_username('root');
$connection2->set_password('"');
$connection2->set_db('db2');

echo '<pre>';
print_r ($connection2);
echo '</pre>';

if (!$connection2) {
  die("Failed ". mysqli_connect_error());
}else{
echo "Connection established successfully";
}

*/

/*

// Checking the  connection for contact_db
if (!$connection) {
  die("Failed ". mysqli_connect_error());
}

//checking the connection for db2

if (!$connection2) {
  die("Failed ". mysqli_connect_error());
}

//echo "Connection established successfully";

//static data inserting
// $sql = "INSERT INTO contact_info (name, email, mobile, message) 
// values('S. M. SAMIUL ALAM', 'abc@gmail.com',123,'I am sami') ";

//Dynamically data inserting using form 

$sql = "INSERT INTO contact_info (name, email, mobile, message) 
 values('$name', '$email', $mobile, '$message')";

//for db_1
if (mysqli_query($connection, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}


//for db_2
$sql = "INSERT INTO contact_info_2 (name, email, mobile, message) 
 values('$name', '$email', $mobile, '$message')";

if (mysqli_query($connection2,$sql)) {
  $last_id = $connection2->insert_id; //To get last input id
  echo "New record created successfully. Last inserted ID is: " . $last_id;;
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($connection2);
}*/

// $sql_query= mysqli_query($connection,$sql);

// var_dump($sql_query);

?>