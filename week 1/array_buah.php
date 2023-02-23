<?php
// cara penulisan array


// array assosiatif
$buah = ['alpukat','jeruk','mangga'];
// cara manggil array assosiatif
echo $buah[1];

// array assosiatif
$buah = ["a"=>'alpukat',"j"=>'jeruk',"m"=>'mangga'];

//cara mencetak array assosiatif dengan foreach
echo "<ol>";
foreach ($buah as $fruit => $k){
        echo "<li>"
}
?>