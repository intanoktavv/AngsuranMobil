<?php
if (!isset($_POST["submit"])) {
    header("Location: index.php");
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proses.php</title>
</head>
<body>
    <h1>Hasil Perhitungan</h1>
    <?php
    //var_dump($_POST);

if (isset($_POST["submit"])) {

$nama =trim($_POST ['nama']);
    $email =trim($_POST ['email']);
    $hargamobil =trim($_POST ['hargamobil']);
    $tenor =trim($_POST ['tenor']);
    $dp =trim($_POST ['dp']);
    $hargadpmobil = 0;
    $bunga = 20;
    $jumlahangsuran = 0;

    // repulate
    $query_nama = "nama=" .urlencode($nama);
    $query_email = "email=" .urlencode($email);
    $query_hargamobil = "hargamobil=" .urlencode($hargamobil);
    $query_tenor = "tenor=" .urlencode($tenor);
    $query_dp = "dp=" .urlencode($dp);
    $isi_form = "&$query_nama&$query_email&$query_hargamobil&$query_tenor&$query_dp";

    if (empty($nama)){
    $pesan = urlencode("Nama harus diisi");
    header("Location: index.php?pesan={$pesan}{$isi_form}");
    die();
}

if (empty($email)){
    $pesan = urlencode("Email harus diisi");
    header("Location: index.php?pesan={$pesan}{$isi_form}");
    die();
}
if (empty($hargamobil)){
    $pesan = urlencode("hargamobil harus diisi");
    header("Location: index.php?pesan={$pesan}{$isi_form}");
    die();
}
if (empty($tenor)){
    $pesan = urlencode("tenor harus diisi");
    header("Location: index.php?pesan={$pesan}{$isi_form}");
    die();
}
if (empty($dp)){
    $pesan = urlencode("dp harus diisi");
    header("Location: index.php?pesan={$pesan}{$isi_form}");
    die();
}    


    // mencari harga dp mobil
    if ($dp == 10) {
        $hargadpmobil = ($dp/100) * $hargamobil;
    }elseif ($dp == 20){
        $hargadpmobil = ($dp/100) * $hargamobil;
    }elseif ($dp == 30){
        $hargadpmobil = ($dp/100) * $hargamobil;
    }elseif ($dp == 40){
        $hargadpmobil = ($dp/100) * $hargamobil;
    }elseif ($dp == 50){
        $hargadpmobil = ($dp/100) * $hargamobil;
    }

    // mencari lama angsuran
    $lamaangsuran = 0;
    if ($tenor == 1) {
        $lamaangsuran = $tenor * 12;
    }elseif ($tenor == 2){
        $lamaangsuran = $tenor * 12;

    }elseif ($tenor == 3){
        $lamaangsuran = $tenor * 12;
    }elseif ($tenor == 4){
        $lamaangsuran = $tenor * 12;
    }elseif ($tenor == 5){
        $lamaangsuran = $tenor * 12;
    }

    // mencari bunga
    ($bunga == 20);
        $bunga = 20/100 * $hargamobil;
    

    //mencari jumlah angsuran 
    ($jumlahangsuran == 0);
        $jumlahangsuran = (($hargamobil + $bunga) - $hargadpmobil)/ $lamaangsuran;



    echo "Nama =" . $nama . "<br>"; 
    echo "Email = " .$email . "<br>";
    echo "Harga Mobil = Rp." . $hargamobil . "<br>";
    echo "Tenor =" . $tenor . "Tahun <br>";
    echo "DP =" . $dp . "% <br>";
    echo "DP Mobil =Rp." . $hargadpmobil . "<br>";
    echo "Bunga =Rp." . $bunga . "<br>";
    echo "Lama Angsuran =" . $lamaangsuran .  "Bulan <br>";
    echo "Jumlah Angsuran =Rp." . $jumlahangsuran . "/bulan<br>";

}else{
    echo "silahkan isi datanya";
}
    ?>
</body>
</html>