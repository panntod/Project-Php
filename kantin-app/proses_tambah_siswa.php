<?php
if ($_POST) {
    $nama_siswa = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $email = $_POST['email'];
    $password = md5($_POST['password']); // Enkripsi password dengan md5()

    if (empty($nama_siswa)) {
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif (empty($kelas)) {
        echo "<script>alert('kelas tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif (empty($email)) {
        echo "<script>alert('email tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else {
        include "server.php";
        $insert = mysqli_query($conn, "INSERT INTO siswa (nama, kelas, email, password) VALUES ('$nama_siswa', '$kelas', '$email', '$password')") or die(mysqli_error($conn));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan siswa');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan siswa');location.href='login.php';</script>";
        }
    }
}
?>
