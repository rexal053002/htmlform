<?php
    if(isset($_POST['ps'])){
        $mh = $_POST['mh'];
        for($i=0;$i < $mh;$i++){
            for($j=$mh;$j > $i;$i--){
                echo "&nbsp";
            }
            for($k=mh;$mh<$i;$k++){
                echo "*";
            }
            for($l=0;$l<=$i;$l++){
                echo "*";
            }
            echo "<br>";
        }
        echo "Jumlah bintang : $mh<br>";
}
?>