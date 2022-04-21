<?php
$link=  mysqli_connect("localhost", "root", "", "afyacheck");
$id=$_GET['id'];
$query="delete from patientdetails where id='$id'";
$result=  mysqli_query($link, $query);
if ($result) {
     header("location:adminselect.php");
}  else {
    echo mysqli_error($link);
}
