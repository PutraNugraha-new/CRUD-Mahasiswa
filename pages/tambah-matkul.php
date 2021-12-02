<?php include './koneksi.php'; ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="row g-3 my-2">
                    <form action="index.php?p=fungsi" method="post">
                        <h5>Form Input Matakuliah</h5>
                        <div class="row justify-content-start py-3">
                            <div class="col-4">
                                <label for="nama_mk">Nama Matakuliah</label>
                            </div>
                            <div class="col-8">
                                <input type="text" id="nama_mk" name="nama_mk" class="form-control" required placeholder="Masukan Nama Matakuliah">
                            </div>
                        </div>
                        <div class="row justify-content-start py-3">
                            <div class="col-4">
                                <label for="kelas">Kelas</label>
                            </div>
                            <div class="col-8">
                                <input required maxlength="61" type="text" id="kelas" name="kelas" class="form-control" placeholder="Masukan kelas">
                            </div>
                        </div>
                        <div class="row justify-content-start py-3">
                            <div class="col-4">
                                <label for="jadwal">Jadwal</label>
                            </div>
                            <div class="col-8">
                            <input required maxlength="61" type="datetime-local" id="jadwal" name="jadwal" class="form-control" placeholder="Masukan Jadwal">
                            </div>
                        </div>
                        <div class="row justify-content-start py-3">
                            <div class="col-4">
                                <label for="id_mahasiswa">Id Mahasiswa</label>
                            </div>
                            <div class="col-8">
                            <input required maxlength="61" type="text" id="id_mahasiswa" name="id_mahasiswa" class="form-control" placeholder="Masukan Id Mahasiswa">
                            </div>
                        </div>
                        <div class="row justify-content-end py-3 mx-5">
                            <div class="col-2">
                                <button type="submit" class="btn btn-primary" name="tambah-matkul" value="submit" name="submit">+Tambah Matakuliah</button>
                            </div>
                        </div>
                    </form>
                </div>