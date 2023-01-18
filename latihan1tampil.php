<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    


    
<center>

<?php

        if ( $_SERVER ['REQUEST_METHOD'] ==  "POST") {

            $nama = $_POST ['nama'];
            $romb = $_POST ['rom'];
            $nis = $_POST ['nis'];
            $ray = $_POST ['ray'];




            echo "Selamat Datang, $nama ! <br/r>";
            echo "Rombel: $romb, ";
            echo "NIS: $nis, ";
            echo "Rayon: $ray, ";







        }




    ?>
    </center>
    <hr>
    <h2>Data Nilai</h2  >

<?php

if ( $_SERVER ['REQUEST_METHOD'] ==  "POST") {


    $mapel1 = $_POST  ['mapel1'];
    $mapel2 = $_POST  ['mapel2'];
    $mapel3 = $_POST  ['mapel3'];
    $mapel4 = $_POST  ['mapel4'];
    $mapel5 = $_POST  ['mapel5'];
    $mapel6 = $_POST  ['mapel6'];
    $mapel7 = $_POST  ['mapel7'];

    $rata2 = $mapel1+$mapel2+$mapel3+$mapel4+$mapel5+$mapel6+$mapel7;
    $rata2 = $rata2/7;

    echo "Rata-Rata : $rata2 <br/r> ";

    if ($rata2 > "100") {
        echo "Angka Tidak Valid ";

      } elseif($rata2 <="100"){
        echo "Nilai Yang Kamu Dapatkan Adalah A!";
      }elseif ($rata2 >= "85") {
        echo "Nilai Yang Kamu Dapatkan Adalah B!";
      } elseif ($rata2 >= "65") {
        echo "Nilai Yang Kamu Dapatkan Adalah C!";
      } elseif ($rata2 >= "45") {
        echo "Nilai Yang Kamu dDapatkan Adalah D!";
      }else {
        echo "Anda Butuh Perbaikan!";
      }

      echo "<br/r> ";


      $max = max($mapel1,$mapel2,$mapel3,$mapel4,$mapel5,$mapel6,$mapel7);
      echo "Nilai terbesar : " .$max   ;
      echo "<br/r>";
      $min = min($mapel1,$mapel2,$mapel3,$mapel4,$mapel5,$mapel6,$mapel7);
      echo "Nilai terkecil : " .$min  ;
      echo "<br/r>";

    }



?>
<h3>Nama Anggota</h3>
<p>M. Sulistio Fauzi</p>
<p>Najwan Hisyam</p>
<p>M. Reyhan Aulia Treeana</p>
<p>Andhika Surya Elang Pratama</p>
<p>Louis Marchall Joheart Cardoso</p>



</body>
</html>