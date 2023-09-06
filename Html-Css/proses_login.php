<?php
include 'connect.php';

if($_POST){
    $email=$_POST['email'];
    $password=$_POST['password'];
    if(empty($email)){
        echo "<script>alert('Email tidak boleh kosong');location.href='login.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
    } else {
        include "connect.php";
        $qry_login=mysqli_query($conn,"select * from belajarphp where email = '".$email."' and password = '".$password."'");
        
        if(mysqli_num_rows($qry_login)>0){
            echo "<script>alert('Benar');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Email dan Password tidak benar');location.href='login.php';</script>";
        }
    }
}
?>
