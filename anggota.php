<?php
session_start();

// CEK LOGIN
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
<title>Data Anggota | Source Library</title>

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
max-width:1100px;
margin:40px auto;
padding:20px;
}

/* HEADER */
.header{
display:flex;
justify-content:space-between;
align-items:center;
margin-bottom:20px;
}

.header h2{
font-family:"Cinzel",serif;
color:#800000;
}

/* BUTTON */
.btn{
padding:10px 20px;
border:none;
border-radius:10px;
cursor:pointer;
font-weight:600;
text-decoration:none;
display:inline-block;
}

.btn-add{
background:#800000;
color:#fff;
}

.btn-add:hover{
background:#a00000;
}

.btn-edit{
background:#e6d5b8;
color:#800000;
}

.btn-delete{
background:#800000;
color:#fff;
}

/* TABLE */
.table-box{
background:#fff;
border-radius:20px;
padding:20px;
box-shadow:0 10px 30px rgba(0,0,0,0.1);
overflow-x:auto;
}

table{
width:100%;
border-collapse:collapse;
}

th{
background:#800000;
color:#fff;
padding:12px;
text-align:left;
}

td{
padding:12px;
border-bottom:1px solid #eee;
}

tr:hover{
background:#faf6f0;
}

/* ACTION BUTTON */
.action a{
margin-right:10px;
font-size:13px;
padding:6px 12px;
border-radius:8px;
text-decoration:none;
}

.edit{
background:#e6d5b8;
color:#800000;
}

.hapus{
background:#800000;
color:#fff;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav>
    <h1>Source Library Admin</h1>
    <div>
        <a href="https://rayhanaznrambe.github.io/">Back to Home</a>
    </div>
</nav>

<div class="container">

<div class="header">
    <h2>Data Anggota</h2>
    <a href="tambah.php" class="btn btn-add">+ Tambah Anggota</a>
</div>

<div class="table-box">
<table>
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Email</th>
    <th>No HP</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;
$data = mysqli_query($conn, "SELECT * FROM anggota");

while($row = mysqli_fetch_assoc($data)){
?>

<tr>
    <td><?= $no++ ?></td>
    <td><?= $row['nama'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['no_hp'] ?></td>
    <td class="action">
        <a href="edit.php?id=<?= $row['id'] ?>" class="edit">Edit</a>
        <a href="hapus.php?id=<?= $row['id'] ?>" class="hapus" onclick="return confirm('Yakin hapus data?')">Hapus</a>
    </td>
</tr>

<?php } ?>

</table>
</div>

</div>

</body>
</html>
