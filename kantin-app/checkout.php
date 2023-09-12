<?php
session_start();
include "server.php";
$cart = $_SESSION['cart'];
if (count($cart) > 0) {
    mysqli_query($conn, "INSERT INTO pembayaran (id_siswa,tanggal_pembayaran) value('" . $_SESSION['id_siswa'] . "','" . date('Y-m-d') . "')");
    $id = mysqli_insert_id($conn);
    foreach ($cart as $key_produk => $val_produk) {
        mysqli_query($conn, "INSERT INTO detail_pembayaran (id_pembayaran, id_menu, id_warung, qty, total) value('" . $id . "','" . $val_produk['id_menu'] . "','" . $val_produk['id_warung'] . "','" . $val_produk['qty'] . "','" . $val_produk['total'] . "')");
    }
    unset($_SESSION['cart']);
    echo '<script>alert("Anda berhasil melakukan pembayaran");location.href="transaksi.php"</script>';
}
?>