<?php

include "connection.php";

$input=$db->exec("UPDATE tiket SET nama_penumpang='".$_POST['nama_penumpang']."',tiket_kelas='".$_POST['tiket_kelas']."',tujuan='".$_POST['tujuan']."',harga_tiket='".$_POST['harga_tiket']."',tanggal='".$_POST['tanggal']."'WHERE id_penumpang=".$_POST['id_penumpang']);

if($input)
{
    header("Location: ../data_penumpang.php");
} else {
    header('Location: ../data_penumpang.php');
}