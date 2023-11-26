<?php
if ($_POST) {
    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];


    if (empty($nama_depan)) {
        echo "<script>alert('nama tidak boleh kosong');location.href='regristate.php';</script>";
    } elseif (empty($nama_belakang)) {
        echo "<script>alert('nama_belakang tidak boleh kosong');location.href='regristate.php';</script>";
    } elseif (empty($email)) {
        echo "<script>alert('email tidak boleh kosong');location.href='regristate.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('password tidak boleh kosong');location.href='regristate.php';</script>";
    } elseif (empty($tanggal_lahir)) {
        echo "<script>alert('tanggal lahir tidak boleh kosong');location.href='regristate.php';</script>";
    } elseif (empty($jenis_kelamin)) {
        echo "<script>alert('jenis kelamin tidak boleh kosong');location.href='regristate.php';</script>";
    } else {
        include "connect.php";
        $insert = mysqli_query($conn, "INSERT INTO belajarphp (id, nama_depan, nama_belakang, email, password, tanggal_lahir, jenis_kelamin) VALUES (null, '$nama_depan', '$nama_belakang', '$email', '$password', '$jenis_kelamin','$tanggal_lahir')") or die(mysqli_error($conn));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan');location.href='regristate.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan');location.href='regristate.php';</script>";
        }
    }
}
?>
