<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #007bff;
            margin-top: 56px;
        }

        .navbar {
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #000000;
            color: #fff;
            font-weight: bold;
        }

        .btn-success {
            background-color: #000000;
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .btn-link {
            color: #007bff;
        }

        .btn-link:hover {
            color: #0056b3;
        }

        .table th, .table td {
            vertical-align: middle;
        }

        .footer {
            padding: 1rem;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            position: fixed;
            bottom: 0;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <a class="navbar-brand" href="#">Dosen</a>
    </nav>

    <div class="container">
        <?php if (!empty(session()->getFlashdata('message'))) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('message'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif ?>

        <a href="<?= route_to('Dosen::tambah') ?>" class="btn btn-success mb-3">Tambah Data</a>

        <div class="card">
            <div class="card-header">
                Daftar Dosen
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table text-nowrap table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nama Dosen</th>
                                <th>Matkul Dosen</th>
                                <th>Alamat Dosen</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $dosen) : ?>
                            <tr>
                                <td><?= $dosen['nama_dosen'] ?></td>
                                <td><?= $dosen['matkul_dosen'] ?></td>
                                <td><?= $dosen['alamat_dosen'] ?></td>
                                <td class="text-center">
                                    <a href="<?= route_to('Dosen::edit', $dosen['id_dosen']); ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?= route_to('Dosen::hapus', $dosen['id_dosen']); ?>" class="btn btn-danger"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                                        
                                        <a href="<?= route_to('Dosen::hadir', $dosen['id_dosen']); ?>" class="btn btn-primary">Hadir</a>
                                        <a href="<?= route_to('Dosen::tidak', $dosen['id_dosen']); ?>" class="btn btn-primary">tidak</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
