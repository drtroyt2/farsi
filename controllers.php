<?php
function printt($q){
    $c = count($q)-1;
    for($i=0;$i<=10;$i++){
        $r = rand(1,$c);
        $num = $i+1;
        echo"<p>$num.$q[$r]</p>";
    }
}