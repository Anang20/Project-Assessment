<?php

include "connection.php";

$input=$db->exec("INSERT INTO tiket(nama_penumpang,tiket_kelas,tujuan,harga_tiket,tanggal) VALUES('".$_POST['nama_penumpang']."','".$_POST['tiket_kelas']."','".$_POST['tujuan']."','".$_POST['harga_tiket']."','".$_POST['tanggal']."')");

if($input)
{
    header("Location: ../data_penumpang.php");
}