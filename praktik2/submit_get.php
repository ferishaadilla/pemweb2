<?php
$namaLengkap= $_GET['nama_lengkap'];
$username = $_GET['user_name'];
$password = $_GET['password'];

echo "<h1>Selamat {$namaLengkap}, kamu sudah terdaftar</h1>";
echo "<h3>Username : {$username}</h3>";
echo "<h3>Password : {$password}</h3>";
