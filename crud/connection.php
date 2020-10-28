<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=pengelola","root","",[PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION]);

} catch (Exception $e) {
    echo $e->getMessage();
}

$daftar=$db->query("SELECT * FROM tiket");

$data_daftar=$daftar->fetchAll();

?>