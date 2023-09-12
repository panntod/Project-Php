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
            // Mengambil data saldo terbaru setelah diperbarui
            $query_saldo = "SELECT saldo_siswa FROM siswa WHERE id_siswa = $id_siswa";
            $result_saldo = mysqli_query($conn, $query_saldo);
            $row_saldo = mysqli_fetch_assoc($result_saldo);

            // Mengatur ulang session saldo_siswa dengan nilai terbaru
            $_SESSION['saldo_siswa'] = $row_saldo['saldo_siswa'];

            echo "<script>alert('Sukses menambahkan saldo');location.href='home.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan saldo');location.href='tambah_saldo.php';</script>";
        }
    }
}
?>

