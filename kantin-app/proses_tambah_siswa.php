<?php
if($_POST){
    $nama_siswa=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $email=$_POST['email'];
    $password= $_POST['password'];
    if(empty($nama_siswa)){
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($kelas)){
        echo "<script>alert('kelas tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($email)){
        echo "<script>alert('email tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else {
        include "server.php";
        $insert=mysqli_query($conn,"insert into siswa (nama, kelas, email, password) value ('$nama_siswa','$kelas','$email','md5($password)')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan siswa');location.href='tambah_siswa.php';</script>";
            header('location: tampil_siswa.php');
        } else {
            echo "<script>alert('Gagal menambahkan siswa');location.href='tambah_siswa.php';</script>";
        }
    }

}
?>
