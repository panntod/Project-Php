<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200">
    <div class="container mx-auto mt-24 p-6 bg-white rounded-lg shadow-md max-w-xs">
        <h2 class="text-2xl font-semibold mb-4 text-center">Login</h2>
        <form action="proses_login.php" method="post">
            <label for="email" class="mb-2">Email:</label>
            <input type="text" id="email" name="email" autocomplete="off" required class="w-full px-3 py-2 border rounded-lg mb-3 pt-1" placeholder="Email">

            <label for="password" class="mb-2">Password:</label>
            <input type="password" id="password" name="password" required class="w-full px-3 py-2 border rounded-lg mb-6" placeholder="Password">

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Login</button>
        </form>
    </div>
</body>
</html>
