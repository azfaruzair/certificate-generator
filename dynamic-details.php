<?php
$id='';
if(isset($_GET["id"])){
  $id=$_GET["id"];
}
$servername = "localhost";
$username = "root";
$password = '';

$name="";
$date_issued="";
$image="";
$issue_id="";
$course_name="";

// Create connection
$conn = new mysqli('localhost','root','','form_oyesters');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
$sql = "SELECT * FROM `form_issuing` WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["id"]. " - Name: " . $row["issue_to"]. "<br>";
    $name=$row["issue_to"];
    $date_issued=$row["issue_date"];
    $start_date=$row["start_date"];
    $end_date=$row["end_date"];
    $issue_id=$row["id"];
    $course_name= $row["course_name"];
    
  }
} else {
  echo "0 results";
}
$conn->close();
?>