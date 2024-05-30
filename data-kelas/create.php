<?php
include ("../koneksi.php");
session_start();
if($_SESSION['level'] == ""){
    header("location:auth-login-petugas.php?pesan=gagal");
}
?>

<?php require('../template/header.php') ?>

<?php require('../template/nav.php') ?>

<?php require('../template/sidebar.php') ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">Tambah Data Kelas</div>
        <div class="section-body">
            <div class="row d-lex justify-content-center">
              <div class="col-8">
                <div class="card">
                <div class="card-header">
                    Input Data Kelas
                </div>
                    <div class="card-body">
                    <form method="POST" action="action-create.php">     
                            <div class="mb-3">
                                <label for="IdKelas" class="form-label">ID Kelas</label>
                                <input type="number" class="form-control" name="IdKelas" id="IdKelas" placeholder="Masukkan ID">
                            </div>
                            <div class="mb-3">
                                <label for="NamaKelas" class="form-label">Nama Kelas</label>
                                <input type="text" class="form-control" name="NamaKelas" id="NamaKelas" placeholder="Masukkan Nama Kelas">
                            </div>
                            <div class="mb-3 mt-3">
                            <label for="KompetensiKeahlian" class="form-label">Kompetensi Keahlian</label>
                                <select class="form-control" arial-label="select" name="KompetensiKeahlian" id="KompetensiKeahlian">
                                    <option >-Pilih Kompetensi Keahlian-</option>
                                    <option value="Rekayasa Perangkat Lunak ">Rekayasa Perangkat Lunak</option>
                                    <option value="Teknik Audio Video">Teknik Audio Video</option>
                                    <option value="Desain dan Pemodelan Informasi Pembangunan">Desain dan Pemodelan Informasi Pembangunan</option>
                                    <option value="Teknik Kendaraan Ringan Otomotif ">Teknik Kendaraan Ringan Otomotif </option>
                                    <option value="Teknik dan Bisnis Sepeda Motor">Teknik dan Bisnis Sepeda Motor</option>
                                </select>
                            </div>
                     <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
                    </form>
                    </div>
            </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php require('../template/footer.php') ?>