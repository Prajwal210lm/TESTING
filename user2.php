<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentdetails";

$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
else echo "connection established";
if(isset($_POST['submit'])){
//    $studentname=$_POST[studentname];
//    $rollnumber=$_POST['rollnumber'];
//    $department=$_POST['department'];
//    $hostel=$_POST['hostel'];
echo "Reached here";

$sql = "INSERT INTO students (studentname, rollnumber, department, hostel)
VALUES ('$_POST[studentname]', '$_POST[rollnumber]', '$_POST[department]','$_POST[hostel]')";

if ($con->query($sql)) {
  echo "Data inserted successfully";
} 
else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
}
else {
    echo "reached else";
}
$con->close();
?>