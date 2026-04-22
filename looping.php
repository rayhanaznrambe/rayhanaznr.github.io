<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Belajar PHP | Source Library</title>

<style>
@import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&family=Cinzel:wght@500;600&display=swap');

body{
    margin:0;
    font-family:"Outfit",sans-serif;
    background:linear-gradient(180deg,#faf6f0,#f3e9dd);
}

/* NAVBAR */
nav{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:15px 40px;
    background:#800000;
    color:#fff;
    border-bottom:5px solid #e6d5b8;
}

nav h1{
    font-family:"Cinzel",serif;
    cursor:pointer;
}

nav a{
    color:#fff;
    text-decoration:none;
    font-weight:600;
}

/* CONTAINER */
.container{
    max-width:1100px;
    margin:60px auto;
    background:#fff;
    padding:40px;
    border-radius:20px;
    box-shadow:0 15px 40px rgba(0,0,0,0.1);
}

/* TITLE */
h2{
    color:#800000;
    margin-bottom:25px;
    font-family:"Cinzel",serif;
}

/* GRID LOOP */
.grid{
    display:grid;
    grid-template-columns:repeat(auto-fill,minmax(140px,1fr));
    gap:12px;
}

/* ITEM */
.item{
    background:#faf6f0;
    padding:12px;
    border-radius:12px;
    text-align:center;
    font-size:14px;
    border:1px solid #e6d5b8;
    transition:0.25s;
}

/* HOVER EFFECT */
.item:hover{
    background:#800000;
    color:#fff;
    transform:translateY(-3px) scale(1.05);
    box-shadow:0 10px 20px rgba(0,0,0,0.2);
}

/* BACK BUTTON */
.back{
    display:inline-block;
    margin-bottom:20px;
    padding:8px 16px;
    background:#800000;
    color:#fff;
    border-radius:8px;
    text-decoration:none;
    font-size:14px;
}
</style>
</head>

<body>

<nav>
    <h1 onclick="window.location.href='index.html'">Source Library</h1>
    <a href="index.html">← Kembali</a>
</nav>

<div class="container">
    <h2>Belajar PHP - Looping 1000 Hari</h2>

    <a href="index.html" class="back">← Kembali ke Beranda</a>

    <div class="grid">
    <?php
    for ($i = 1; $i <= 1000; $i++) {
        echo "<div class='item'>Hari ke-$i</div>";
    }
    ?>
    </div>

</div>

</body>
</html>
