<?php

$host='localhost';
$user='root';
$pass='';
$namadb='unique_silver';
mysql_connect($host,$user,$pass) or die ('Koneksi Gagal');
mysql_select_db($namadb) or die ('Database tidak ditemukan');

/*mysql_connect(
  $server = getenv('MYSQL_DB_HOST'),
  $username = getenv('MYSQL_USERNAME'),
  $password = getenv('MYSQL_PASSWORD'));
mysql_select_db(getenv('MYSQL_DB_NAME'));*/

?>