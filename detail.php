<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container col-md-8 shadow-lg rounded-4 p-5 bg-white my-5">
    <h2 class="mb-4">Detail Mahasiswa</h2>
    <ul class="list-group list-group-flush mb-4">
        <li class="list-group-item bg-light mb-2 rounded-2 border-0 p-3">
            <strong>NIM:</strong> <?= $_GET["NIM"] ?>
        </li>
        <li class="list-group-item bg-light mb-2 rounded-2 border-0 p-3">
            <strong>Nama:</strong> <?= $_GET["Nama"] ?>
        </li>
        <li class="list-group-item bg-light mb-2 rounded-2 border-0 p-3">
            <strong>Jurusan:</strong> <?= $_GET["Jurusan"] ?>
        </li>
        <li class="list-group-item bg-light mb-2 rounded-2 border-0 p-3">
            <strong>Email:</strong> <?= $_GET["Email"] ?>
        </li>
        <li class="list-group-item bg-light mb-2 rounded-2 border-0 p-3">
            <strong>Nilai:</strong> <?= $_GET["Nilai"] ?>
        </li>
        <li class="list-group-item bg-light mb-2 rounded-2 border-0 p-3">
            <strong>Grade:</strong> <?= $_GET["Grade"] ?>
        </li>
        <li class="list-group-item bg-light mb-2 rounded-2 border-0 p-3">
            <strong>Status:</strong> 
            <?php 
                $status = $_GET["Status"];
                if($status == "Lulus") {
                    echo '<span class="text-success fw-bold">Lulus</span>';
                } elseif($status == "Tidak Lulus") {
                    echo '<span class="text-danger fw-bold">Tidak Lulus</span>';
                } else {
                    echo $status;
                }
            ?>
        </li>
    </ul>

    <a href="index.php" class="btn btn-primary px-4">Kembali</a>
</div>

</body>
</html>