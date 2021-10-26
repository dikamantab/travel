@extends('layouts.app')
@section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Jumbotron Template · Bootstrap</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
   <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo-video-catalog.css">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>
<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Apa Kabar Traveller</h1>
      <p>Nikmati hari-harimu dengan berwisata, Ayo Berlibur Ke Kota Batu, nikmati suasana sejuk sepanjang hari</p>
      <p><a class="btn btn-primary btn-lg" href="{{url('form')}}" role="button">Pesan Travel &raquo;</a></p>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <!-- <div class="row">
      <div class="col-md-4">
        <h2>Jatim Park 1</h2>
        <p>Berani berputar satu lingkaran penuh dengan kepala di bawah? Cobalah 360° Pendulum. Ingin uji ketahananmu melaju di roller coaster? Di Jawa Timur Park 1 ada berbagai jenis roller coaster: mulai yang secepat Superman Coaster, seluwes Dragon Coaster, hingga selucu Ulat Coaster. Cobalah total 15 atraksi di Jawa Timur Park 1 - berupa roller coaster, atraksi edukatif-etnik, hingga waterpark - yang pasti akan membuat tamasya kamu penuh wawasan sekaligus kegembiraan! </p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2>Jatim Park 2</h2>
        <p>Temui lebih dari 200 spesies hewan lalu jelajahi museum margasatwa terbesar di Indonesia, semua di hari yang sama. Penasaran bagaimana caranya?

Anda cukup mengunjungi Batu Secret Zoo dan Museum Satwa, pusat margasatwa di Jatim Park 2. Di sini, Anda dapat memilih untuk belajar tentang hewan-hewan unik melalui diorama dan penjelasan di museumnya, atau pergi ke kebun binatang untuk bertemu langsung dengan hewan menggemaskan seperti Squirrel Monkey, Fennec Fox, dan si Lemur yang gemar menari, bahkan berinteraksi dengan beberapa binatang lainnya — Anda bahkan bisa melakukan keduanya! Kunjungan Anda juga semakin tidak terlupakan dengan wahana-wahana seru seperti River Adventure dan lainnya yang dapat dicoba di Happy Land. Untuk melengkapi keseruannya, pastikan Anda mengunjungi spot terbaru bernama Sweet Memory Selfie, di mana Anda dapat menciptakan foto-foto selfie yang unik. Baik Tak diragukan lagi, tempat ini wajib Anda kunjungi kapanpun Anda berkunjung ke Malang! </p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2>Museum Angkut</h2>
        <p>Berdiri di tanah seluas 3,7 hektar, Museum Angkut memiliki ragam koleksi kendaraan yang akan "mengangkut" Anda ke berbagai era! Tercatat sebagai museum transportasi pertama di Asia Tenggara, inilah tempat yang tepat untuk mencari tahu tentang berbagai macam kendaraan, mulai dari delman hingga bus tingkat. Setiap kendaraan dipamerkan dengan latar unik yang merepresentasikan waktu dan tempat di mana kendaraan tersebut biasa digunakan. Sungguh menarik, bukan?

Ajak keluarga tersayang dan maksimalkan liburan Anda di sini. Anda bisa mencoba naik beberapa kendaraannya, lho, bahkan yang antik sekalipun! Anda bahkan dapat merasakan sensasi menerbangkan sebuah pesawat terbang dengan Flight Simulator. Jangan lupa untuk membawa kamera dan berfoto sambil mengendarai motor Vespa di Italia atau berpose dengan bus tingkat di Istana Buckingham!.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
    </div>

    <hr>

  </div> /container -->
  <div class="row tm-catalog-item-list">
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="img/alun.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="{{url('maps1')}}" class="position-absolute tm-img-overlay">
                                   
                                </a>
                            </div>    
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Alun-alun Batu</h3>
                                <p class="tm-catalog-item-text"> Alun-alun Kota Wisata Batu ini adalah satu-satunya alun-alun yang ada di Indonesia dan memiliki wahana bianglala permanen. Ini adalah hal positif dimana pemerintah berupaya untuk menjadikan taman kota sebagai pusat kegiatan masyarakat yang bermanfaat.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="img/jtp1.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="{{url('maps2')}}" class="position-absolute tm-img-overlay">
                                   
                                </a>
                            </div>
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Jatim Park 1</h3>
                                <p class="tm-catalog-item-text">Berani berputar satu lingkaran penuh dengan kepala di bawah? Cobalah 360° Pendulum. Ingin uji ketahananmu melaju di roller coaster? Di Jawa Timur Park 1 ada berbagai jenis roller coaster: mulai yang secepat Superman Coaster, seluwes Dragon Coaster, hingga selucu Ulat Coaster. Cobalah total 15 atraksi di Jawa Timur Park 1 - berupa roller coaster, atraksi edukatif-etnik, hingga waterpark - yang pasti akan membuat tamasya kamu penuh wawasan sekaligus kegembiraan!</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="img/jtp2.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="video-page.html" class="position-absolute tm-img-overlay">
                                   
                                </a>
                            </div>
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Jatim Park 2</h3>
                                <p class="tm-catalog-item-text">Temui lebih dari 200 spesies hewan lalu jelajahi museum margasatwa terbesar di Indonesia, semua di hari yang sama. Penasaran bagaimana caranya?

