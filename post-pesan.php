<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Berhasil Dikirim</title>
    <!-- Tambahkan Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container col-md-8 shadow-lg rounded-4 p-5 bg-white my-5">
    <h3 class="mb-3 fw-bold">Pesan Berhasil Dikirim</h3>
    
    <p class="text-muted mb-4">
        Terima kasih, <strong><?= $_POST["Nama"] ?? '-'; ?></strong>!
    </p>

    <ul class="list-group list-group-flush mb-4">
        <li class="list-group-item bg-light mb-2 rounded-2 border-0 p-3">
            <strong>Nama:</strong> <?= $_POST["Nama"] ?? '-'; ?>
        </li>
        <li class="list-group-item bg-light mb-2 rounded-2 border-0 p-3">
            <strong>Kelas:</strong> <?= $_POST["Kelas"] ?? '-'; ?>
        </li>
        <li class="list-group-item bg-light mb-2 rounded-2 border-0 p-3">
            <strong>Pesan / Kesan:</strong> <?= $_POST["Pesan"] ?? '-'; ?>
        </li>
    </ul>

    <a href="index.php" class="btn btn-primary px-4">Kembali ke Data Mahasiswa</a>
</div>

</body>
</html>