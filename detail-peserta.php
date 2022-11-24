<?php
    include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="detail-peserta.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Peserta | IT Tomorrow</title>
</head>
<body>
    <div class="header">
        <a href="index.html"><img src="logo-ittomorrow.png" style="width: 100px; height: 100px;"></a>
        <div class="navBar">
            <h3><a href="#" style="color: aliceblue;">Profile</a></h3>
            <h3><a href="dashboard-admin.html" style="color: aliceblue;">Dashboard</a></h3>
        </div>
    </div>
    <h1><?php $_GET["namalomba"]; ?></h1>
    <div id="peserta">
        <h3>Detail Peserta</h3>
        <h5>Nama Peserta: <?php $_GET["namapeserta"]; ?></h5>
        <h5>Asal Institusi: <?php $_GET["institusipeserta"]; ?></h5>
        <h5>Email Tim: <?php $_GET["email"]; ?></h5>
        <h5>Link Karya: <?php $_GET["linkkarya"]; ?></h5>
    </div>
</body>
</html>