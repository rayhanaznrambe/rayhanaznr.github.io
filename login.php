<?php 
session_start();
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Admin | Source Library</title>

<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&family=Cinzel:wght@500;600&display=swap" rel="stylesheet">

<style>
*{margin:0;padding:0;box-sizing:border-box}

body{
font-family:"Outfit",sans-serif;
background:linear-gradient(180deg,#faf6f0,#f3e9dd);
min-height:100vh;
display:flex;
align-items:center;
justify-content:center;
}

/* CARD LOGIN */
.login-box{
background:#fff;
padding:40px;
border-radius:20px;
width:100%;
max-width:400px;
box-shadow:0 20px 40px rgba(0,0,0,0.2);
border:2px solid #e6d5b8;
text-align:center;
}

/* TITLE */
.login-box h2{
font-family:"Cinzel",serif;
color:#800000;
margin-bottom:10px;
}

.login-box p{
color:#666;
font-size:14px;
margin-bottom:25px;
}

/* INPUT */
.input-group{
margin-bottom:20px;
text-align:left;
}

.input-group label{
font-weight:600;
color:#800000;
font-size:14px;
}

.input-group input{
width:100%;
padding:12px;
margin-top:5px;
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
button{
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

button:hover{
transform:scale(1.05);
box-shadow:0 10px 25px rgba(128,0,0,0.4);
}

/* MESSAGE */
.msg{
margin-top:15px;
font-weight:600;
}

.error{color:red;}
.success{color:green;}

/* BACK LINK */
.back{
display:block;
margin-top:20px;
text-decoration:none;
color:#800000;
font-weight:600;
font-size:13px;
}
</style>
</head>

<body>

<div class="login-box">
<h2>Admin Login</h2>
<p>Masuk untuk mengelola Source Library</p>

<form method="POST">
    
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username">
    </div>

    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
    </div>

    <button type="submit" name="login">Login</button>

</form>

<?php
if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if(empty($user) || empty($pass)){
        echo "<p class='msg error'>Input tidak lengkap!</p>";
    } else {
        $query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$user' AND password='$pass'");

        if(mysqli_num_rows($query) > 0){

            // SIMPAN LOGIN
            $_SESSION['admin'] = $user;

            // PINDAH KE HALAMAN ADMIN
            header("Location: anggota.php");
            exit;

        } else {
            echo "<p class='msg error'>Username atau password salah!</p>";
        }
    }
}
?>

<a href="https://rayhanaznrambe.github.io/">Back to Home</a>

</div>

</body>
</html>
