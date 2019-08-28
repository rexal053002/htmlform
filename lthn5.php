<<!DOCTYPE html>
<html>
<head>
<style>
fieldset{
    background-color : skyblue;
}
form{
    align : center; 
}
</style>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>lthn5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <fieldset>
    <h4>Onlineshop</h4><br>
    <form method="POST" action="pslthn5.php" name="input">
    Nama               : <input type="text" name="nm">
    Jalan/kp           : <input type="text" name="jln">
    Kecamatan          : <input type="text" name="kc"><br>
    Kota               : <input type="text" name="kt">
    Provinsi           : <input type="text" name="pv"><br>
    Kode POS           : <input type="number" name="kps">
    Nama Barang        : <input type="text" name="nb"><br>
    Harga barang       : <input type="number" name="hb">
    Jumlah Barang      : <input type="number" name="jb"><br>
    Deskripsi          : <input type="text" name="ds">
    Tanggal Pembelian  : <input type="date" name="tp"><br>
    <input type="submit" name="ps" value="proses">
    </form>
    </fieldset>
</body>
</html>