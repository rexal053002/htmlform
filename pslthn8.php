<?php 
    if(isset($_POST['simpan'])){
        $nama = $_POST['nm'];
        $tinggi= $_POST['tb'];
        $berat = $_POST['bd'];

        function berat($tb,$bd){
            if($tb > 165 && $bd < 60){
                return "Selamat Anda di terima";
            } else {
                return "Kembali Latihan Pantang Menyerah";
            }
        }
        echo "Nama peserta  : $nm <br>";
        echo "Tinggi Badan  : $tb <br>";
        echo "Berat Badan   : $bd <br>";
        echo "Keterangan    : ". berat($a,$b);
    }
?>