<?php
include 'db.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql=$conn->prepare("delete from user_info where id=?");
    $sql->bind_param('i',$id);
    $sql->execute();
    header('location:home.php');
}
?>