<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Penyewaan Hotel</title>
</head>

<body>
    <link rel="stylesheet" href="style9.css">
    <h1>Form Registrasi Penyewaan Hotel</h1>
    <form action="proses4.php" method="POST">
        <label for="name">nama :</label>
        <input type="text" id="name" name="name" required>

        <label for="username">username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">password:</label>
        <input type="password" id="password" name="password" required>

        <label for="level">level:</label>
        <select id="level" name="level" required>
            <option value="admin">Admin</option>
            <option value="staff">Staff</option>
            <option value="guest">Guest</option>
        </select>

        <button type="submit">Daftar</button>
    </form>
</body>

</html>