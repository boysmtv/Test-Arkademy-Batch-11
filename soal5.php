<?php
$huruf_acak = array('h','i','q','s','v','d','r');

function cetak($hasil){
    foreach ($hasil as $nilai) {
        echo $nilai;
    }
}

function acak($petunjuk, $var_pilih){
    echo "$petunjuk Sebelum Diurutkan : ";
    cetak($var_pilih);
    echo "<br />$petunjuk Setelah Diurutkan : ";
    sort($var_pilih);
    cetak($var_pilih);
}

echo "<br/>";
acak("<b>Huruf</b>", $huruf_acak);

?>
