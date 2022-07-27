
<?php
// LOCAL
// define('HOST', 'localhost');
// define('USER', 'root');
// define('PASS', '');
// define('KONEK', 'kanpa');

// PUBLIC
define('HOST','localhost');
define('USER','root');
define('PASS','kanpa2020');
define('KONEK', 'kanpa');

// Buat Koneksinya
$koneksi = new mysqli(HOST, USER, PASS, KONEK);
?>