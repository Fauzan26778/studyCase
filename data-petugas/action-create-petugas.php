<?php
if(isset($_POST['Submit'])) {
    $idpetugas = $_POST['idpetugas'];
    $tusername = $_POST['tusername'];
    $tpassword = $_POST['tpassword'];
    $tnamaPetugas = $_POST['tnamaPetugas'];
    $tlevel = $_POST['tlevel'];

    include("../koneksi.php");
    $result = mysqli_query($koneksi, "INSERT INTO petugas(id_petugas, username, password, nama_petugas, level) VALUES('$idpetugas','$tusername',md5('$tpassword'),'$tnamaPetugas','$tlevel')");

    if ($result){
        echo "<script>alert('Data SPP berhasil ditambahkan'); window.location.href='../data-petugas/read.php'</script>";
    }else{
        echo "<script>alert('Data SPP gagal ditambahkan'); window.location.href='../data-petugas/read.php'</script>";
    }
}
?>