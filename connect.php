<?php

$con=new mysqli('localhost','root','','studentdetails');//last one is database

if(!$con){
    die(mysqli_error($con));
}
