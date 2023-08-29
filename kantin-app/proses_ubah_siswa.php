<?php
if($_POST){
    $id=$_POST['id'];
    $nama_siswa=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    if(empty($nama_siswa)){
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='tampil_siswa.php';</script>";
    } else if(empty($kelas)){
        echo "<script>alert('kelas tidak boleh kosong');location.href='tampil_siswa.php';</script>";
    }else if(empty($email)){
        echo "<script>alert('email tidak boleh kosong');location.href='tampil_siswa.php';</script>";
    } else {
        include "server.php";
        if(empty($password)){
            $update=mysqli_query($conn,"update siswa set nama ='{$nama_siswa}', kelas='{$kelas}', email ='{$email}'  where id = '{$id}' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update siswa');location.href='tampil_siswa.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='ubah_siswa.php?id=".$id."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update siswa set nama ='{$nama_siswa}', kelas='{$kelas}', email ='{$email}',  password='{md5($password)}' where id = '{$id}'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update siswa');location.href='tampil_siswa.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='ubah_siswa.php?id=".$id."';</script>";
            }
        }
        
    } 
}
?>
