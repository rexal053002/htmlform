<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Latihan 2 FORM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head> Agama         : 
      <select name="agm">
      <option value="Islam">Islam</option>
      <option value="Kristen">Kristen</option>
      <option value="Hindu">Hindu</option>
<body><fieldset><legend align="left">Registrasi</legend>
    <form method="POST" action="pslthn2.php" name="input">
     Nama Anda       : <input type="text" width="5" name="nama"><br>
      Alamat        : <input type="text" width="5" name="almt"><br>
      Jenis Kelamin : <br>
      <input type="radio" name="jk" value="TI" checked>
          Laki-laki<br>
      <input type="radio" name="jk" value="SI"> 
          Perempuan<br>
     
      <option value="Shinto">Shinto</option>
      </select><br>
      Email         : <input type="text" width="5" name="eml"><br>
      Password      : <input type="text" width="5" name="pass"><br>
      <input type="submit" name="masuk" value="Simpan">
      <input type="reset" name="reset" value="Reset">
    </form>
    </fieldset>
</body>
</html>