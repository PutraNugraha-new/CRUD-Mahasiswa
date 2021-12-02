<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
<?php session_start(); ?>

<h5 class="float-left my-3">Tabel Data Mahasiswa</h5>
        <a class="float-right btn btn-primary" href="index.php?p=tambah-siswa"><i class="fa fa-plus-circle"></i> Tambah Data</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Prodi</th>
                <th scope="col">Aksi</th>
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
                    <td>
                        <a class="fa fa-pencil btn btn-warning mx-1" href="index.php?p=edit-mahasiswa&id=<?php echo $row['id_mahasiswa']; ?>"></a>

                        <a class="hapus fa fa-trash btn btn-danger" name="hapus-mahasiswa" href="index.php?p=fungsi&id=<?php echo $row['id_mahasiswa']; ?>" onclick="return confirm('Apakah ingin di hapus ?');" ></a>
                    </td>
                </tr>
            <?php	} ?>
            </tbody>
        </table>

        <!-- jika ada session sukses maka tampilkan sweet alert dengan pesan yang telah di set
    di dalam session sukses  -->
<?php if (@$_SESSION['sukses-tambah']) { ?>
	<script>
		swal("Tambah Data Berhasil", "<?php echo $_SESSION['sukses-tambah']; ?>", "success");
	</script>
	<!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['sukses-tambah']);
} ?>

<?php if (@$_SESSION['sukses-edit']) { ?>
	<script>
		swal("Edit Data Berhasil", "<?php echo $_SESSION['sukses-edit']; ?>", "info");
	</script>

<?php unset($_SESSION['sukses-edit']);
} ?>

<?php if (@$_SESSION['sukses-hapus']) { ?>
	<script>
		swal("Hapus Data Berhasil", "<?php echo $_SESSION['sukses-hapus']; ?>", "error");
	</script>

<?php unset($_SESSION['sukses-hapus']);
} ?>