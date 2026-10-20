<?php
// Data mahasiswa
$mahasiswa = [
    [
        "NIM" => "25001",
        "Nama" => "Herwin Sitorus",
        "Jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "Email" => "herwin@upi.edu",
        "Nilai" => 90,
        "Grade" => "A",
        "Status" => "Lulus"
    ],
    [
        "NIM" => "25002",
        "Nama" => "Cece Aditiya",
        "Jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "Email" => "cece@upi.edu",
        "Nilai" => 80,
        "Grade" => "B",
        "Status" => "Lulus"
    ],
    [
        "NIM" => "25003",
        "Nama" => "Burhanudin Haury",
        "Jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "Email" => "burhan@upi.edu",
        "Nilai" => 70,
        "Grade" => "B",
        "Status" => "Lulus"
    ],
    [
        "NIM" => "25004",
        "Nama" => "Ridho Muhammad Nugroo",
        "Jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "Email" => "ridho@upi.edu",
        "Nilai" => 60,
        "Grade" => "C",
        "Status" => "Tidak Lulus"
    ],
    [
        "NIM" => "25005",
        "Nama" => "Farel yasir",
        "Jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "Email" => "fyh@upi.edu",
        "Nilai" => 55,
        "Grade" => "C",
        "Status" => "Tidak Lulus"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container justify-content-center rounded-4 col-md-12 shadow-lg p-4 m-5">
    <h2>Daftar Mahasiswa</h2>
    <div class="d-flex justify-content-between">
        <span>Mini website PHP Dasar</span>
        <span><button type="button" class="btn btn-primary mb-3"><a href="form-pesan.php" class="btn btn-primary btn-sm text-light text-decoration-none p-0">Isi Form Pesan</a></button></span>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table align-middle">
                <thead class="table-info">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Status</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach($mahasiswa as $data): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data["NIM"] ?></td>
                            <td><?= $data["Nama"] ?></td>
                            <td><?= $data["Jurusan"] ?></td>
                            <td><?= $data["Email"] ?></td>
                            <td><?= $data["Nilai"] ?></td>
                            <td><?= $data["Grade"] ?></td>
                            <td>
                                <?php if($data["Status"] == "Lulus") : ?>
                                    <span class="fw-bold text-success">Lulus</span>
                                <?php else : ?>
                                    <span class="fw-bold text-danger">Tidak Lulus</span>
                                <?php endif; ?>
                            </td>

                            <td>
                                <a href="detail.php?NIM=<?= $data["NIM"]; ?>&Nama=<?= urlencode($data["Nama"]); ?>&Jurusan=<?= urlencode($data["Jurusan"]); ?>&Email=<?= $data["Email"]; ?>&Nilai=<?= $data["Nilai"]; ?>&Grade=<?= $data["Grade"]; ?>&Status=<?= urlencode($data["Status"]); ?>" class="btn btn-primary btn-sm text-light text-decoration-none">Lihat Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>