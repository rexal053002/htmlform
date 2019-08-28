<?php
    if(isset($_POST)){
        $jln = $_POST['jln'];
        echo "<b>JALAN               :</b> $jln<br>";
        $kc = $_POST['kc'];
        echo "<b>Kecamatan           :</b> $kc<br>";
        $kt = $_POST['kt'];
        echo "<b>Kota                :</b> $kt<br>";
        $pv = $_POST['pv'];
        echo "<b>Provinsi            :</b> $pv<br>";
        $kps = $_POST['kps'];
        echo "<b>Kode Pos            :</b> $kps<br>";
        $nb = $_POST['nb'];
        echo "<b>Nama Barang         :</b> $nb<br>";
        $hb = $_POST['hb'];
        echo "<b>Harga Barang        :</b> $hb<br>";
        $jb = $_POST['jb'];
        echo "<b>Jumlah Barang       :</b> $jb<br>";
        if ($jb > 5) {
            echo "<b>Selamat Anda mendapatkan Diskon 10%</b><br>";
        }elseif($jb > 10){
            echo "<b>Selamat Anda mendapatkan Diskon 20%</b><br>";
        }elseif($jb > 0){
            echo "<b>Maaf Pesanan Anda tidak bisa diproses</b><br>";
        }
        $ds = $_POST['ds'];
        echo "<b>Deskripsi           :</b> $ds<br>";
        $tp = $_POST['tp'];
        echo "<b>Tanggal Pembelian   :</b> $tp<br>";
    }
?>

kondisi yang benar :
$hb = $_POST['hb'];
$subtotl = $jb*hb;
if($jb > 10){
    $totl = $hb*$jb;
    $dis = $totl*0.1;
}