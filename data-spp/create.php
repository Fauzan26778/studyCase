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
        <div class="section-header">Tambah Data SPP</div>
        <div class="section-body">
            <div class="row d-flex justify-content-center">
                <div class="col-8">
                <div class="card">
                <div class="card-header">
                    Input Data SPP
                </div>
                    <div class="card-body">
                    <form method="POST" action="action-create-spp.php">     
                            <div class="mb-3">
                                <label for="idSpp" class="form-label">ID SPP</label>
                                <input type="number" class="form-control" name="idSpp" id="idSpp" placeholder="Masukkan ID">
                            </div>
                            <div class="mb-3">
                                <label for="tnom" class="form-label">Nominal</label>
                                <input type="number" class="form-control" name="tnom" id="tnom" placeholder="Masukkan Nominal">
                            </div>
                            <div class="mb-3">
                                <label for="ttahun" class="form-label">Tahun</label>
                                <input type="number" class="form-control" name="ttahun" id="ttahun" placeholder="Masukkan Tahun">
                            </div>
                            <div class="mb-3">
                                <label for="tketerangan" class="form-label">Keterangan</label>
                                <input type="text" class="form-control" name="tketerangan" id="tketerangan" placeholder="Tambah Keterangan">
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