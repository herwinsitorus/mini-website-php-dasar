<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan Mahasiswa</title>
    <!-- Tambahkan Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container col-md-8 shadow-lg rounded-4 p-5 bg-white my-5">
    <h3 class="mb-4 fw-bold">Form Pesan Mahasiswa</h3>
    
    <form action="post-pesan.php" method="POST">
        <div class="mb-3">
            <label for="Nama" class="form-label fw-semibold">Nama</label>
            <input type="text" class="form-control" id="Nama" name="Nama" required>
        </div>

        <div class="mb-3">
            <label for="Kelas" class="form-label fw-semibold">Kelas</label>
            <input type="text" class="form-control" id="Kelas" name="Kelas" required>
        </div>

        <div class="mb-3">
            <label for="Pesan" class="form-label fw-semibold">Pesan / Kesan</label>
            <textarea class="form-control" name="Pesan" id="Pesan" rows="4" required></textarea>
        </div>

        <div class="mt-4">
            <button type="submit" name="tombol" class="btn btn-primary px-4">Kirim</button>
            <a href="index.php" class="btn btn-secondary px-4 text-decoration-none">Kembali</a>
        </div>
    </form>
</div>

</body>
</html>