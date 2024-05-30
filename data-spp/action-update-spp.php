<?php
if(isset($_POST['Submit'])) {
    $idSpp = $_POST['idSpp'];
    $tnom = $_POST['tnom'];
    $ttahun = $_POST['ttahun'];
    $tketerangan = $_POST['tketerangan'];

    include("../koneksi.php");
    $result = mysqli_query($koneksi, "UPDATE spp SET nominal='$tnom', tahun='$ttahun', keterangan='$tketerangan' WHERE id_spp='$idSpp'");

    if ($result){
        echo "<script>alert('Data SPP berhasil diupdate'); window.location.href='../data-spp/read.php'</script>";
    }else{
        echo "<script>alert('Data SPP gagal diupdate'); window.location.href='../data-spp/read.php'</script>";
    }
}
?>