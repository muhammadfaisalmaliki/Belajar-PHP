<!DOCTYPE html>
<html>
<head>
<title>Membuat halaman web Dinamis Dengan PHP</title>
<link rel="stylesheet" type="text/css"  href="style.css">
<script type="text/javascript" src= "jquery.js">

</script>
</head>
<body>
<header>
    <h1 class="judul">WWW.MALASCODING.COM</h1>
    <h3 class="deskripsi">Membuat Halaman Web Dinamis Dengan PHP</h3>
</header>

<div class="menu">
    <ul>
        <li><a href="index.php?page=home">HOME</a></li>
        <li><a href="index.php?page=tentang">TENTANG</a></li>
        <li><a href="index.php?page=tutorial">TUTORIAL</a></li>
    </ul>
</div>

<div class="badan">
<?php
if(isset($_GET['page'])) {
$page = $_GET['page'];

switch ($page) {
    case 'home' :
        include "home.php";
        break;
    case 'tentang' :
        include "tentang.php";
        break;
    case 'tutorial' :
        include "tutorial.php";
        break;
    default :
        echo "<center><h3>Maaf, halaman tidak di temukan !<h3><center>";
        break;
    } 
    }else {
        // include "halaman/home.php";
    }

?>
</div>


</body>
</html>