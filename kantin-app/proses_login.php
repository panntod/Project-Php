<?php
if ($_POST) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (empty($email)) {
        echo "<script>alert('Email tidak boleh kosong');location.href='login.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
    } else {
        include "server.php";
        $qry_login = mysqli_query($conn, "select * from siswa where email = '" . $email . "' and password = '" . md5($password) . "'");

        if (mysqli_num_rows($qry_login) > 0) {
            $dt_login = mysqli_fetch_array($qry_login);

            if ($dt_login['role'] == 'admin') {
                session_start();
                $_SESSION['id_siswa'] = $dt_login['id_siswa'];
                $_SESSION['saldo_siswa'] = $dt_login['saldo_siswa'];
                $_SESSION['nama'] = $dt_login['nama'];
                $_SESSION['kelas'] = $dt_login['kelas'];
                $_SESSION['status_login'] = true;
                header("location: admin/home.php");
            } else if ($dt_login['role'] == 'siswa') {
                session_start();
                $_SESSION['id_siswa'] = $dt_login['id_siswa'];
                $_SESSION['saldo_siswa'] = $dt_login['saldo_siswa'];
                $_SESSION['nama'] = $dt_login['nama'];
                $_SESSION['kelas'] = $dt_login['kelas'];
                $_SESSION['status_login'] = true;
                header("location: home.php");
            } else {
                echo "<script>alert('Role tidak valid');location.href='login.php';</script>";
            }
        } else {
            echo "<script>alert('Email dan Password tidak benar');location.href='login.php';</script>";
        }
    }
}
?>