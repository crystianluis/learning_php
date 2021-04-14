<?php

for ( $i = 0; $i <= 20; $i++ ) {
    if ( $i > 3 && $i < 7 )
        continue;
    echo $i;
    echo "<br>";
}

?>