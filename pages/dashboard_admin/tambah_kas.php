<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Tambah Kas</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Tambah Kas</h1>
        
        <button class="btn btn-primary" data-toggle="modal" data-target="#tambahKasModal">Tambah Kas</button>

        <!-- Modal -->
        <div class="modal fade" id="tambahKasModal" tabindex="-1" role="dialog" aria-labelledby="tambahKasModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahKasModalLabel">Tambah Kas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formTambahKas">
                            <div class="form-group">
                                <label for="id">ID Kas:</label>
                                <input type="text" class="form-control" id="id" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggalMasuk">Masuk Tanggal Bayar:</label>
                                <input type="date" class="form-control" id="tanggalMasuk" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggalKeluar">Tenggat Tanggal Bayar:</label>
                                <input type="date" class="form-control" id="tanggalKeluar" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Keterangan:</label>
                                <input type="text" class="form-control" id="deskripsi" required>
                            </div>
                            <div class="form-group">
                                <label for="jumlahKas">Nominal:</label>
                                <input type="number" class="form-control" id="jumlahKas" required>
                            </div>
                            <button type="button" class="btn btn-primary" onclick="tambahKas()">Tambah Kas</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
