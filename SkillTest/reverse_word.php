<?php
function Reverse($pesan)
{
    $pesanPerKata = explode(" ", $pesan);
    $pesanPerKataU = array_map(fn ($pesan) => strrev($pesan), $pesanPerKata);


    for ($i = 0; $i < count($pesanPerKata); $i++) {

        $pesanU = implode(" ", $pesanPerKataU);
        $pesanPerKataU = explode(" ", $pesanU);

        $spliter[$i] = str_split($pesanPerKata[$i]);
        $spliterU[$i] = str_split($pesanPerKataU[$i]);
        for ($j = 0; $j < count($spliter[$i]); $j++) {
            if (ctype_upper($spliter[$i][$j])) {
                $spliterU[$i][$j] = strtolower($spliterU[$i][$j]);
                $spliterU[$i][0] = strtoupper($spliterU[$i][0]);
            } else {
                $spliterU[$i][$j] = strtolower($spliterU[$i][$j]);
            }
        }
        $pesanUU[$i] = implode("", $spliterU[$i]);
    }

    // echo "<pre>";

    // print_r($spliter);
    // echo "</pre>";
    // echo "<pre>";
    // print_r($spliterU);
    // echo "</pre>";
    $pesan1 = implode(" ", $pesanUU);

    return $pesan1;
}

$pesan = "I am A Great human";
echo "kata awal(sebelum di ubah) => " . $pesan . "<br><br>";
echo "setelah di ubah => " . Reverse($pesan);
