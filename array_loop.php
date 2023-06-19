<?php

$aplikasi = ['gtAkademik', 'gtFinansi', 'gtPerizinan', 'eCampuz', 'eOviz'];
$a = count($aplikasi); 
$i = 0; 

while ($i < $a) {
    echo $aplikasi[$i] . " "; 
    echo "<br>";
    $i++; 
}
?>