<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Header
    echo '<h1>My Navbar</h1>';
// Navbar
    echo '<a href="?haha=home">HOME</a><br>';
    echo '<a href="?haha=tentang">TENTANG</a><br>';
    echo '<a href="?haha=tutorial">TUTORIAL</a><br>';
// Main
    $haha = $_GET['haha'];
    switch ($haha) {
        case 'home';
            $tampil = 'HOME';
            break;
        case 'tentang';
            $tampil = 'Tentang';
            break;
        case 'tutorial';
            $tampil = 'Tutorial';
            break;
        default :
            $tampil = "Maaf";
            break;
    }
// Footer
    echo "<h1>Footer</h1>";
?>
</body>
</html>