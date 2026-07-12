<?php
include 'db.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql=$conn->prepare("select *from user_info where id=?");
    $sql->bind_param('i',$id);
    $sql->execute();
    $user=$sql->get_result()->fetch_assoc();
}
if($_SERVER['REQUEST_METHOD']==="POST"){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $salary=$_POST['salary'];
    $designation=$_POST['designation'];
    $sql=$conn->prepare("update user_info set name=?,age=?,salary=?,designation=? where id=?");
    $sql->bind_param('sidsi',$name,$age,$salary,$designation,$id);
    if($sql->execute()){
        header('location:home.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        name:
        <input type="text" name="name" value="<?= $user['name'];?>"><br>
age:
        <input type="number" name="age" value="<?=$user['age'];?>"><br>
        salary:
        <input type="double" name="salary" value="<?=$user['salary'];?>"><br>
       designation: 
        <input type="text" name="designation" value="<?=$user['designation'];?>"><br>
        <button>submit</button>
    </form>
</body>
</html>