<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Belajar PHP | Source Library</title>

<style>
body{
    font-family: "Outfit", sans-serif;
    background: linear-gradient(180deg,#faf6f0,#f3e9dd);
    margin:0;
}

/* NAVBAR */
nav{
    padding:15px 40px;
    background:#800000;
    color:white;
    font-weight:bold;
}

/* CONTAINER */
.container{
    max-width:900px;
    margin:60px auto;
    background:white;
    padding:40px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,0.1);
}

/* TITLE */
h2{
    color:#800000;
    margin-bottom:20px;
}

/* LOOP RESULT */
.item{
    padding:10px;
    border-bottom:1px solid #eee;
}
</style>

</head>
<body>

<nav>
    Source Library - Belajar PHP
</nav>

<div class="container">
    <h2>Looping PHP (For Loop)</h2>

    <?php
    for ($i = 1; $i <= 50; $i++) {
        echo "<div class='item'>Hari ke-$i belajar PHP</div>";
    }
    ?>

</div>

</body>
</html>
