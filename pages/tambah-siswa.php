<?php include './koneksi.php'; ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- <div class="container-fluid-post px-4"> -->
                <div class="row g-3 my-2">
                    <form action="index.php?p=fungsi" method="post">
                        <h5>Form Input Mahasiswa</h5>
                        <div class="row justify-content-start py-3">
                            <div class="col-4">
                                <label for="nama">Nama Mahasiswa</label>
                            </div>
                            <div class="col-8">
                                <input type="text" id="nama" name="nama" class="form-control" required placeholder="Masukan nama">
                            </div>
                        </div>
                        <div class="row justify-content-start py-3">
                            <div class="col-4">
                                <label for="nim">Nim</label>
                            </div>
                            <div class="col-8">
                                <input required maxlength="61" type="text" id="nim" name="nim" class="form-control" placeholder="Masukan nim">
                            </div>
                        </div>
                        <div class="row justify-content-start py-3">
                            <div class="col-4">
                                <label for="prodi">Program Studi</label>
                            </div>
                            <div class="col-8">
                                <select class="form-select" name="prodi" style="height:40px !important;">
                                    <option value="-" selected="selected">-- Pilih Prodi --</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-end py-3 mx-5">
                            <div class="col-2">
                                <button type="submit" class="btn btn-primary" name="tambah-mahasiswa" value="submit" name="submit">+Tambah Matakuliah</button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>