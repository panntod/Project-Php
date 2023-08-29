<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body class="container">
    <?php 
    include "server.php";
    $qry_get_siswa=mysqli_query($conn,"select * from siswa where id = '{$_GET['id']}'");
    $dt_siswa=mysqli_fetch_array($qry_get_siswa);
    ?>

    <h3>Edit Siswa</h3>
    <form action="proses_ubah_siswa.php" method="post">
        <input type="hidden" name="id" value="<?= $dt_siswa['id'] ?>">

        <br>nama siswa : 
        <input type="text" name="nama" value="<?=$dt_siswa['nama']?>" class="form-control">
        
        <br>Kelas: 
        <input type="text" name="kelas" value="<?=$dt_siswa['kelas']?>" class="form-control">
        
        <br>Email : 
        <input type="text" name="email" value="<?=$dt_siswa['email']?>" class="form-control">
        
        <br>Password : 
        <input type="password" name="password" value="" class="form-control">
        <input type="submit" name="simpan" value="Ubah Siswa" class="btn btn-primary" style="margin-top: 18px">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

