<?php
if(isset($_POST['Submit'])) {
    $idpetugas = $_POST['idpetugas'];
    $tusername = $_POST['tusername'];
    $tpassword = $_POST['tpassword'];
    $tnamaPetugas = $_POST['tnamaPetugas'];
    $tlevel = $_POST['tlevel'];

    include("../koneksi.php");
    $result = mysqli_query($koneksi, "UPDATE petugas SET
     username='$tusername', password=md5('$tpassword'), nama_petugas='$tnamaPetugas', level='$tlevel' 
     WHERE id_petugas='$idpetugas'");

    if ($result){
        echo "<script>alert('Data SPP berhasil diupdate'); window.location.href='../data-petugas/read.php'</script>";
    }else{
        echo "<script>alert('Data SPP gagal diupdate'); window.location.href='../data-petugas/read.php'</script>";
    }
}
?>