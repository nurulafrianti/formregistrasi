<?php
$hostmysql = "mysql.idhostinger.com";
$username = "u599878561_adm";
$password = "passwordsaya";
$database = "u599878561_mail";

$conn = @mysql_connect("$hostmysql","$username","$password");

if (!$conn) die ("Gagal Melakukan Koneksi");
mysql_select_db($database,$conn) or die ("Database Tidak Ditemukan di Server"); 
?>