<?php
function print_deret_fibonacci($jumlah)
{
    // siapkan 2 angka awal
    $angka_sebelumnya = 0;
    $angka_sekarang = 1;
    $data = [0, 1];

    //tampilkan 2 angka awal
    // echo "$angka_sebelumnya $angka_sekarang";

    for ($i = 0; $i < ($jumlah - 2); $i++) {
        // hitung angka yang akan ditampilkan
        $output = $angka_sekarang + $angka_sebelumnya;
        $data[$i + 2] = $output;
        // echo " $output";

        //siapkan angka untuk perhitungan berikutnya
        $angka_sebelumnya = $angka_sekarang;
        $angka_sekarang = $output;
    }
    $terkecil = $jumlah;
    for ($j = 0; $j < count($data); $j++) {
        $cach = abs($data[$j] - $jumlah);

        if ($cach < $terkecil) {
            $target = $data[$j];
            $terkecil = $cach;
        } else {
            $terkecil = $jumlah;
        }
    }
    echo "hasil penjumlahan array = " . $terkecil . " <br> dan bilangan fibonaci terdekat adalah =  " . $target;

    $output = $target - $terkecil;
    echo "<br><br> Output = " . $output . "<hr>";

    // return $hasil;
}

$arr = [15, 1, 3];
$jumlah = 0;
for ($i = 0; $i < count($arr); $i++) {
    $jumlah = $jumlah + $arr[$i];
}

// echo "<pre>";
// print_r($arr);
// echo "</pre>";
echo print_deret_fibonacci($jumlah);
echo "<br>";
// hasil: 0 1 1 2 3 5 8 13
 
// echo print_deret_fibonacci(10);
// echo "<br>";
// // hasil: 0 1 1 2 3 5 8 13 21 34
 
// echo print_deret_fibonacci(20);
// echo "<br>";
// hasil: 0 1 1 2 3 5 8 13 21 34 55 89 144 233 377 610 987 1597 2584 4181
