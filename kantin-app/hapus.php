<?php 
    if($_GET['id']){
        include "server.php";
        $qry_hapus=mysqli_query($conn,"delete from siswa where id='".$_GET['id']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus siswa');location.href='tampil_siswa.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus siswa');location.href='tampil_siswa.php';</script>";
        }
    }
?>