<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
<?php session_start(); ?>
<?php include './koneksi.php'; ?>

<h5 class="float-left my-3">Tabel Data Matakuliah</h5>
        <a class="float-right btn btn-primary" href="index.php?p=tambah-matkul"><i class="fa fa-plus-circle"></i> Tambah Data</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Matakuliah</th>
                <th scope="col">Kelas</th>
                <th scope="col">Jadwal</th>
                <th scope="col">ID Mahasiswa</th>
                <th scope="col">Aksi</th>
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
                    <td><?= $row['id_mahasiswa']; ?></td>
                    <td>
                        <a class="fa fa-pencil btn btn-warning mx-1" href="index.php?p=edit-matkul&id-mk=<?php echo $row['id_mk']; ?>"></a>

                        <a class="hapus fa fa-trash btn btn-danger" name="hapus-matkul" href="index.php?p=fungsi&id-mk=<?php echo $row['id_mk']; ?>" onclick="return confirm('Apakah ingin di hapus ?');" ></a>
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