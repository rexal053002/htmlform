<?php
    if(isset($_POST['fr'])){
        $np = $_POST['np'];
        echo "NO PENDAFTARAN   : <b>$np</b><br>";
        $nn = $_POST['nn'];
        echo "NISN   : <b>$nn</b><br>";
        $nm = $_POST['nm'];
        echo "NAMA   : <b>$nm</b><br>";
        $almt = $_POST[''];
        echo "ALAMAT   : <b>$almt</b><br>";
        $eml = $_POST[''];
        echo "EMAIL   : <b>$eml</b><br>";
        $tr = $_POST['tr'];
        echo "TANGGAL LAHIR   : <b>$tr</b><br>";
        $ash = $_POST['ash'];
        echo "ASAL SEKOLAH   : <b>$ash</b><br>";
        $jk = $_POST['jk'];
        echo "JENIS KELAMIN   : <b>$jk</b><br>";
        $jrs = $_POST['jrs'];
        echo "JURUSAN   : <b>$jrs</b><br>";
        $nyh = $_POST['nyh'];
        echo "NAMA AYAH   : <b>$nyh</b><br>";
        $pa = $_POST['pa'];
        echo "PEKERJAAN AYAH   : <b>$pa</b><br>";
        $nbu = $_POST['nbu'];
        echo "NAMA IBU   : <b>$nbu</b><br>";
        $pu = $_POST['pu'];
        echo "PEKERJAAN IBU   : <b>$pu</b><br>";
        echo "HOBI   : <br>";
    if (isset($_POST['b1'])) {
        echo "Hobi " . $_POST['b1'] . "<br>";
        }
    if (isset($_POST['b2'])) {
        echo "Hobi" . $_POST['b2'] . "<br>";
        }
    if (isset($_POST['b3'])) {
        echo "Hobi " . $_POST['b3'] . "<br>";
        } 
    if (isset($_POST['b4'])) {
        echo "Hobi " . $_POST['b4'] . "<br>";
        }
        $agm = $_POST['agm'];
        echo "AGAMA   : <b>$agm</b><br>";

    }
?>