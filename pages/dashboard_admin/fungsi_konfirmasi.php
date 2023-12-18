<?php 
    require "../config.php";
    $db = new Database();

    $id_kas = $_GET['id_kas'];
    $id_mhs = $_GET['id_mhs'];
    
    $res = $db->jalankan_query("SELECT * FROM data_kas_masuk_keluar WHERE id_kas = '$id_kas'");
    if(mysqli_num_rows($res) > 0) {
        while ($d = mysqli_fetch_array($res)) {
            $status_kas = $d['status_kas'];
            $nominal = $d['nominal'];
        }
    }

    $status_kas = json_decode($status_kas, true);
    $status_kas["$id_mhs"] = 2;
    $data_encode = json_encode($status_kas);
    $db->jalankan_query("UPDATE data_kas_masuk_keluar SET status_kas = '$data_encode' WHERE id_kas = '$id_kas'");
    $db->jalankan_query("DELETE FROM konfirmasi_kas_masuk WHERE id_kas = '$id_kas' AND id_mhs = '$id_mhs'");
    
    $res = $db->jalankan_query("SELECT * FROM total_kas");
    if(mysqli_num_rows($res)) {
        while($d = mysqli_fetch_array($res)) {
            $kas = $d['jumlah_kas'];
        }
    }
    $kas_terbaru = $kas + $nominal;
    $db->jalankan_query("UPDATE total_kas SET jumlah_kas = '$kas_terbaru'");
    header("location: dashboard.php");
?>