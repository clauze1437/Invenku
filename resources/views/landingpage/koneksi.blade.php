<?php
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=dbinventaris_gudang;host=localhost';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'Sukses Koneksi database';
    $dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, TRUE);
} catch (PDOException $e) {
    echo 'Terjadi kesalahan saat koneksi/query dgn sebab ' . $e->getMessage();
}
