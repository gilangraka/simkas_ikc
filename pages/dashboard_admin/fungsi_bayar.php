<?php 
    require "../config.php";
    $db = new Database();

    $id_kas = $_GET['id_kas'];
    $id_mhs = $_GET['id_mhs'];
    
    $res = $db->jalankan_query("SELECT * FROM data_kas_masuk_keluar WHERE id_kas = '$id_kas'");
    if(mysqli_num_rows($res) > 0) {
        while ($d = mysqli_fetch_array($res)) {
            $status_kas = $d['status_kas'];
        }
    }

    $query = "UPDATE INTO data_kas_masuk_keluar";
    $status_kas = json_decode($status_kas, true);
    $status_kas["$id_mhs"] = 1;
    $data_encode = json_encode($status_kas);

    $res = $db->jalankan_query("UPDATE data_kas_masuk_keluar SET status_kas = '$data_encode'");
    if($res) {
        echo "<script>Berhasil Melakukan Pembayaran</script>";
        header("Location: dashboard.php");
    }
?>