<?php 
    require "../config.php";
    $db = new Database();
    
    if(isset($_POST['submit'])) {
        $deskripsi = $_POST['deskripsi'];
        $nominal = $_POST['nominal'];
        $json = '{"33422206":0, "33422208":0, "33422212":0, "33422215":0, "33422221":0, }';
        json_encode($json);
        $tanggal_masuk = date("Y-m-d");
        $db->jalankan_query("INSERT INTO data_kas_masuk_keluar VALUES(NULL, '$tanggal_masuk', '$deskripsi', '$nominal', '{\"33422206\":0,\"33422208\":1,\"33422212\":0,\"33422215\":0,\"33422221\":0}', '0')");
        header("location: dashboard.php");
    }
?>