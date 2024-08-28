<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobsheet 2</title>
</head>
    <body>
        <?php
        //menampilkkan  tulisan
        echo "NIS : 2233290 <br>";
        echo "Nama : Icha Hadiani Putri <br>";
        echo "Alamat : Sidorawuh <br>";
        echo "Telepon: 08988385983 <br>";
        echo "Email :ichahadianii1207@gmail.com <br> <br>";

        //menghitung nilai Pemrograman Web lanjut, gunakan IF dan switch
        echo "NIS : 2233290 <br>";
        echo "Nama : Icha Hadiani Putri <br>";
        $n_tugas = 70*20/100;
        $n_uts = 80*35/100;
        $n_uas = 83*45/100; 
        echo "Nilai Tugas :  $n_tugas <br>";
        echo "Nilai Uts :  $n_uts <br>";
        echo "Nilai Uas :  $n_uas <br>";
        $n_akhir = $n_tugas + $n_uts + $n_uas;
        echo "Nilali Akhir : $n_akhir <br>";

        if ($n_akhir >= 85){
            echo "Nilai Huruf : A";
        }elseif ($n_akhir >= 68.5 ){
            echo "Nilai Huruf : B";
        }elseif ($n_akhir >= 58.5){
            echo "Nilai Huruf : C";
        }elseif ($n_akhir >= 40 ){
            echo "Nilai Huruf : D";
        }else{
            echo "Nilai Huruf : E";
        }
        ?>
    </body>
</html>