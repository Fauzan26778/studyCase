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
        <div class="section-header">Update Data SPP</div>
        <div class="section-body">
            <div class="row d-flex justify-content-center">
                <div class="col-8">
                <div class="card">
                <div class="card-header">
                    Update Data SPP
                </div>
                <?php include ("../koneksi.php");
                $idSpp = $_GET['id_spp'];
                $query_mysql = mysqli_query($koneksi, "SELECT * FROM spp WHERE id_spp='$idSpp'");
                $data = mysqli_fetch_array($query_mysql);
                ?>
                <form method="POST" action="action-update-spp.php">     
                    <div class="card-body">
                            <div class="mb-3">
                                <label for="idSpp" class="form-label">ID SPP</label>
                                <input type="number" class="form-control" name="idSpp" id="idSpp" placeholder="Masukkan ID"
                                value="<?php echo $data['id_spp']; ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="tnom" class="form-label">Tahun</label>
                                <input type="number" class="form-control" name="tnom" placeholder="Masukkan Nominal"
                                value="<?php echo $data['nominal']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="ttahun" class="form-label">Tahun</label>
                                <input type="number" class="form-control" name="ttahun" id="ttahun" placeholder="Masukkan Tahun"
                                value="<?php echo $data['tahun']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="tketerangan" class="form-label">Keterangan</label>
                                <input type="text" class="form-control" name="tketerangan" id="tketerangan" placeholder="Tambah Keterangan"
                                value="<?php echo $data['keterangan']; ?>">
                            </div>
                     <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
                    </div>
                </form>
            </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php require('../template/footer.php') ?>