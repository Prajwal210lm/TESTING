<?php
include 'connect.php'; 
if(isset($_GET['deleteid'])) ///using get method we can access the variables from the url
{
    $id=$_GET['deleteid'];
    $sql="delete from students where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "deleted successfully" , commenting it out coz it will redirect us to new page which we dont want, so using header to pass location
        header('location:display.php');

    }

}



?>

