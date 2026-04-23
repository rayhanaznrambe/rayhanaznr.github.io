<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kalkulator | Source Library</title>

<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&family=Cinzel:wght@500;600&display=swap" rel="stylesheet">

<style>
body{
    font-family:"Outfit", sans-serif;
    background: linear-gradient(180deg,#faf6f0,#f3e9dd);
    margin:0;
}

/* NAVBAR SIMPLE */
nav{
    background:#800000;
    color:white;
    padding:15px 30px;
    font-family:"Cinzel", serif;
    font-size:20px;
}

/* CONTAINER */
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

/* FORM */
label{
    font-weight:600;
    color:#444;
}

input, select{
    width:100%;
    padding:10px;
    margin-top:5px;
    margin-bottom:15px;
    border-radius:10px;
    border:1px solid #ccc;
}

/* BUTTON */
button{
    width:100%;
    padding:12px;
    border:none;
    border-radius:12px;
    background:linear-gradient(90deg,#800000,#a00000);
    color:white;
    font-weight:700;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    transform:scale(1.05);
    box-shadow:0 10px 20px rgba(128,0,0,0.3);
}

/* BACK */
.back{
    display:block;
    text-align:center;
    margin-top:15px;
    color:#800000;
    text-decoration:none;
}
</style>
</head>

<body>

<nav>Source Library - Kalkulator PHP</nav>

<div class="container">
<h2>Kalkulator Sederhana</h2>

<form action="kalkulator-hasil.php" method="POST">

<label>Bilangan 1</label>
<input type="number" name="angka1" required>

<label>Bilangan 2</label>
<input type="number" name="angka2" required>

<label>Operasi</label>
<select name="operator">
    <option value="tambah">Tambah (+)</option>
    <option value="kurang">Kurang (-)</option>
    <option value="kali">Kali (x)</option>
    <option value="bagi">Bagi (/)</option>
</select>

<button type="submit" name="hitung">Hitung Sekarang</button>

</form>

<a href="index.html" class="back">← Kembali ke Beranda</a>

</div>

</body>
</html>
