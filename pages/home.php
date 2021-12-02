<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2 class="mb-4">Data Mahasiswa & Matakuliah</h2>
        <p>Ini adalah web aplikasi CRUD untuk penjadwalan mahasiswa dan Matakuliah. Dibawah merupakan data yang sudah dibuat</p>
        <div class="container-flex">
            <div class="row mx-auto my-5">
                <h5>Tabel Data Mahasiswa</h5>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Mahasiswa</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Prodi</th>
                    </tr>
                    </thead>
                    <?php include './koneksi.php'; ?>
                    <tbody>
                    <?php
                        $no = 1;
                        $ambilQuery = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY id_mahasiswa ASC");
                        while ($row = mysqli_fetch_assoc($ambilQuery)) {
                        ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <!-- <td><?= $row['id_mahasiswa']; ?></td> -->
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['nim']; ?></td>
                            <td><?= $row['prodi']; ?></td>
                        </tr>
                    <?php	} ?>
                    </tbody>
                </table>
            </div>
            <div class="row mx-auto my-5">
                <h5>Tabel Data Matakuliah</h5>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Matakuliah</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Jadwal</th>
                        <!-- <th scope="col">ID Mahasiswa</th> -->
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $no = 1;
                        $ambilQuery = mysqli_query($koneksi, "SELECT * FROM mata_kuliah ORDER BY id_mk ASC");
                        while ($row = mysqli_fetch_assoc($ambilQuery)) {
                        ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <!-- <td><?= $row['id_mk']; ?></td> -->
                            <td><?= $row['nama_mk']; ?></td>
                            <td><?= $row['kelas']; ?></td>
                            <td><?= $row['jadwal']; ?></td>
                            <!-- <td><?= $row['id_mahasiswa']; ?></td> -->
                        </tr>
                    <?php	} ?>
                    </tbody>
                </table>
            </div>
        </div>
</body>
</html>