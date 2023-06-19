<?php
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0) {
        echo $i . " foo ";
        echo "<br>";
    }if ($i % 5 == 0) {
        echo $i . " bar ";
        echo "<br>";
    }if ($i % 3 == 0 && $i % 5 == 0 ) {
        echo $i . " Foobar ";
        echo "<br>";
}
}
?>