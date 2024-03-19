<?php
include('dbcon2.php');
if(isset($_POST['addUser'])){
    $userName=$_POST['uName'];
    $userEmail=$_POST['uEmail'];
    $userPassword=$_POST['uPassword'];
    $query=$pdo->prepare("insert into users(name,email,password)values(:usName,:usEmail,:usPassword)");
    $query->bindParam('usName',$userName);
    $query->bindParam('usEmail',$userEmail);
    $query->bindParam('usPassword',$userPassword);
    $query->execute();
    echo "<script>alert('recorded successfully')
    location.assign('select.php');
    </script>";
}
//update users
if(isset($_POST['updateUser'])){
   $userId=$_GET['uid'];
    $userName=$_POST['uName'];
    $userEmail=$_POST['uEmail'];
    $userPassword=$_POST['uPassword'];
    $query=$pdo->prepare("update users set name=:usName,email=:usEmail,password=:usPassword where id=:usId");
    $query->bindParam('usId',$userId);
    $query->bindParam('usName',$userName);
    $query->bindParam('usEmail',$userEmail);
    $query->bindParam('usPassword',$userPassword);
    $query->execute();
    echo "<script>alert('updated successfully')
    location.assign('select.php');
    </script>";

}
//delete record
//delete record
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query=$pdo->prepare("delete from users where id= :id");
    $query->bindParam('id',$id);
    $query->execute();
    echo "<script>alert('record deletd succesfully')
        location.assign('select.php');
        </script>";
    
    }
?>