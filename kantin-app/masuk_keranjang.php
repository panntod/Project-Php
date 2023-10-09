<?php
session_start();
if ($_POST) {
    include "server.php";

    $qry_get_menu = mysqli_query($conn, "SELECT * FROM menu JOIN warung ON menu.id_warung = warung.id_warung WHERE menu.id_menu = ".$_GET['id_menu']);
    $dt_menu = mysqli_fetch_array($qry_get_menu);
    $qty = $_POST['qty'];
    $harga = $dt_menu['harga'];
    $total = $qty * $harga;


    $_SESSION['cart'][] = array(
        'id_menu' => $dt_menu['id_menu'],
        'id_warung' => $dt_menu['id_warung'],
        'nama_warung' => $dt_menu['nama_warung'],
        'nama_menu' => $dt_menu['nama_menu'],
        'qty' => $_POST['qty'],
        'harga' => $dt_menu['harga'],
        'total' => $total
    );
}
header('location: home.php#services');
?>