<?php
include ("../koneksi.php");
$idpetugas = $_GET['id_petugas'];
$query_mysql = mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas = '$idpetugas'");
    if ($query_mysql){
        echo "<script>alert('Data SPP berhasil dihapus'); window.location.href='../data-petugas/read.php'</script>";
    }else{
        echo "<script>alert('Data SPP gagal dihapus'); window.location.href='../data-petugas/read.php'</script>";
    }
?>