<?php
// $conn=mysqli_connect('sql.freedb.tech','freedb_pandhu','#v?2Xk8CyNBrDHz','freedb_laravel_project'); "Jika Ingin Menggunakan Cloud Data base"
$conn=mysqli_connect('localhost','root','','projek_laravel');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
