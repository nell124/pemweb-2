<?php
require_once __DIR__ . '/../models/pembayaran.php';

use models\Pembayaran;

$pembayaranList = Pembayaran::get();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Data Transaksi - Project01</title>
    <link href="../public/css/styles.css" rel="stylesheet" />
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="dashboard.php">Project01</a>
        <!-- Navigation items -->
    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark">
                <!-- Sidebar menu items -->
            </nav>
        </div>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Transaksi</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="list-transaksi.php">Transaksi</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>

                    <!-- Error message if any -->
                    <?php if (isset($error)): ?>
                        <div class="alert alert-danger"><?= $error ?></div>
                    <?php endif; ?>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-plus me-1"></i>
                            Add Transaksi
                        </div>
                        <div class="card-body">
                            <form method="POST" action="create-transaksi.php">
                                <div class="mb-3">
                                    <label for="jumlah_bayar" class="form-label">Jumlah Bayar</label>
                                    <input type="text" class="form-control" id="jumlah_bayar" name="jumlah_bayar" required>
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal" class="form-label">Tanggal</label>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pemesanan_id" class="form-label">ID Pemesanan</label>
                                    <input type="number" class="form-control" id="pemesanan_id" name="pemesanan_id" required>
                                </div>
                                <button type="submit" class="btn btn-secondary">Tambah Transaksi</button>
                            </form>
                        </div>
                    </div>
                </div>
            </main>

            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; PW2 <?= date('Y') ?></div>
                        <div>
                            <a href="#">Privacy Policy</a> &middot; <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <a href="detail-transaksi.php?id=<?= $pembayaran['id'] ?>" class="btn btn-primary btn-sm">
        <i class="fas fa-eye"></i> Detail
    </a>
    <a href="edit-transaksi.php?id=<?= $pembayaran['id'] ?>" class="btn btn-warning btn-sm">
        <i class="fas fa-edit"></i> Edit
    </a>
    <a href="delete-transaksi.php?id=<?= $pembayaran['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus pembayaran ini?');">
        <i class="fas fa-trash"></i> Hapus
    </a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>