<?php
include("../koneksi.php");
$idSpp= $_GET['id_spp'];
$query_mysql = mysqli_query($koneksi," DELETE FROM spp WHERE id_spp='$idSpp'");
if ($query_mysql){
    echo "<script>alert('Data Kelas berhasil dihapus'); window.location.href='../data-spp/read.php'</script>";
}else{
    echo "<script>alert('Data Kelas gagal dihapus'); window.location.href='../data-spp/read.php'</script>";
}
?>