Anda cukup mengunjungi Batu Secret Zoo dan Museum Satwa, pusat margasatwa di Jatim Park 2. Di sini, Anda dapat memilih untuk belajar tentang hewan-hewan unik melalui diorama dan penjelasan di museumnya, atau pergi ke kebun binatang untuk bertemu langsung dengan hewan menggemaskan seperti Squirrel Monkey, Fennec Fox, dan si Lemur yang gemar menari, bahkan berinteraksi dengan beberapa binatang lainnya — Anda bahkan bisa melakukan keduanya! Kunjungan Anda juga semakin tidak terlupakan dengan wahana-wahana seru seperti River Adventure dan lainnya yang dapat dicoba di Happy Land. Untuk melengkapi keseruannya, pastikan Anda mengunjungi spot terbaru bernama Sweet Memory Selfie, di mana Anda dapat menciptakan foto-foto selfie yang unik. Baik Tak diragukan lagi, tempat ini wajib Anda kunjungi kapanpun Anda berkunjung ke Malang!</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="img/jtp3.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="video-page.html" class="position-absolute tm-img-overlay">
                                   
                                </a>
                            </div>
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Jatim Park 3</h3>
                                <p class="tm-catalog-item-text">Temui selebriti kelas dunia serta tokoh-tokoh mancanegara di The Legend Star, di mana Anda dapat berfoto bersama atlet sepak bola, penyanyi, bahkan presiden! Setelah itu, jelajahi Museum Musik Dunia untuk mengenal lebih dalam tentang sejarah dan alat musik dari berbagai belahan dunia. Saat sudah puas menjelajah dunia musik, lanjutkan hari dengan bertualang ke masa prasejarah dan temui para dinosaurus di Dino Park. Akhiri petualangan Anda dengan bermain bersama menggunakan teknologi terkini, termasuk virtual reality, di Fun Tech Plaza. Benar-benar liburan keluarga yang tak terlupakan!</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="img/musium.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="{{url('maps1')}}" class="position-absolute tm-img-overlay">
                                   
                                </a>
                            </div>
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Museum Angkut</h3>
                                <p class="tm-catalog-item-text">Berdiri di tanah seluas 3,7 hektar, Museum Angkut memiliki ragam koleksi kendaraan yang akan "mengangkut" Anda ke berbagai era! Tercatat sebagai museum transportasi pertama di Asia Tenggara, inilah tempat yang tepat untuk mencari tahu tentang berbagai macam kendaraan, mulai dari delman hingga bus tingkat. Setiap kendaraan dipamerkan dengan latar unik yang merepresentasikan waktu dan tempat di mana kendaraan tersebut biasa digunakan. Sungguh menarik, bukan?

Ajak keluarga tersayang dan maksimalkan liburan Anda di sini. Anda bisa mencoba naik beberapa kendaraannya, lho, bahkan yang antik sekalipun! Anda bahkan dapat merasakan sensasi menerbangkan sebuah pesawat terbang dengan Flight Simulator. Jangan lupa untuk membawa kamera dan berfoto sambil mengendarai motor Vespa di Italia atau berpose dengan bus tingkat di Istana Buckingham!</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="img/bns.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="video-page.html" class="position-absolute tm-img-overlay">
                                   
                                </a>
                            </div>
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Batu Night Spectacular</h3>
                                <p class="tm-catalog-item-text">Jelajahi Batu Night Spectacular, pasar malam penuh warna yang cocok untuk seluruh keluarga! Dari wahana ramah anak sampai yang menguji nyali, serta tempat-tempat berfoto unik, semua dapat Anda nikmati di sini ditemani udara pegunungan yang segar.

Buka dari pukul 3 sore hingga tengah malam, taman ini menawarkan berbagai macam hiburan untuk semua orang. Nikmati beragam wahana yang menguji adrenalin dan menghibur untuk keluarga, seperti Flying Swinger, Rumah Hantu, dan VR Ride. Masuki taman lampion untuk mengabadikan pemandangan lampion berwarna-warni. Jangan lewatkan juga kesempatan menyaksikan pertunjukan air mancur yang spektakuler diikuti pertunjukan multimedia, di mana Anda dapat melihat air mancur menari dengan indah mengikuti alunan musik.</p>
                            </div>
                        </div>
</main>
@endsection