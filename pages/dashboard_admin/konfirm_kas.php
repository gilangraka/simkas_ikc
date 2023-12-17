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
    <div class="wrapper">
      <?php require('Navbar.php'); ?>
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
              <a class="navbar-brand" href="javascript:;">Konfirmasi Kas</a>
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
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID Mhs</th>
                            <th scope="col">ID Kas</th>
                            <th scope="col">Nama Mhs</th>
                            <th scope="col">Nominal</th>
                            <th scope="col">Konfirmasi</th>
                        </tr>
                    </thead>
                    <tbody id="tabelBody">
                        
                    </tbody>
                </table>

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script src="script.js"></script>
            <script>
            
                const dataPembayaran = [
                    { no: 1, idMhs: 'M001', idKas: 'K001', namaMhs: 'Memek', nominal: 500000, konfirmasi: 'konfirmasi' },
                    { no: 2, idMhs: 'M002', idKas: 'K002', namaMhs: 'Gawuk', nominal: 500000, konfirmasi: 'konfirmasi' },
                    { no: 3, idMhs: 'M003', idKas: 'K003', namaMhs: 'jangkrik', nominal: 500000, konfirmasi: 'konfirmasi' }
                ];

            
                const tabelBody = document.getElementById('tabelBody');
                dataPembayaran.forEach(data => {
                    const row = `<tr>
                                    <td>${data.no}</td>
                                    <td>${data.idMhs}</td>
                                    <td>${data.idKas}</td>
                                    <td>${data.namaMhs}</td>
                                    <td>${data.nominal}</td>
                                    <td><button class="btn btn-primary" onclick="konfirmasiPembayaran(${data.no})">${data.konfirmasi}</button></td>
                                </tr>`;
                    tabelBody.innerHTML += row;
                });

            
                function konfirmasiPembayaran(no) {
                    const row = tabelBody.querySelector(`tr:nth-child(${no})`);
                    row.remove();  // Menghapus baris dari tabel
                }
            </script>

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
  </body>
</html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Konfirmasi Pembayaran</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Konfirmasi Pembayaran</h1>
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Mhs</th>
                    <th scope="col">ID Kas</th>
                    <th scope="col">Nama Mhs</th>
                    <th scope="col">Nominal</th>
                    <th scope="col">Jenis Transfer</th>
                    <th scope="col">Bukti Transfer</th>
                    <th scope="col">Konfirmasi</th>
                </tr>
            </thead>
            <tbody id="tabelBody">
                
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
    <script>
    
        const dataPembayaran = [
            { no: 1, idMhs: 'M001', idKas: 'K001', namaMhs: 'Memek', nominal: 500000, jenisTransfer: 'Dana E-wallet', buktiTransfer: 'bukti1.jpg', konfirmasi: 'konfirmasi' },
            { no: 2, idMhs: 'M002', idKas: 'K002', namaMhs: 'Gawuk', nominal: 500000, jenisTransfer: 'Transfer Bank', buktiTransfer: 'bukti2.jpg', konfirmasi: 'konfirmasi' },
            { no: 3, idMhs: 'M003', idKas: 'K003', namaMhs: 'jangkrik', nominal: 500000, jenisTransfer: 'SPay E-wallet', buktiTransfer: 'bukti3.jpg', konfirmasi: 'konfirmasi' }
        ];

    
        const tabelBody = document.getElementById('tabelBody');
        dataPembayaran.forEach(data => {
            const row = `<tr>
                            <td>${data.no}</td>
                            <td>${data.idMhs}</td>
                            <td>${data.idKas}</td>
                            <td>${data.namaMhs}</td>
                            <td>${data.nominal}</td>
                            <td>${data.jenisTransfer}</td>
                            <td>${data.buktiTransfer}</td>
                            <td><button class="btn btn-success" onclick="konfirmasiPembayaran(${data.no})">${data.konfirmasi}</button></td>
                        </tr>`;
            tabelBody.innerHTML += row;
        });

      
        function konfirmasiPembayaran(no) {
            const row = tabelBody.querySelector(`tr:nth-child(${no})`);
            row.remove();  // Menghapus baris dari tabel
        }
    </script>
</body>
</html> -->
