<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="center.css">
    <title>About</title>
</head>
<body style="background: linear-gradient(-180deg, #091B34 0%, #152139 100%); background-repeat: no-repeat;">
<!--NAV-->
<nav>
    <ul class="m-nav">
        <li><a href="#">
            <img src="Asset/LOGO WEB POLMED.png" alt="logo" class="logo-image">
        </a></li>
        <li><a href="home.php" class="text active">HOME</a></li>
        <li><a href="materi.php" class="text">MATERI</a></li>
        <li><a href="Ujian.php" class="text">KUISIONER</a></li>
        <li class="ms-auto m-r">
            <a href="logout.php" class="text-b">
                <button class="log-out">
                    Login
                </button>
            </a>
        
        </li>
        
    </ul>
</nav>
<!--NAV-->
    <!--About-->
<div class="container-fluid">
    <h1 class="judul text-center " style="max-width: 60%;margin: 40px auto;">TENTANG KAMI</h1>
    <div class="row m-l m-r gx-4 gy-4 justify-content-center">
        <div class="col-lg-3">
            <div class="card">
              <img
                src="Foto/reihan.jpeg"
                class="card-img-top box3"
                width="50"
                height="200"
                object-fit="fill"
              />
              <div class="card-body">
                <h1 class="text-center card-title-font">Muhammad Reihan</h1>
                <p class="card-title-font-p text-center">
                  Project Leader / Data Analisis
                </p>
              </div>
            </div>
        </div>
        <div class="col-lg-3 mx-5">
            <div class="card">
              <img
                src="Foto/sasa.jpeg"
                class="card-img-top box2"
                width="50"
                height="200"
                object-fit="fill"
              />
              <div class="card-body">
                <h1 class="text-center card-title-font">Danisha Azzahra</h1>
                <p class="card-title-font-p text-center">
                  Data Analisis
                </p>
              </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
              <img
                src="Foto/WhatsApp Image 2024-06-16 at 09.20.53.jpeg"
                class="card-img-top box3"
                width="50"
                height="200"
                object-fit="fill"
              />
              <div class="card-body">
                <h1 class="text-center card-title-font">Shafinna Nur Kamila</h1>
                <p class="card-title-font-p text-center">
                  Web Analisis
                </p>
              </div>
            </div>
        </div>
        <div class="row m-l m-r gx-4 gy-4 justify-content-center">
            <div class="col-lg-3">
                <div class="card">
                  <img
                    src="Foto/gggg.jpg"
                    class="card-img-top box3"
                    width="50"
                    height="200"
                    object-fit="fill"
                  />
                  <div class="card-body">
                    <h1 class="text-cente card-title-font">Ridho Dwi Syailendra</h1>
                    <p class="card-title-font-p text-center">
                      Web Programmer & Web Designer
                    </p>
                  </div>
                </div>
            </div>
            <div class="col-lg-3 mx-5">
                <div class="card">
                  <img
                    src="Foto/DSC02948.jpg"
                    class="card-img-top box3"
                    width="50"
                height="200"
                    object-fit="fill"
                  />
                  <div class="card-body">
                    <h1 class="text-center card-title-font">Alwian Rafif</h1>
                    <p class="card-title-font-p text-center">
                      Web Analisis
                    </p>
                  </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                  <img
                    src="Foto/Rakan.jpeg"
                    class="card-img-top box2"
                    width="50"
                height="200"
                    object-fit="fill"
                  />
                  <div class="card-body">
                    <h1 class="text-center card-title-font">Mohammad Rakan</h1>
                    <p class="card-title-font-p text-center">
                        Web Programmer & Web Designer
                    </p>
                  </div>
                </div>
            </div>
  </div>
</div>

            
    </div>
</div>
    <!--FOOTER-->
    <footer class="text-center m-t">
        <div class="footer-design">
            <div class="row align-items-center">
                <div class="col-lg-2 m-l align-items-center">
                    <img src="Asset/LOGO WEB POLMED.png" width="80%" alt="">
                </div>
                <div class="col-lg-2 m-l my-6 text-center align-items-center">
                    <ul>
                        <li>
                            <a class="text-footer" href="about.php">Tentang Kami</a>
                        </li>
                        <li>
                            <a class="text-footer" href="https://polimedia.ac.id/">Polimedia</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 m-l  justify-content-center">
                    <ul>
                        <li>
                            <a class="text-footer" href="https://www.instagram.com/ppks_polimedia/">Instagram</a>
                        </li>
                        <li>
                            <a class="text-footer" href="wa.me/+6281717292272">Whatsapp</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 m-l my-6 justify-content-center">
                    <ul>
                        <li>
                            <a class="text-footer" href="materi.php">Materi</a>
                        </li>
                        <li>
                            <a class="text-footer" href="Ujian.php">Kuesioner</a>
                        </li>
                    </ul>
                </div>
            </div> 
        </div>
            <div class="footer-design2">
                <p class="text-under">© Ridho Dwi Syailendra 2024 All rights reserved.<br> No part of this website may be reproduced, stored in a retrieval system,<br> or transmitted in any form or by any means without the prior written permission of the copyright owner.</p>
            </div>
    </footer>
<script>
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
crossorigin="anonymous"
</script>

</body>
</html>