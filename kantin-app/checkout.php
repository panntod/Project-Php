<?php
session_start();
include "server.php";

// Ambil saldo siswa saat ini dari database
$idSiswa = $_SESSION['id_siswa'];
$querySaldoSiswa = mysqli_query($conn, "SELECT saldo_siswa FROM siswa WHERE id_siswa = '$idSiswa'");
$dtSaldoSiswa = mysqli_fetch_assoc($querySaldoSiswa);
$saldoSiswa = $dtSaldoSiswa['saldo_siswa'];

$cart = $_SESSION['cart'];
$totalBelanja = 0;

// Hitung total belanja dari keranjang
foreach ($cart as $val_produk) {
    $totalBelanja += $val_produk['total'];
}

// Periksa apakah saldo mencukupi
if ($saldoSiswa >= $totalBelanja) {
    // Kurangkan total pembayaran dari saldo siswa
    $saldoSiswa -= $totalBelanja;

    // Simpan saldo yang diperbarui ke database
    $updateSaldoQuery = mysqli_query($conn, "UPDATE siswa SET saldo_siswa = '$saldoSiswa' WHERE id_siswa = '$idSiswa'");
    $_SESSION['saldo_siswa'] =$saldoSiswa;

    if ($updateSaldoQuery) {
        // Jika saldo telah diperbarui, lakukan proses checkout
        mysqli_query($conn, "INSERT INTO pembayaran (id_siswa, tanggal_pembayaran) VALUES ('$idSiswa', '" . date('Y-m-d') . "')");
        $id = mysqli_insert_id($conn);
        
        foreach ($cart as $key_produk => $val_produk) {
            mysqli_query($conn, "INSERT INTO detail_pembayaran (id_pembayaran, id_menu, id_warung, qty, total) VALUES ('$id', '" . $val_produk['id_menu'] . "', '" . $val_produk['id_warung'] . "', '" . $val_produk['qty'] . "', '" . $val_produk['total'] . "')");
        }
        
        // Hapus keranjang setelah checkout berhasil
        unset($_SESSION['cart']);
        
        echo '<script>alert("Anda berhasil melakukan pembayaran");location.href="transaksi.php"</script>';
    } else {
        echo '<script>alert("Gagal mengurangkan saldo siswa");location.href="keranjang.php"</script>';
    }
} else {
    echo '<script>alert("Saldo siswa tidak mencukupi untuk pembayaran ini");location.href="keranjang.php"</script>';
}
?>
