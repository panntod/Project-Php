<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body class="container">
    <div style="padding: 20px; display: flex; justify-content: space-between;">
        <h3>Tampil Siswa</h3>
        <div style="display: flex; gap: 10px;">
            <a href="login.php" class="btn btn-secondary">Login</a>
            <a href="tambah_siswa.php" class="btn btn-primary">Daftar</a>
        </div>
    </div>

    <table class="table table-hover table-striped">
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
                <td><?=$data_siswa['id']?></td>
                <td><?=$data_siswa['nama']?></td>
                <td><?=$data_siswa['kelas']?></td> 
                <td><?=$data_siswa['email']?></td> 
                <td>
                    <a href="ubah_siswa.php?id=<?=$data_siswa['id']?>" class="btn btn-success">Ubah</a>
                     | 
                    <a href="hapus.php?id=<?=$data_siswa['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
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
