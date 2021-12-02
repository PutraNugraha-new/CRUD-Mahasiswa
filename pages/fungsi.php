<?php 
session_start();
include './koneksi.php';

// Deklarasikan Query 
$id_mahasiswa	= $_POST['id_mahasiswa'];
$nama					= $_POST['nama'];
$nim					= $_POST['nim'];
$prodi				= $_POST['prodi'];
$id_mk				= $_POST['id_mk'];
$nama_mk				= $_POST['nama_mk'];
$kelas				= $_POST['kelas'];
$jadwal				= $_POST['jadwal'];


// --------------------------- Tambah Mahasiswa --------------------------------
// Untuk Tambah Data Mahasiswa
if ($_POST['tambah-mahasiswa']) {
	$queryTambah = mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES('', '$nama', '$nim', '$prodi')");

	$_SESSION["sukses-tambah"] = 'Data Berhasil Disimpan';

	if ($queryTambah) {
		header("location: index.php?p=tb-mahasiswa");
	} else {
		echo "ERROR, Tidak Berhasil Tambah Data " . mysqli_error($koneksi);
	}
}

// --------------------------- Update Mahasiswa --------------------------------
if (isset($_POST['edit-mahasiswa'])) {
	$id_mahasiswa = $_POST['id_mahasiswa'];
	$nama					= $_POST['nama'];
	$nim					= $_POST['nim'];
	$prodi				= $_POST['prodi'];
	$queryEdit = mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', nim='$nim', prodi='$prodi' WHERE id_mahasiswa = '$id_mahasiswa' ");

	$_SESSION["sukses-edit"] = 'Data Berhasil Diedit';

	if ($queryEdit) {
		header("location: index.php?p=tb-mahasiswa");
	} else {
		echo "ERROR, Tidak Berhasil Edit Data " . mysqli_error($koneksi);
	}
}

// --------------------------- Delete Mahasiswa --------------------------------
if (isset($_GET['id'])) {
	$id_mahasiswa = $_GET['id'];

	$queryHapus = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id_mahasiswa = '$id_mahasiswa'");

	$_SESSION["sukses-hapus"] = 'Data Berhasil Dihapus';

	if ($queryHapus == true) {
		header("location: index.php?p=tb-mahasiswa");
	} else {
		echo "ERROR, Tidak Berhasil Hapus Data " . mysqli_error($koneksi);
	}
}

// --------------------------- Tambah matakuliah --------------------------------
// Untuk Tambah Data Mahasiswa
if ($_POST['tambah-matkul']) {
	$queryTambah = mysqli_query($koneksi, "INSERT INTO mata_kuliah VALUES('', '$nama_mk', '$kelas', '$jadwal','$id_mahasiswa')");

	$_SESSION["sukses-tambah"] = 'Data Berhasil Disimpan';

	if ($queryTambah) {
		header("location: index.php?p=tb-mata-kuliah");
	} else {
		echo "ERROR, Tidak Berhasil Tambah Data " . mysqli_error($koneksi);
	}
}

// --------------------------- Update Matakuliah --------------------------------
if (isset($_POST['edit-matkul'])) {
	$id_mahasiswa       = $_POST['id_mahasiswa'];
	$id_mk				= $_POST['id_mk'];
	$nama_mk			= $_POST['nama_mk'];
	$kelas				= $_POST['kelas'];
	$jadwal				= $_POST['jadwal'];
	$queryEdit = mysqli_query($koneksi, "UPDATE mata_kuliah SET nama_mk='$nama_mk', kelas='$kelas', jadwal='$jadwal', id_mahasiswa = '$id_mahasiswa'  WHERE id_mk = '$id_mk' ");

	$_SESSION["sukses-edit"] = 'Data Berhasil Diedit';

	if ($queryEdit) {
		header("location: index.php?p=tb-mata-kuliah");
	} else {
		echo "ERROR, Tidak Berhasil Edit Data " . mysqli_error($koneksi);
	}
}

// --------------------------- Delete Matakuliah --------------------------------
if (isset($_GET['id-mk'])) {
	$id_mk = $_GET['id-mk'];

	$queryHapus = mysqli_query($koneksi, "DELETE FROM mata_kuliah WHERE id_mk = '$id_mk'");

	$_SESSION["sukses-hapus"] = 'Data Berhasil Dihapus';

	if ($queryHapus == true) {
		header("location: index.php?p=tb-mata-kuliah");
	} else {
		echo "ERROR, Tidak Berhasil Hapus Data " . mysqli_error($koneksi);
	}
}

?>