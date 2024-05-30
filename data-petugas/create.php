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
        <div class="section-header">Tambah Data Petugas</div>
        <div class="section-body">
            <div class="row d-flex justify-content-center">
                <div class="col-8">
                <div class="card">
                <div class="card-header">
                    Input Data Petugas
                </div>
                    <div class="card-body">
                    <form method="POST" action="action-create-petugas.php">     
                            <div class="mb-3">
                                <label for="idpetugas" class="form-label">ID Petugas</label>
                                <input type="number" class="form-control" name="idpetugas" id="idpetugas" placeholder="Masukkan ID">
                            </div>
                            <div class="mb-3">
                                <label for="tusername" class="form-label">Username</label>
                                <input type="email" class="form-control" name="tusername" id="tusername" placeholder="Masukkan Username">
                            </div>
                            <div class="mb-3">
                                <label for="tpassword" class="form-label">Password</label>
                                <input type="password" class="form-control" name="tpassword" id="tpassword" placeholder="Masukkan Password">
                            </div>
                            <div class="mb-3">
                                <label for="tnamaPetugas" class="form-label">Nama Petugas</label>
                                <input type="text" class="form-control" name="tnamaPetugas" id="tnamaPetugas" placeholder="Masukkan Nama Petugas">
                            </div>
                            <div class="mb-3">
                                <label for="tlevel" class="form-label">Level</label>
                                <select class="form-control" name="tlevel" id="tlevel">
                                    <option >Pilih Level Petugas</option>
                                    <option value="admin">admin</option>
                                    <option value="petugas">petugas</option>
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