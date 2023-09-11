<!DOCTYPE html>
<html>
<head>
    <link href="assets/css/main.css" rel="stylesheet">
    <?php include 'style.php'?>
    <title>Daftar Siswa</title>
  
</head>
<body class="container">
    <div style="padding: 20px; display: flex; justify-content: space-between; height:80px; margin-bottom:20px">
        
        <div class="section-header">
            <h2>Data Siswa</h2>
        </div>

        <div style="display: flex; align-items: center; gap: 10px;">
            <a href="tambah_siswa.php" class="btn tombol" style="background: #B4B4B4;">Daftar</a>
            <a href="login.php" class="btn tombol" style="background: var(--color-primary);">Login</a>
        </div>
    </div>

    <table class="table table-hover table-striped" style="height: 100%; padding: 20px; border-radius: 10px;box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.1);">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAMA SISWA</th>
                <th>KELAS</th>
                <th>EMAIL</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "server.php";
            $qry_siswa=mysqli_query($conn,"select * from siswa");
            $no=0;
            while($data_siswa=mysqli_fetch_array($qry_siswa)){
            $no++;?>
            <tr>
                <td><?=$data_siswa['id_siswa']?></td>
                <td><?=$data_siswa['nama']?></td>
                <td><?=$data_siswa['kelas']?></td> 
                <td><?=$data_siswa['email']?></td> 
                <td>
                    <a href="ubah_siswa.php?id_siswa=<?=$data_siswa['id_siswa']?>" class="btn btn-success tombol tombol-kecil">Ubah</a>
                    <a href="hapus.php?id_siswa=<?=$data_siswa['id_siswa']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger tombol tombol-kecil">Hapus</a>
                </td>
            </tr>
            <?php 
            }
            ?>
        </tbody>
        
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
