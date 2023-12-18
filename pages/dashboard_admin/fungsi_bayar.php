<?php 
    $id_kas = $_GET['id_kas'];
    $id_mhs = $_GET['id_mhs'];
    $jsonDecode['$id_mhs'] = 1;
    
    // Set JSON
    $query = "UPDATE data_kas_masuk_keluar SET status_kas = '$encode' WHERE id_kas = '$id_kas'";
    $db->jalankan_query($query);
    $encode = json_encode($jsonDecode);
?>