<?php
require_once('bukuTamu.php');
session_start();

if(!isset($_SESSION['bukutamu'])){
    $_SESSION['bukutamu'] = [];
}

if(isset($_POST['submit'])){
    $bukutamu = new BukuTamu();
    $bukutamu->timestamp = date('Y-m-d H:i:s');
    $bukutamu->fullname = $_POST['fullname'];
    $bukutamu->email = $_POST['email'];
    $bukutamu->message = $_POST['message'];

    array_push($_SESSION['bukutamu'], $bukutamu);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Daftar Kunjungan Tamu</title>
</head>
<body>
    <div class="container">
        <br><center><h4>Daftar Kunjungan Tamu</h4></center><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Timestamp</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['bukutamu'] as $bt): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($bt->timestamp);?></td>
                        <td><?php echo htmlspecialchars($bt->fullname);?></td>
                        <td><?php echo htmlspecialchars($bt->email);?></td>
                        <td><?php echo htmlspecialchars($bt->message);?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>