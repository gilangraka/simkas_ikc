<?php
  require("../config.php");
  session_start();
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
    <title>Dashboard Page</title>
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
    <div class="wrapper">
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
            <li class="active">
              <a href="./dashboard.php">
                <i class="nc-icon nc-bank"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li>
              <a href="./user.php">
                <i class="nc-icon nc-single-02"></i>
                <p>User Profile</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="main-panel">
        <!-- Navbar -->
        <nav
          class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent"
        >
          <div class="container-fluid">
            <div class="navbar-wrapper">
              <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                  <span class="navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </button>
              </div>
              <a class="navbar-brand" href="javascript:;">Dashboard Page</a>
            </div>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navigation"
              aria-controls="navigation-index"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div
              class="collapse navbar-collapse justify-content-end"
              id="navigation"
            >
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a
                    class="nav-link btn-rotate"
                    onclick="confirm('Yakin ingin logout?')"
                    href="logout.php"
                    style="display: flex; gap: 10px"
                  >
                    <i class="nc-icon nc-button-power"></i>
                    <p>
                      <span class="d-md-block">LOGOUT</span>
                    </p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats" style="padding-bottom: 15px">
                <div class="card-body">
                  <div class="row">
                    <div class="col-5 col-md-4">
                      <div class="icon-big text-center icon-warning">
                        <i class="nc-icon nc-paper text-warning"></i>
                      </div>
                    </div>
                    <div class="col-7 col-md-8">
                      <div class="numbers">
                        <p class="card-category">Total Saldo Kas Kelas</p>
                        <p class="card-title">Rp 625000</p>
                        <p></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <hr />
                  <div class="stats">
                    <i class="fa fa-refresh"></i>
                    Update Terbaru
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col-5 col-md-4">
                      <div class="icon-big text-center icon-warning">
                        <i class="nc-icon nc-money-coins text-success"></i>
                      </div>
                    </div>
                    <div class="col-7 col-md-8">
                      <div class="numbers">
                        <p class="card-category">Tagihan Kas Bulanan</p>
                        <p class="card-title">Rp 20000</p>
                        <p></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <hr />
                  <div
                    class="stats d-flex align-items-center justify-content-around"
                  >
                    <div class="d-flex">
                      <i class="fa fa-calendar-o"></i>
                      sampai 30 Desember 2023
                    </div>
                    <button class="btn btn-primary btn-round">
                      Bayar Sekarang
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div style="margin-top: 2%"></div>

          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <h4>Data Kas User</h4>

              <table
                id="example"
                class="table table-striped"
                style="width: 100%"
              >
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>ID KAS</th>
                    <th>KETERANGAN</th>
                    <th>NOMINAL</th>
                    <th>STATUS BAYAR</th>
                    <th>TANGGAL BAYAR</th>
                    <th>METODE PEMBAYARAN</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>123213124</td>
                    <td>Kas Bulan Desember</td>
                    <td>20000</td>
                    <td>Menunggu Konfirmasi</td>
                    <td>12-12-2023</td>
                    <td>Tunai</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>123213124</td>
                    <td>Kas Bulan Desember</td>
                    <td>20000</td>
                    <td>Menunggu Konfirmasi</td>
                    <td>12-12-2023</td>
                    <td>Tunai</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>123213124</td>
                    <td>Kas Bulan Desember</td>
                    <td>20000</td>
                    <td>Menunggu Konfirmasi</td>
                    <td>12-12-2023</td>
                    <td>Tunai</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>123213124</td>
                    <td>Kas Bulan Desember</td>
                    <td>20000</td>
                    <td>Menunggu Konfirmasi</td>
                    <td>12-12-2023</td>
                    <td>Tunai</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>123213124</td>
                    <td>Kas Bulan Desember</td>
                    <td>20000</td>
                    <td>Menunggu Konfirmasi</td>
                    <td>12-12-2023</td>
                    <td>Tunai</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>123213124</td>
                    <td>Kas Bulan Desember</td>
                    <td>20000</td>
                    <td>Menunggu Konfirmasi</td>
                    <td>12-12-2023</td>
                    <td>Tunai</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>123213124</td>
                    <td>Kas Bulan Desember</td>
                    <td>20000</td>
                    <td>Menunggu Konfirmasi</td>
                    <td>12-12-2023</td>
                    <td>Tunai</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>123213124</td>
                    <td>Kas Bulan Desember</td>
                    <td>20000</td>
                    <td>Menunggu Konfirmasi</td>
                    <td>12-12-2023</td>
                    <td>Tunai</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>123213124</td>
                    <td>Kas Bulan Desember</td>
                    <td>20000</td>
                    <td>Menunggu Konfirmasi</td>
                    <td>12-12-2023</td>
                    <td>Tunai</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>123213124</td>
                    <td>Kas Bulan Desember</td>
                    <td>20000</td>
                    <td>Menunggu Konfirmasi</td>
                    <td>12-12-2023</td>
                    <td>Tunai</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>123213124</td>
                    <td>Kas Bulan Desember</td>
                    <td>20000</td>
                    <td>Menunggu Konfirmasi</td>
                    <td>12-12-2023</td>
                    <td>Tunai</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>123213124</td>
                    <td>Kas Bulan Desember</td>
                    <td>20000</td>
                    <td>Menunggu Konfirmasi</td>
                    <td>12-12-2023</td>
                    <td>Tunai</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>123213124</td>
                    <td>Kas Bulan Desember</td>
                    <td>20000</td>
                    <td>Menunggu Konfirmasi</td>
                    <td>12-12-2023</td>
                    <td>Tunai</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>123213124</td>
                    <td>Kas Bulan Desember</td>
                    <td>20000</td>
                    <td>Menunggu Konfirmasi</td>
                    <td>12-12-2023</td>
                    <td>Tunai</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>123213124</td>
                    <td>Kas Bulan Desember</td>
                    <td>20000</td>
                    <td>Menunggu Konfirmasi</td>
                    <td>12-12-2023</td>
                    <td>Tunai</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>123213124</td>
                    <td>Kas Bulan Desember</td>
                    <td>20000</td>
                    <td>Menunggu Konfirmasi</td>
                    <td>12-12-2023</td>
                    <td>Tunai</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>123213124</td>
                    <td>Kas Bulan Desember</td>
                    <td>20000</td>
                    <td>Menunggu Konfirmasi</td>
                    <td>12-12-2023</td>
                    <td>Tunai</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>123213124</td>
                    <td>Kas Bulan Desember</td>
                    <td>20000</td>
                    <td>Menunggu Konfirmasi</td>
                    <td>12-12-2023</td>
                    <td>Tunai</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>123213124</td>
                    <td>Kas Bulan Desember</td>
                    <td>20000</td>
                    <td>Menunggu Konfirmasi</td>
                    <td>12-12-2023</td>
                    <td>Tunai</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>123213124</td>
                    <td>Kas Bulan Desember</td>
                    <td>20000</td>
                    <td>Menunggu Konfirmasi</td>
                    <td>12-12-2023</td>
                    <td>Tunai</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
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
