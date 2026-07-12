<?php
$sname="localhost";
$uname="root";
$upaswd="";
$dbname="j2_php";
$conn=new mysqli($sname,$uname,$upaswd,$dbname);
if(!$conn){
    echo"db not connected";
}
?>