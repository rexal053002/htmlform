<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form method="POST" action="pslthn3.phhp" name="input">
     No PENDAFTARAN   : <input type="number" name="np" placeholder="No pendaftaran" required><br>
     NISN   : <input type="number" name="nn" placeholder="NISN" required><br>
     NAMA   : <input type="text" name="nm" placeholder="nama Anda"><br>
     ALAMAT   : <input type="textarea" cols="5" rows="5" name="almt" placeholder="Alamat Anda"><br>
     TANGGAL LAHIR   : <input type="date" name="tr" palceholder="Tanggal lahir Anda"><br>
     ASAL SEKOLAH   : <input type="text" name="ash" placeholder="Asal sekolah Anda"><br>
     JENIS KELAMIN   : 
      <input type="radio" name="jk" value="TI" checked>
          Laki-laki<br>
      <input type="radio" name="jk" value="SI"> 
          Perempuan<br>
     JURUSAN   : 
      <select name="agm">
      <option value="RPL">TSM</option>
      <option value="TSM">TSM</option>
      <option value="TKR">TKR</option>
      </select><br>
     NAMA AYAH   : <input type="text" name="nyh" placeholder="Nama Ayah Anda"><br>
     PEKERJAAN AYAH   : <input type="text" name="pa" placeholder="Pekerjaan Ayah Anda"><br>
     NAMA IBU   : <input type="text" name="nbu" placeholder="Nama Ibu Anda"><br>
     PEKERJAAN IBU   : <input type="text" name="pu" placeholder="Pekerjaan Ibu Anda"><br>
     HOBI   : 
      <input type="checkbox" name="b1" value="Game" checked> Game<br>
      <input type="checkbox" name="b2" value="Berenang">Berenang<br>
      <input type="checkbox" name="b3" value="Olahraga">Olahraga<br>
     AGAMA   : 
      <select name="agm">
      <option value="Islam">Islam</option>
      <option value="Kristen">Kristen</option>
      <option value="Hindu">Hindu</option>
      <option value="Shinto">Shinto</option> 
      <input type="submit" name="fr" value="Simpan">
      <input type="reset" name="reset" value="Reset">
    </form>
</body>
</html>