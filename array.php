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
    <center>
    <p>Form Array</p>
    </center>
    <fieldset>
    <legend>Form Array</legend>
    <form action="" method="GET">
    <label for="">Masukan jumlah</label>
    <input type="number" name="jml"><br>
    <input type="submit" name="submit" value="Proses">
    <hr>
    </form>
    <?php
    if(isset($_GET['submit'])){
        $jmlf = $_GET['jml'];
        for($a = 1;$a <= $jmlf;$a++) {
    ?>
    <form action="prosesarray.php" method="POST">
    <label for="">Nama</label>
    <input type="text" name="nama[]" required>
    <label for="">Kelas</label>
    <input type="text" name="kelas[]" required><br>
    <br>

    <?php }
     ?>
    <input type="submit" name="sbm" value="Simpan">
    <input type="reset" value="Reset">
    ></form>
    <?php }
    ?>
    </fieldset>
</body>
</html>

belum beres