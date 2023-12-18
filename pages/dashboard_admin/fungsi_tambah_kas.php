<?php 
    require "../config.php";
    $db = new Database();
    
    $deskripsi = $_POST['deskripsi'];
    $nominal = $_POST['nominal'];
    $json = '{"33422206":0, "33422208":0, "33422212":0, "33422215":0, "33422221":0, }';
    json_encode($json);
    $tanggal_masuk = date("Y-m-d");
    $res = $db->jalankan_query("INSERT INTO data_kas_masuk_keluar VALUES('', '$tanggal_masuk', '$deskripsi', '$nominal', '$json', '0')");
    var_dump($res);
    
?>