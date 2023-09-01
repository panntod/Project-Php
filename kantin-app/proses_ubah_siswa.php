<?php
if($_POST){
    $id=$_POST['id'];
    $nama_siswa=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $email=$_POST['email'];
    $password = md5($_POST['password']); // Enkripsi password dengan md5()

    if(empty($nama_siswa)){
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='ubah_siswa.php';</script>";
    } else if(empty($kelas)){
        echo "<script>alert('kelas tidak boleh kosong');location.href='ubah_siswa.php';</script>";
    }else if(empty($email)){
        echo "<script>alert('email tidak boleh kosong');location.href='ubah_siswa.php';</script>";
    } else {
        include "server.php";
        if(empty($password)){
            $update=mysqli_query($conn,"UPDATE siswa SET nama= '$nama', kelas='$kelas', email= '$email', password= '$password' WHERE id = $id") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update siswa');location.href='ubah_siswa.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='ubah_siswa.php?id=".$id."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update siswa set nama ='$nama_siswa', kelas='$kelas', email ='$email',  password='$password' where id = '$id'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update siswa');location.href='ubah_siswa.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='ubah_siswa.php?id=".$id."';</script>";
            }
        }
        
    } 
}
?>
