<?php 
if (isset($_GET["pesan"])){
    $pesan = "<p> {$_GET["pesan"]} <p>";
}
else {
    $pesan ="";
}

// ambil nilai
if (isset($_GET["nama"])){
    $nilai_nama = $_GET["nama"];
}
else{
    $nilai_nama ="";
}
// email
if (isset($_GET["email"])){
    $nilai_email = $_GET["email"];
}
else{
    $nilai_email ="";
}
// 
if (isset($_GET["hargamobil"])){
    $nilai_hargamobil = $_GET["hargamobil"];
}
else{
    $nilai_hargamobil ="";
}

if (isset($_GET["dp"])){
    $nilai_dp = $_GET["dp"];
}
else{
    $nilai_dp ="";
}

if (isset($_GET["tenor"])){
    $nilai_tenor = $_GET["tenor"];
}
else{
    $nilai_tenor ="";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angsuran Mobil</title>
    <!-- css -->
    <link rel="stylesheet" href="style.css">
 
    <!-- bootstrap -->
    <link rel="stylesheet"
       href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <!-- link tailwind -->
<script src="https://cdn.tailwindcss.com"></script>
    


</head>
<body>
    <nav>
        <div class="logo">
            <img src="https://st2.depositphotos.com/9923666/48269/v/450/depositphotos_482692834-stock-illustration-car-garage-premium-concept-logo.jpg" alt="logo">

            AUTOCAR
        </div>

        <ul>
            <li><a href="#beranda">Beranda</a></li>
            <li><a href="#tentang">Tentang Perusahaan</a></li>
            <li><a href="#kontak">Kontak</a></li>
        </ul>
    </nav>


    <!-- slider -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://www.gaikindo.or.id/wp-content/uploads/2021/03/mahal.jpg" class="d-block w-100" alt="gambar1">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color: white">Tentukan Mobil Impianmu</h5>
        <p style="color: white">Pilihan mobil terbaik untuk perjalananmu</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://img.autofun.co.id/file/ce5a8f36fccb4c7db074f3d776b63122.jpg" class="d-block w-100" alt="gambar2">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color: white">Berkendara dengan gaya</h5>
        <p style="color: white">Mobil stylish dengan kualitas yang terpecaya</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://files.belanjamobil.co.id/media/items/None/202510202026116e6a9eb8-byd-sea-lion-7-12.webp" class="d-block w-100" alt="gambar3">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color: white">Saatnya Punya Mobil Impianmu</h5>
        <p style="color: white">Temukan mobil yang nyaman dan aman</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    
<br><br>

<!-- TENTANG PERUSAHAAN -->
<section class="section about" id="tentang">
    <div class="container">
  <div class="row g-4">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card h-100 shadow-sm">
      <div class="card-body">
        <h2 class="card-title">Tentang Perusahaan</h2>
        <p class="card-text">AUTOCAR adalah dealer dan mitra pembiayaan otomotif terpercaya yang siap membantu anda mewujudkan mobil impian. Kami hadirksn baragam pilihan mobil dari brand ternama dengan kondisi terbaik, siap pakai, dan bergaransi.
            Dengan proses yang cepat, transparan, serta didukung mitra leasing terkenal, kami berkomitmen memberikan kemudahan kemitraan dan kenyamanan bertransaksi tanpa beban.
        </p>
        <a href="#" class="btn btn-primary" style="background-color: #2f3f60;">Hubungi kami</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card  h-100 shadow-sm">
      <div class="card-body">
        <img src="https://asset.kompas.com/crops/hzNidZyYNnesjtVY57DmHrJj1K4=/136x146:1224x871/1200x800/data/photo/2026/04/15/69defc8412253.jpg" alt="">
      </div>
    </div>
  </div>
</div>
</div>
</section>



<form action="proses.php" method="POST">
    <h2>Kalkulator Angsuran Mobil</h2>



<!--  -->
<?php echo $pesan ?> <br>

    <label for="">Nama</label>
    <input type="text" name="nama" class="form-control"
    value="<?php echo $nilai_nama ?>">
    

<br><br>

    <label for="">Email</label>
    <input type="email" name="email" id="" class="form-control"
    value="<?php  echo $nilai_email ?>">

    <br><br>
    <label for="">Harga Mobil</label>
    <input type="number" name="hargamobil" id="" class="form-control"
    value="<?php  echo $nilai_hargamobil ?>">

    <br><br>

    <label for="">DP</label>
    <select name="dp" id="" class="form-select" <?php echo $nilai_dp ?>>
        <option value="10" <?php if($nilai_dp == 10){echo "selected";} ?>>10%</option>
        <option value="20" <?php if($nilai_dp == 20){echo "selected";} ?>>20%</option>
        <option value="30" <?php if($nilai_dp == 30){echo "selected";} ?>>30%</option>
        <option value="40" <?php if($nilai_dp == 40){echo "selected";} ?>>40%</option>
        <option value="50" <?php if($nilai_dp == 50){echo "selected";} ?>>50%</option>
        <option value="60" <?php if($nilai_dp == 60){echo "selected";} ?>>60%</option>
    </select>

    <br><br>


    <label class="from-label">Tenor</label>
    <div value="<?php echo $nilai_tenor ?>">
    <input type="radio" name="tenor" id="" value="1" <?php if($nilai_tenor == 1){echo "checked"; }?>>
    <label for="">1 Tahun</label>
    <input type="radio" name="tenor" id="" value="2" <?php if($nilai_tenor == 2){echo "checked"; }?>>
    <label for="">2 Tahun</label>
    <input type="radio" name="tenor" id="" value="3" <?php if($nilai_tenor == 3){echo "checked"; }?>>
    <label for="">3 Tahun</label>
    <input type="radio" name="tenor" id="" value="4" <?php if($nilai_tenor == 4){echo "checked"; }?>>
    <label for="">4 Tahun</label>
    <input type="radio" name="tenor" id="" value="5" <?php if($nilai_tenor == 5){echo "checked"; }?>>
    <label for="">5 Tahun</label>
</div>
    <br><br>

    <input name="submit" type="submit" value="Hitung">

    <br>

    <?php
    //var_dump($_POST);

if (isset($_POST["submit"])) {

    $nama = $_POST ['nama'];
    $hargamobil = $_POST ['hargamobil'];
    $tenor = $_POST ['tenor'];
    $dp = $_POST ['dp'];
    $hargadpmobil = 0;
    $bunga = 20;
    $jumlahangsuran = 0;
    




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
    echo "Email =" . $email . "<br>"; 
    echo "Harga Mobil = Rp." . $hargamobil . "<br>";
    echo "Tenor =" . $tenor . "Tahun <br>";
    echo "DP =" . $dp . "% <br>";
    echo "DP Mobil =Rp." . $hargadpmobil . "<br>";
    echo "Bunga =Rp." . $bunga . "<br>";
    echo "Lama Angsuran =" . $lamaangsuran .  "Bulan <br>";
    echo "Jumlah Angsuran =Rp." . $jumlahangsuran . "<br>";

}else{
    echo "silahkan isi datanya";
}
    ?>


</form>


<footer class="bg-[#111827] text-white" id="kontak">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
              <a href="https://flowbite.com/" class="flex items-center">
                  <img src="https://st2.depositphotos.com/9923666/48269/v/450/depositphotos_482692834-stock-illustration-car-garage-premium-concept-logo.jpg" class="h-7 me-3" alt="FlowBite Logo" />
                  <span class="text-heading self-center text-2xl font-semibold whitespace-nowrap">AUTOCAR</span>
              </a>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-heading uppercase" style="color: white;">Resources</h2>
                  <ul class="text-body font-medium">
                      <li class="mb-4">
                          <a href="https://flowbite.com/" class="hover:underline" style="color: white;">AutoCar</a>
                      </li>
                      <li>
                          <a href="https://tailwindcss.com/" class="hover:underline" style="color: white;">Tailwind CSS</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-heading uppercase"style="color: white;" >Follow us</h2>
                  <ul class="text-body font-medium">
                      <li class="mb-4">
                          <a href="https://github.com/themesberg/flowbite" class="hover:underline " style="color: white;">Github</a>
                      </li>
                      <li>
                          <a href="https://discord.gg/4eeurUVvTy" class="hover:underline" style="color: white;">Discord</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-heading uppercase" style="color: white;">Legal</h2>
                  <ul class="text-body font-medium">
                      <li class="mb-4">
                          <a href="#" class="hover:underline" style="color: white;">Privacy Policy</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline" style="color: white;">Terms &amp; Conditions</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      <hr class="my-6 border-default sm:mx-auto lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between" >
          <span class="text-sm text-body sm:text-center" style="color: white !important;" >© 2026 <a href="https://flowbite.com/" class="hover:underline ">autocar™</a>. All Rights Reserved.
          </span>
          <div class="flex mt-4 sm:justify-center sm:mt-0">
            <a href="#" class="text-body hover:text-heading">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="color: white;" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/></svg>
                <span class="sr-only" style="color: white;">Facebook page</span>
            </a>
            <a href="#" class="text-body hover:text-heading ms-5" style="color: white;">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24" style="color: white;"><path d="M18.942 5.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.586 11.586 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3 17.392 17.392 0 0 0-2.868 11.662 15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.638 10.638 0 0 1-1.706-.83c.143-.106.283-.217.418-.331a11.664 11.664 0 0 0 10.118 0c.137.114.277.225.418.331-.544.328-1.116.606-1.71.832a12.58 12.58 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM8.678 14.813a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.929 1.929 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/></svg>
                <span class="sr-only" style="color: white;">Discord community</span>
            </a>
            <a href="#" class="text-body hover:text-heading ms-5" style="color: white;">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24" style="color: white;"><path d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z"/></svg>
            <span class="sr-only" style="color: white;">Twitter page</span>
            </a>
            <a href="#" class="text-body hover:text-heading ms-5" style="color: white;">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24" style="color: white;"><path fill-rule="evenodd" d="M12.006 2a9.847 9.847 0 0 0-6.484 2.44 10.32 10.32 0 0 0-3.393 6.17 10.48 10.48 0 0 0 1.317 6.955 10.045 10.045 0 0 0 5.4 4.418c.504.095.683-.223.683-.494 0-.245-.01-1.052-.014-1.908-2.78.62-3.366-1.21-3.366-1.21a2.711 2.711 0 0 0-1.11-1.5c-.907-.637.07-.621.07-.621.317.044.62.163.885.346.266.183.487.426.647.71.135.253.318.476.538.655a2.079 2.079 0 0 0 2.37.196c.045-.52.27-1.006.635-1.37-2.219-.259-4.554-1.138-4.554-5.07a4.022 4.022 0 0 1 1.031-2.75 3.77 3.77 0 0 1 .096-2.713s.839-.275 2.749 1.05a9.26 9.26 0 0 1 5.004 0c1.906-1.325 2.74-1.05 2.74-1.05.37.858.406 1.828.101 2.713a4.017 4.017 0 0 1 1.029 2.75c0 3.939-2.339 4.805-4.564 5.058a2.471 2.471 0 0 1 .679 1.897c0 1.372-.012 2.477-.012 2.814 0 .272.18.592.687.492a10.05 10.05 0 0 0 5.388-4.421 10.473 10.473 0 0 0 1.313-6.948 10.32 10.32 0 0 0-3.39-6.165A9.847 9.847 0 0 0 12.007 2Z" clip-rule="evenodd"/></svg>
                <span class="sr-only" style="color: white;">GitHub account</span>
            </a>
            <a href="#" class="text-body hover:text-heading ms-5" style="color: white;">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24" style="color: white;"><path fill-rule="evenodd" d="M12 2a10 10 0 1 0 10 10A10.009 10.009 0 0 0 12 2Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.093 20.093 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM10 3.707a8.82 8.82 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.755 45.755 0 0 0 10 3.707Zm-6.358 6.555a8.57 8.57 0 0 1 4.73-5.981 53.99 53.99 0 0 1 3.168 4.941 32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.641 31.641 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM12 20.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 15.113 13a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/></svg>
                <span class="sr-only" style="color: white;">Dribbble account</span>
            </a>
          </div>
      </div>
    </div>
</footer>



</body>
</html>