<?php 
session_start();
    if($_POST){
        include "server.php";
        
        $qry_get_menu=mysqli_query($conn,"SELECT * FROM menu WHERE id_menu= ".$_GET['id_menu']);
        $dt_menu=mysqli_fetch_array($qry_get_menu);
        $_SESSION['cart'][]=array(
            'id_menu'=>$dt_menu['id_menu'],
            'nama_menu'=>$dt_menu['nama_menu'],
            'qty'=>$_POST['qty'],
            'harga'=>$dt_menu['harga']
        );
    }
    header('location: keranjang.php');
?>
