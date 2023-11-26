<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <!-- Tambahkan link ke Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto mt-10 bg-white p-6 rounded-lg shadow-lg" style="width: 600px">
        <h2 class="text-2xl font-semibold mb-4 text-center">Registrasi</h2>
        <form action="proses_regristate.php" method="post">
            <div class="block flex">
                <div class="w-full mb-4 pr-3">
                    <label for="nama_depan" class="block text-gray-600">Nama Depan:</label>
                    <input type="text" id="nama_depan" name="nama_depan"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" autocomplete="off" placeholder="Nama Depan" required>
                </div>

                <div class="w-full mb-4">
                    <label for="nama_belakang" class="block text-gray-600">Nama Belakang:</label>
                    <input type="text" id="nama_belakang" name="nama_belakang"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" autocomplete="off" placeholder="Nama Belakang" required>
                </div>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-600">Email:</label>
                <input type="text" id="email" name="email"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" autocomplete="off" placeholder="Email"  required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-600">Password:</label>
                <input type="password" id="password" name="password"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Password"required>
            </div>

            <div class="mb-4">
                <label for="tanggal_lahir" class="block text-gray-600">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" placeholder="tanggal/ bulan/ tahun" required>
            </div>


            <!-- ERROR -->
            <!-- <div class="mb-4">
                <label for="tanggal_lahir" class="block text-gray-600">Tanggal Lahir:</label>
                <div class="flex w-full max-w-xl">
                    Bagian Tanggal
                    <div class="w-1/3 pr-2">
                        <input type="date" id="tanggal" name="tanggal"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                            placeholder="Tanggal" required>
                    </div>
                    Bagian Bulan
                    <div class="w-1/3 px-2">
                        <input type="date" id="bulan" name="bulan"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                            placeholder="Bulan" required>
                    </div>
                    Bagian Tahun
                    <div class="w-1/3 pl-2">
                        <input type="date" id="tahun" name="tahun"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                            placeholder="Tahun" required>
                    </div>
                </div>
            </div> -->


            <div class="mb-4">
                <label class="block text-gray-600">Jenis Kelamin:</label>
                <div class="mt-2 w-full flex justify-between">
                    <div>
                        <input type="radio" id="jenis_kelamin_laki" name="jenis_kelamin" value="Laki-laki" class="mr-2"
                            required>
                        <label for="jenis_kelamin_laki" class="mr-4">Laki-laki</label>
                    </div>

                    <div>
                        <input type="radio" id="jenis_kelamin_perempuan" name="jenis_kelamin" value="Perempuan"
                            class="mr-2" required>
                        <label for="jenis_kelamin_perempuan" class="mr-4">Perempuan</label>
                    </div>

                    <div>
                        <input type="radio" id="jenis_kelamin_perempuan" name="jenis_kelamin" value="khusus"
                            class="mr-2" required>
                        <label for="jenis_kelamin_perempuan" class="mr-4">Khusus</label>
                    </div>
                </div>
            </div>

            <div class="mt-4 flex justify-center items-center">
                <input type="submit" value="Daftar"
                    class="bg-blue-500 text-white px-16 py-2 rounded-lg hover:bg-blue-700 cursor-pointer ">
            </div>
        </form>
    </div>
</body>

</html>