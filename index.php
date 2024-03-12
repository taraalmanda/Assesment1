<header>
    <nav>
        <a id="input" href="transaksi.php">Input Transaksi</a>
        <a id="history" href="history.php">History Transaksi</a>
    </nav>
</header>

<?php
if(isset($_POST['btnSubmit'])){
    $userName = $_POST["userName"];
    $password = $_POST["password"];
    echo "Welcome $userName<br>";
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKO SUMBER BERKAH</title>
</head>
<body>
    <form action="" method="post">
        <h2> Login </h2>
        User Name: <input type="text" name="userName"><br>
        Password: <input type="password" name="password"><br>
        <input name="btnSubmit" type="submit">
</form>
</body>
</html>
<?php
}
?>