<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hasil Kalkulator | Source Library</title>

<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&family=Cinzel:wght@500;600&display=swap" rel="stylesheet">

<style>
body{
    font-family:"Outfit", sans-serif;
    background: linear-gradient(180deg,#faf6f0,#f3e9dd);
    margin:0;
}

nav{
    background:#800000;
    color:white;
    padding:15px 30px;
    font-family:"Cinzel", serif;
    font-size:20px;
}

.container{
    max-width:500px;
    margin:80px auto;
    background:white;
    padding:35px;
    border-radius:20px;
    box-shadow:0 15px 40px rgba(0,0,0,0.15);
    border:2px solid #e6d5b8;
}

h2{
    text-align:center;
    color:#800000;
    font-family:"Cinzel", serif;
    margin-bottom:25px;
}

.result{
    background:#faf6f0;
    padding:20px;
    border-radius:12px;
    line-height:1.8;
    border-left:5px solid #800000;
}

.hasil{
    margin-top:20px;
    font-size:20px;
    font-weight:700;
    color:#800000;
}

.back{
    display:block;
    text-align:center;
    margin-top:20px;
    color:#800000;
    text-decoration:none;
}
</style>
</head>

<body>

<nav>Source Library - Hasil Kalkulator</nav>

<div class="container">

<h2>Hasil Perhitungan</h2>

<div class="result">

<?php
if (!isset($_POST['hitung'])) {
    echo "<script>window.location.href='kalkulator.php';</script>";
    exit;
}

$bil1 = $_POST['angka1'];
$bil2 = $_POST['angka2'];
$operasi = $_POST['operator'];

$hasil = 0;
$tanda = "";

if ($operasi == "tambah") {
    $hasil = $bil1 + $bil2;
    $tanda = "+";
} elseif ($operasi == "kurang") {
    $hasil = $bil1 - $bil2;
    $tanda = "-";
} elseif ($operasi == "kali") {
    $hasil = $bil1 * $bil2;
    $tanda = "x";
} elseif ($operasi == "bagi") {
    if ($bil2 != 0) {
        $hasil = $bil1 / $bil2;
        $tanda = "/";
    } else {
        $hasil = "Error (bagi 0)";
        $tanda = "/";
    }
}

echo "Bilangan 1 : $bil1 <br>";
echo "Bilangan 2 : $bil2 <br>";
echo "Operasi : " . ucfirst($operasi) . "<br>";

echo "<div class='hasil'>";
echo "Hasil: $bil1 $tanda $bil2 = $hasil";
echo "</div>";
?>

</div>

<a href="kalkulator.php" class="back">← Hitung Lagi</a>

</div>

</body>
</html>
