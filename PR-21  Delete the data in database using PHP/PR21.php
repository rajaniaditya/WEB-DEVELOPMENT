<?php
error_reporting(0);
include"connection.inc";
$rollno=$_GET['rn'];
$qry = "delete from studentdetails where eno = $rollno";
$data = mysqli_query($conn,$qry);
echo $data;
if($data=0)
echo "data not deleted!";
else 
echo "data deleted sucessfully!";
?>