<?php
session_start(); 
if ($_POST) {
    $id_siswa = $_SESSION['id_siswa'];
    $saldo = $_POST['saldo'];
    if (empty($saldo)) {
        echo "<script>alert('saldo tidak boleh kosong');location.href='tambah_saldo.php';</script>";
    } else {
        include "server.php"; 
        $query = "UPDATE siswa SET saldo_siswa = saldo_siswa + $saldo WHERE id_siswa = $id_siswa";

        $insert = mysqli_query($conn, $query) or die(mysqli_error($conn));

        if ($insert) {
            echo "<script>alert('Sukses menambahkan saldo');location.href='home.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan saldo');location.href='tambah_saldo.php';</script>";
        }
    }
}
?>
