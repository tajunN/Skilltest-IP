<?php
function Alternate($pesan)
{
    for ($i = 0; $i < count($pesan); $i++) {
        $spliter[$i] = str_split($pesan[$i]);

        for ($j = 0; $j < count($spliter[$i]); $j++) {
            if (ctype_upper($spliter[$i][$j])) {
                $spliter[$i][$j] = strtolower($spliter[$i][$j]);
                // $spliterU[$i][0] = strtoupper($spliterU[$i][0]);
            } else {
                $spliter[$i][$j] = strtoupper($spliter[$i][$j]);
            }
        }
        $kata[$i] = implode("", $spliter[$i]);
    }
    for ($i = 0; $i < count($pesan); $i++) {
        echo 'AlternateCase ("' . $pesan[$i] . '")    =>' . '"' . $kata[$i] . '"';
        echo "<br>";
    }
}

$pesan = ['abc', 'ABC', 'Hello World'];
// echo "kata awal(sebelum di ubah) => " . $pesan . "<br><br>";
// echo "setelah di ubah => " . Alternate($pesan);
Alternate($pesan);
