<?php

function maxRedigit($angka)
{
    $digit = strlen($angka);
    if (is_numeric($angka) == 0) {
        echo "maxRedigit (" . $angka . ") ==> null";
    } elseif ($angka <= 0) {
        echo "maxRedigit (" . $angka . ") ==> null";
    } elseif (is_integer($angka) == 0) {
        echo "maxRedigit ('" . $angka . "') ==> null";
    } elseif ($digit != 3) {
        echo "maxRedigit (" . $angka . ") ==> null";
        // return null;
    } else {


        $max = 0;
        $spliter = str_split($angka);
        $kecil = $spliter[0];
        for ($i = 0; $i < count($spliter); $i++) {
            if ($spliter[$i] >= $max) {
                $max = $spliter[$i];
            }
            if ($spliter[$i] <= $kecil) {
                $kecil = $spliter[$i];
            }
        }
        for ($i = 0; $i < count($spliter); $i++) {
            if (($spliter[$i] != $max) && ($spliter[$i] != $kecil)) {
                $tengah = $spliter[$i];
            }
        }
        $spliter[0] = $max;
        $spliter[1] = $tengah;
        $spliter[2] = $kecil;
        echo "maxRedigit (" . $angka . ") ==> " . $max . $tengah . $kecil;
        // $biggest = implode("", $spliter[$i]);
        // echo "<pre>";
        // print_r($biggest);
        // echo "</pre>";
    }
}
$var = 457;
maxRedigit($var);
