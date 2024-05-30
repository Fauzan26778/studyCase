<?php
if(isset($_POST['Submit'])) {
    $idSpp = $_POST['idSpp'];
    $tnom = $_POST['tnom'];
    $ttahun = $_POST['ttahun'];
    $tketerangan = $_POST['tketerangan'];

    include("../koneksi.php");
    $result = mysqli_query($koneksi, "INSERT INTO spp(id_spp, nominal, tahun, keterangan) VALUES('$idSpp','$tnom','$ttahun','$tketerangan')");

    if ($result){
        echo "<script>alert('Data SPP berhasil ditambahkan'); window.location.href='../data-spp/read.php'</script>";
    }else{
        echo "<script>alert('Data SPP gagal ditambahkan'); window.location.href='../data-spp/read.php'</script>";
    }
}
?>