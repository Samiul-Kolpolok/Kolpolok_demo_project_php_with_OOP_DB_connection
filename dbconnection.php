<?php
class Db{

    //properties
  private $server_name = 'localhost';
  private $user_name='root';
  private $password='';
  private $db='db2';
  private $dbconnect;

  function __construct() {
    $this->dbconnect = new mysqli($this->server_name,$this->user_name, $this->password,$this->db);
  }
   //function to get data in the UI 
  function GetContact($id = false){
    $cond = "";
    if($id) {
      $cond = " WHERE id='$id'";
    }

    $sql_Select="SELECT * from contact_info_2 $cond";
    $result = $this->dbconnect->query($sql_Select);
     
  
    if (mysqli_num_rows($result) > 0) { //This is the built in function
      // output data of each row
      ?>
      <table border="1">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Mobile</th>
        </tr>
      
     
      <?php
      while($row = mysqli_fetch_assoc($result)) {  //this is the built in function 
        ?>

        <tr>
        <td><?= $row["name"]?></td>
        <td><?= $row["email"]?></td>
        <td><?= $row["mobile"]?></td>
      
      </tr>
        <?php
         // echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. " -Mobile " . $row["mobile"]."<br>";
         // printf ("%s %s %s (%s)\n", $row["name"], $row["email"],$row["mobile"], $row["mobile"]);
      }
      ?>
       </table>
      <?php
    } else {
      echo ('nothing found');
    }
   // $row = $result->fetch_all(MYSQLI_ASSOC);  //To fetch assosiative array
   

 
    //print_r($row);
  }

  function ContactInsert($name, $email, $mobile, $message) {
    $response = false;

    $sql_Select="SELECT * from contact_info_2 WHERE email='$email'";
    $result = $this->dbconnect->query($sql_Select);
    if($result->num_rows>0) {
      echo ('already exists');
    }else {
      $sql = "INSERT INTO contact_info_2 (name, email, mobile, message) 
      values('$name', '$email', '$mobile', '$message')";
       if (mysqli_query($this->dbconnect,$sql)) {
        $response = true;
    } 
    };
     return $response;
  }

/*
  function Insert($table, $dataColumn, $values) {
    $response = false;
    $sql = "INSERT INTO $table ($dataColumn)values($values)"; //NEED TO UNDERSTAND

    if (mysqli_query($this->dbconnect,$sql)) {
        $response = true;
    } 
    return $response;
  }*/

  function Delete($table, $id){
    $response = false;
    $sql = "DELETE FROM $table WHERE id=$id";
    if (mysqli_query($this->dbconnect, $sql)) {
        $response = true;
       } 

       return $response;
  }

  function Update($table, $name, $id){
    $response=false;
    $sql = "UPDATE contact_info_2 SET name='".$name."' WHERE id = $id";
    if (mysqli_query($this->dbconnect, $sql)) {
      $response = true;
     } 
     return $response; 
  }

 function __destruct(){
  $this->dbconnect->close();
 }

}
?>


