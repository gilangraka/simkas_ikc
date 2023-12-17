<?php
  require("../config.php");
  $db = new Database();
  session_start();
  $id_mahasiswa = $_SESSION['id_mahasiswa'];
  $query = "SELECT * FROM data_mahasiswa WHERE id_mahasiswa = '$id_mahasiswa'";
  $res = $db->jalankan_query($query);
  if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    $nama_mhs = $row['nama_mhs'];
    $status_bayar = $row['status_bayar'];
  }

  $query = "SELECT email FROM login_mhs WHERE id_mahasiswa = '$id_mahasiswa'";
  $res = $db->jalankan_query($query);
  if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    $email = $row['email'];
  }
  if (!isset($_SESSION['id_mahasiswa'])) {
      header("Location: ../login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="../../assets/img/apple-icon.png"
    />
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dashboard Page : Admin</title>
    <meta
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
      name="viewport"
    />
    <!--     Fonts and icons     -->
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200"
      rel="stylesheet"
    />
    <link
      href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <!-- CSS Files -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link
      href="../../assets/css/paper-dashboard.css?v=2.0.1"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css"
    />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../../assets/demo/demo.css" rel="stylesheet" />
  </head>

  <body class="">
      <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">
          <a href="#" class="simple-text logo-mini">
            <div class="logo-image-small">
              <img src="../../assets/img/logo-small.png" />
            </div>
            <!-- <p>CT</p> -->
          </a>
          <a href="#" class="simple-text logo-normal"> Creative Tim </a>
        </div>
        <div class="sidebar-wrapper">
          <ul class="nav">
            <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : ''; ?>">
              <a href="./dashboard.php">
                <i class="nc-icon nc-bank"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'user.php' ? 'active' : ''; ?>">
              <a href="./user.php">
                <i class="nc-icon nc-single-02"></i>
                <p>User Profile</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    <!--   Core JS Files   -->
    <script src="../../assets/js/core/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="../../assets/js/core/popper.min.js"></script>
    <script src="../../assets/js/core/bootstrap.min.js"></script>
    <script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="../../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script
      src="../../assets/js/paper-dashboard.min.js?v=2.0.1"
      type="text/javascript"
    ></script>
    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="../../assets/demo/demo.js"></script>
    <script>
      new DataTable("#example");
      $(document).ready(function () {
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initChartsPages();
      });
    </script>
  </body>
</html>
