<?php
    if(isset($_POST['masuk'])){
        $nama = $_POST['nama'];
        echo "Nama  : <b>$nama</b><br>";
        $almt = $_POST['almt'];
        echo "Alamat  : <b>$almt</b><br>";
        $jk = $_POST['jk'];
        echo "Jenis kelamin  : <b>$jk</b><br.";
        $agm = $_POST['agm'];
        echo "Agama  : <b>$agm</b><br>";
        $eml = $_POST['eml'];
        $pass = $_POST['pass'];
        echo "Email  : <b>$eml</b><br>";
        if($eml == "arezalyn352@gmail.com" && $pass == "Maiden123") {
            echo "<h2>Register berhasil, status akun aktif</h2>";
        } else {
            echo "<h2>Register gagal, status tidak aktif</h2>";
        }
        

    }
?>