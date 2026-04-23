<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit;
}

include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Anggota | Source Library</title>

<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&family=Cinzel:wght@500;600&display=swap" rel="stylesheet">

<style>
*{margin:0;padding:0;box-sizing:border-box}

body{
font-family:"Outfit",sans-serif;
background:linear-gradient(180deg,#faf6f0,#f3e9dd);
min-height:100vh;
}

/* NAVBAR */
nav{
background:linear-gradient(180deg,#800000,#6b0000);
color:#fff;
padding:15px 40px;
display:flex;
justify-content:space-between;
align-items:center;
box-shadow:0 5px 20px rgba(0,0,0,0.3);
}

nav h1{
font-family:"Cinzel",serif;
font-size:20px;
}

nav a{
color:#fff;
text-decoration:none;
font-weight:600;
margin-left:20px;
}

nav a:hover{
color:#e6d5b8;
}

/* CONTAINER */
.container{
display:flex;
justify-content:center;
align-items:center;
padding:60px 20px;
}

/* FORM BOX */
.form-box{
background:#fff;
padding:40px;
border-radius:20px;
width:100%;
max-width:450px;
box-shadow:0 20px 50px rgba(0,0,0,0.2);
border:2px solid #e6d5b8;
}

/* TITLE */
.form-box h2{
font-family:"Cinzel",serif;
color:#800000;
margin-bottom:25px;
text-align:center;
}

/* INPUT */
.input-group{
margin-bottom:20px;
}

.input-group label{
font-weight:600;
color:#800000;
font-size:14px;
}

.input-group input{
width:100%;
padding:12px;
margin-top:6px;
border-radius:10px;
border:1px solid #ccc;
outline:none;
transition:0.3s;
}

.input-group input:focus{
border-color:#800000;
box-shadow:0 0 8px rgba(128,0,0,0.3);
}

/* BUTTON */
.btn{
width:100%;
padding:12px;
border:none;
border-radius:12px;
background:linear-gradient(90deg,#800000,#a00000);
color:#fff;
font-weight:700;
cursor:pointer;
transition:0.3s;
}

.btn:hover{
transform:scale(1.05);
box-shadow:0 10px 25px rgba(128,0,0,0.4);
}

/* BACK */
.back{
display:block;
margin-top:20px;
text-align:center;
text-decoration:none;
color:#800000;
font-weight:600;
font-size:14px;
}

.msg{
margin-bottom:15px;
font-weight:600;
color:red;
text-align:center;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav>
    <h1>Source Library Admin</h1>
    <div>
        <a href="anggota.php">Data Anggota</a>
        <a href="logout.php">Logout</a>
    </div>
</nav>

<div class="container">

<div class="form-box">

<h2>Tambah Anggota</h2>

<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];

    if(empty($nama) || empty($email) || empty($no_hp)){
        echo "<div class='msg'>Semua data wajib diisi!</div>";
    } else {
        mysqli_query($conn, "INSERT INTO anggota VALUES(NULL,'$nama','$email','$no_hp')");
        header("Location: anggota.php");
        exit;
    }
}
?>

<form method="POST">

<div class="input-group">
<label>Nama</label>
<input type="text" name="nama" placeholder="Masukkan nama lengkap">
</div>

<div class="input-group">
<label>Email</label>
<input type="email" name="email" placeholder="Masukkan email">
</div>

<div class="input-group">
<label>No HP</label>
<input type="text" name="no_hp" placeholder="Masukkan nomor HP">
</div>

<button type="submit" name="simpan" class="btn">Simpan Data</button>

</form>

<a href="anggota.php" class="back">← Kembali ke Data Anggota</a>

</div>

</div>

</body>
</html>
