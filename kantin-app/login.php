<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <?php include 'style.php'?>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center">LOGIN KANTIN</h3>
                        <form action="proses_login.php" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username:</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="text-center">
                                <input type="submit" name="login" class="btn btn-success" value="LOGIN">
                                <a href="tambah_siswa.php" class="btn btn-secondary">DAFTAR</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'scripts.php'?>
</body>
</html>
