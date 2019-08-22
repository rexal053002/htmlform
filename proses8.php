<?php
    if(isset($_POST['Pilih'])){
    echo "Band Favorit Anda adalah  : ";
    if (isset($_POST['b1'])) {
        echo "Band " . $_POST['b1'] . "<br>";
        }
    if (isset($_POST['b2'])) {
        echo "Band" . $_POST['b2'] . "<br>";
        }
    if (isset($_POST['b3'])) {
        echo "Band " . $_POST['b3'] . "<br>";
        } 
    if (isset($_POST['b4'])) {
        echo "Band " . $_POST['b4'] . "<br>";
        }
    }       
?>