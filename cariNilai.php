<?php
    $buah = ['Apel','Pisang', 'Anggur', 'Durian', 'Jeruk'];

    function cari ($array, $find):bool {
        if (in_array($find,$array)) {
            echo "TRUE".'</br>';
            return TRUE;
        } else {
            echo "FALSE".'</br>';
            return false;
        }
}

cari($buah, 'Durian');
cari($buah, 'Duku');

?>