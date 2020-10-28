<?php

function deletePenumpang($delete) {
    include 'connection.php';

    $sql = 'DELETE FROM tiket WHERE id_penumpang = ?';

    try {
        $result = $db->prepare($sql);
        $result->bindValue(1, $delete['id_penumpang'], PDO::PARAM_INT);
        $result->execute();
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    return true;
}

function comand($query)
{
    include 'connection.php';

    global $db;
    $result = $db->query($query);
    $rows=[];
    while($row=$result->fetch(PDO::FETCH_ASSOC)){
        $rows[]=$row;
    }
    return $rows;
}

function searching($keyword){

    $query="SELECT * FROM tiket WHERE nama_penumpang LIKE '%$keyword%' OR tiket_kelas LIKE '%$keyword%' OR tujuan LIKE '%$keyword%' OR harga_tiket LIKE '%$keyword%' OR tanggal LIKE '%$keyword%' ";
    return comand($query);

}



