<<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
    fieldset{
         ;
         width:200px;
         background-color:skyblue;
    }
    div {
        transition-duration: 5s;
}
    </style>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <fieldset>
    <legend>FORMULIR</legend>
    <form method="POST" action="pslthn3.php" name="input">
     NO PENDAFTARAN   : <input type="number" name="np" placeholder="No pendaftaran" required><br>
     NISN   : <input type="number" name="nn" placeholder="NISN" required><br>
     NAMA   : <input type="text" name="nm" placeholder="Nama Anda"><br>
     ALAMAT   : <input type="textarea" cols="5" rows="5" name="almt" placeholder="Alamat Anda"><br>
     EMAIL   : <input type="text" name="eml" placeholder="Email Anda"><br>
     TANGGAL LAHIR   : <input type="date" name="tr" palceholder="Tanggal lahir Anda"><br>
     ASAL SEKOLAH   : <input type="text" name="ash" placeholder="Asal sekolah Anda"><br>
     JENIS KELAMIN   : <br>
      <input type="radio" name="jk" value="Laki" checked>
          Laki-laki<br>
      <input type="radio" name="jk" value="Laki"> 
          Perempuan<br>
     JURUSAN   : 
      <select name="jrs">
      <option value="RPL">RPL</option>
      <option value=phhp"TSM">TSM</option>
      <option value="TKR">TKR</option>
      </select><br>
     NAMA AYAH   : <input type="text" name="nyh" placeholder="Nama Ayah Anda"><br>
     PEKERJAAN AYAH   : <input type="text" name="pa" placeholder="Pekerjaan Ayah Anda"><br>
     NAMA IBU   : <input type="text" name="nbu" placeholder="Nama Ibu Anda"><br>
     PEKERJAAN IBU   : <input type="text" name="pu" placeholder="Pekerjaan Ibu Anda"><br>
     HOBI   : <br>
      <input type="checkbox" name="b1" value="Game" checked> Game<br>
      <input type="checkbox" name="b2" value="Berenang">Berenang<br>
      <input type="checkbox" name="b3" value="Olahraga">Olahraga<br>
      <input type="checkbox" name="b4" value="Nonton">Nonton<br>
     AGAMA   : 
      <select name="agm">
      <option value="Islam">Islam</option>
      <option value="Kristen">Kristen</option>
      <option value="Hindu">Hindu</option>
      <option value="Shinto">Shinto</option><br>
      <input type="submit" name="fr" value="Simpan">
      <input type="reset" name="reset" value="Reset">
    </form>
    </fieldset>
</body>
</html>