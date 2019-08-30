<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Luas Lingkaran</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <fieldset>
    <legend>
    Luas Lingkaran
    </legend>
    <form action="" method="get" name="input">
    <label for="">Luas lingkaran</label>
    <input type="number" min="1" name="j" required>
    <br>
    <input type="submit" name="simpan" value="Simpan">
    </form>
    </fieldset>

     <?php 
        if(isset($_GET['simpan'])){
            $jari = $_GET['j'];

            function persegi($j){
                
               $luas_lingkaran = 3.14*$jari*$jari;
               return $luas_lingkaran;
            }
            $luas_lingkaran=persegi($jari);
	        echo "Luas : $luas_lingkaran <br>";
	      
        }
    ?>
</body>
</html>