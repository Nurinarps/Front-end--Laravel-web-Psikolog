@extends('layouts.main')
@section('container')
<div class="row justify-content-center ">
    <div style="display: flex; align-items: center; background: linear-gradient(to right, #BE85C5, #FFFFFF); padding: 110px;">
        <!-- Konten Anda di sini -->
        <div class="col-lg-6 p-4">
            <h1> Tes Psikolog </h1>
            <p class="fs-5">Yuk cari tahu minat atau passionmu serta potensi dan bakatmu yang dapat menunjang karier atau usaha yang sedang atau akan kamu jalani!</p>
            <button type="button" class="btn btn-primary"
                style="--bs-btn-padding-y: .50rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem; background-color: #77337C; border-color: #77337C; font-weight: 600; border-radius: 18px;">
                Daftar Sekarang
            </button>
        </div>
        <div class="col-lg-4 ml-auto mb-4" style="width: 50%; margin: 40px auto 0 auto;">
            <img src="img/p.png" alt="Deskripsi Gambar" class="img-fluid" style="max-width: 100%;">
        </div>
    </div>
</div>

<div class="card-group" style="width: 85%; margin: 30px auto 0 auto;">
    <div class="card shadow" style="width: 10rem;">
        <img src="img/1.png" class="card-img-top d-block mx-auto" alt="Gambar 1" style="max-width: 40%;">
        <div class="card-body text-center">
            <h5 class="card-title" style="color: #77337C;">Mentoring</h5> <!-- Ganti warna teks judul disini -->
            <p class="card-text">Kamu akan berbicara dengan Mentor Terlatih untuk mencari solusi masalah bersama.</p>
        </div>
    </div>
    <div class="card shadow" style="width: 20rem;">
        <img src="img/3.png" class="card-img-top d-block mx-auto" alt="Gambar 2" style="max-width: 40%;">
        <div class="card-body text-center">
            <h5 class="card-title" style="color: #77337C;">Coaching</h5> <!-- Ganti warna teks judul disini -->
            <p class="card-text">Maksimalkan potensi Anda melalui sesi coaching bersama ahli kami.</p>
        </div>
    </div>
    <div class = "card shadow" style="width: 20rem;">
        <img src="img/4.png" class="card-img-top d-block mx-auto" alt="Gambar 3" style="max-width: 40%;">
        <div class="card-body text-center">
            <h5 class="card-title" style="color: #77337C;">Counseling</h5> <!-- Ganti warna teks judul disini -->
            <p class="card-text">Dapatkan solusi untuk masalah kehidupan Anda dengan konsultasi pribadi bersama Psikolog Spandiv.</p>
        </div>
    </div>
    <div class="card shadow" style="width: 20rem;">
        <img src="img/2.png" class="card-img-top d-block mx-auto" alt="Gambar 4" style="max-width: 40%;">
        <div class="card-body text-center">
            <h5 class="card-title" style="color: #77337C;">Analisis Data Statistik</h5> <!-- Ganti warna teks judul disini -->
            <p class="card-text">Semua bisa kami kerjakan dengan tepat dan akurat. Kamu juga bebas berkonsultasi loh.</p>
        </div>
    </div>
</div>
<style>
.card-group {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
</style>

<div class="container-fluid" style="width: 100%; margin: 60px auto 0 auto;">
    <div class="row justify-content-left">
        <div class="col-md-4" style="background-color: #77337C; color: #fff; padding: 10px; text-align: center; border-radius: 5px; margin-right: auto;">MULTI USER & MULTI AKSES</div>
    </div>
</div>

<div class="row justify-content-center">
    <div style="display: flex; align-items: center; background: linear-gradient(to bottom, #BE85C5, #FFFFFF); padding: 20px;">
        <div class="col-lg-4 ml-auto mb-4" style="width: 50%; margin: 60px auto 0 auto;">
            <img src="img/5.png" alt="Deskripsi Gambar" class="img-fluid" style="max-width: 100%;">
        </div>
        <div class="col-lg-5 ml-auto" >
            <p class="fs-5">Sistem kami didesain untuk multi user dengan akses yang bervariasi. Peserta tes juga dapat diberikan akses tes yang sesuai, baik secara individu maupun klasikal (massal) dengan sekali klik.</p>
        </div>
    </div>
</div>

<div class="d-flex justify-content-between" style="width: 85%; margin: 40px auto 0 auto;">
    <button class="btn btn-outline-purple" style="width: 20%; margin-right: 7px;">
        <img src="img/register.png" class="card-img-top d-block mx-auto" alt="Gambar 1" style="max-width: 45%;">
    </button>
    <button class="btn btn-outline-purple" style="width: 20%; margin-right: 7px;">
        <img src="img/login.png" class="card-img-top d-block mx-auto" alt="Gambar 2" style="max-width: 45%;">
    </button>
    <button class="btn btn-outline-purple" style="width: 20%; margin-right: 7px;">
        <img src="img/pilih_projek.png" class="card-img-top d-block mx-auto" alt="Gambar 3" style="max-width: 45%;">
    </button>
    <button class="btn btn-outline-purple" style="width: 20%; margin-right: 7px;">
        <img src="img/token.png" class="card-img-top d-block mx-auto" alt="Gambar 4" style="max-width: 45%;">
    </button>
    <button class="btn btn-outline-purple" style="width: 20%;">
        <img src="img/mulai_tes.png" class="card-img-top d-block mx-auto" alt="Gambar 5" style="max-width: 45%;">
    </button>
</div>
<style>
    .btn-outline-purple {
        color: #fff; /* Warna ungu muda */
        background-color: #be85c5;
        border: 2px solid #be85c5; /* Warna border ungu muda */
    }
</style>

<div class="d-flex justify-content-between" style="width: 90%; margin: 20px auto 0 auto;">
    <div class="card-body text-center" style="width: 20%; margin-right: 10px;">
        <h5 class="card-text-center" style="width: 120%; color: #77337C;">Register</h5>
    </div>
    <div class="card-body text-center" style="width: 20%; margin-right: 10px;">
        <h5 class="card-text-center" style="width: 110%; color: #77337C;">Login</h5>
    </div>
    <div class="card-body text-center" style="width: 20%; margin-right: 10px;">
        <h5 class="card-text-center" style="width: 90%; color: #77337C;">Pilih Project</h5>
    </div>
    <div class="card-body text-center" style="width: 20%; margin-right: 10px;">
        <h5 class="card-text-center"style="width: 80%; color: #77337C;">Masukkan Token</h5>
    </div>
    <div class="card-body text-center" style="width: 20%;">
        <h5 class="card-text-center"style="width: 70%; color: #77337C;">Mulai Tes</h5>
    </div>
</div>

<div class="col-lg-12 p-4" style="width: 90%; margin: 60px auto 0 auto; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; color:#77337C;">
    <h1> Pilih tes sesuai kebutuhanmu dengan mudah </h1>
    <p>Spandiv memberikanmu akses ke beragam pilihan tes psikologi yang dirancang untuk membantu kamu menggali potensimu secara mudah dan cepat. Meskipun banyak orang mungkin berpikir bahwa psikotes itu rumit dan membingungkan, dengan aplikasi psikotes kami, kami ingin memudahkan prosesnya bagi semua orang. Dengan antarmuka yang intuitif dan tes yang disesuaikan dengan kebutuhanmu, kamu dapat menjalani proses penilaian diri dengan nyaman dan efisien, tanpa perlu merasa terintimidasi olehnya.</p>
</div>

<div class="card-group" style="width: 85%; margin: 40px auto 0 auto;">
    <div class="card shadow" style="width: 18rem; margin-right: 5px;">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div style="width: 150%; margin: 1px auto 0 auto;">
                <h6 class="card-text">RMIB</h6>
            </div>
                <p class="card-text" style="width: 200%; margin: 1px auto 0 auto;">Rothwell Miller Interest Blank</p>
            <div>
                <p class="card-text" style="width: 75%; margin: 1px auto 0 auto;">9 Soal <img src="img/sticky-note.png" class="card-img-top" alt="sticky-note" style="max-width: 30%;"></p>
            </div>
        </div>
    </div>
</div>
<div class="card-group" style="width: 85%; margin: 0px auto 0 auto;">
    <div class="card shadow" style="width: 18rem; margin-right: 5px;">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div style="width: 150%; margin: 0px auto 0 auto;">
                <h6 class="card-text">SDI</h6>
            </div>
                <p class="card-text" style="width: 200%; margin: 0px auto 0 auto;">Strong Deployment Inventory</p>
            <div>
                <p class="card-text" style="width: 75%; margin: 0px auto 0 auto;">20 Soal <img src="img/sticky-note.png" class="card-img-top" alt="sticky-note" style="max-width: 30%;"></p>
            </div>
        </div>
    </div>
</div>
<div class="card-group" style="width: 85%; margin: 0px auto 0 auto;">
    <div class="card shadow" style="width: 18rem; margin-right: 5px;">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div style="width: 150%; margin: 0px auto 0 auto;">
                <h6 class="card-text">DISC</h6>
            </div>
                <p class="card-text" style="width: 200%; margin: 0px auto 0 auto;">Dominance, Influence, Conscitieous dan Steadiness</p>
            <div>
                <p class="card-text" style="width: 75%; margin: 0px auto 0 auto;">24 Soal <img src="img/sticky-note.png" class="card-img-top" alt="sticky-note" style="max-width: 30%;"></p>
            </div>
        </div>
    </div>
</div>
<div class="card-group" style="width: 85%; margin: 0px auto 0 auto;">
    <div class="card shadow" style="width: 18rem; margin-right: 5px;">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div style="width: 150%; margin: 0px auto 0 auto;">
                <h6 class="card-text">DISC</h6>
            </div>
                <p class="card-text" style="width: 200%; margin: 0px auto 0 auto;">Dominance, Influence, Conscitieous dan Steadiness</p>
            <div>
                <p class="card-text" style="width: 75%; margin: 0px auto 0 auto;">40 Soal <img src="img/sticky-note.png" class="card-img-top" alt="sticky-note" style="max-width: 30%;"></p>
            </div>
        </div>
    </div>
</div>
<div class="card-group" style="width: 85%; margin: 0px auto 0 auto;">
    <div class="card shadow" style="width: 18rem; margin-right: 5px;">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div style="width: 150%; margin: 0px auto 0 auto;">
                <h6 class="card-text">MSDT</h6>
            </div>
                <p class="card-text" style="width: 200%; margin: 0px auto 0 auto;">Management Style Diagnostic Test</p>
            <div>
                <p class="card-text" style="width: 75%; margin: 0px auto 0 auto;">64 Soal <img src="img/sticky-note.png" class="card-img-top" alt="sticky-note" style="max-width: 30%;"></p>
            </div>
        </div>
    </div>
</div>
<div class="card-group" style="width: 85%; margin: 0px auto 0 auto;">
    <div class="card shadow" style="width: 18rem; margin-right: 5px;">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div style="width: 150%; margin: 0px auto 0 auto;">
                <h6 class="card-text">Papikostick</h6>
            </div>
                <p class="card-text" style="width: 200%; margin: 0px auto 0 auto;">Personality and Preference Inventory Test</p>
            <div>
                <p class="card-text" style="width: 75%; margin: 0px auto 0 auto;">90 Soal <img src="img/sticky-note.png" class="card-img-top" alt="sticky-note" style="max-width: 30%;"></p>
            </div>
        </div>
    </div>
</div>
<div class="card-group" style="width: 85%; margin: 0px auto 0 auto;">
    <div class="card shadow" style="width: 18rem; margin-right: 5px;">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div style="width: 150%; margin: 0px auto 0 auto;">
                <h6 class="card-text">IST</h6>
            </div>
                <p class="card-text" style="width: 200%; margin: 0px auto 0 auto;">Intelligence Structure Test</p>
            <div>
                <p class="card-text" style="width: 75%; margin: 0px auto 0 auto;">176 Soal <img src="img/sticky-note.png" class="card-img-top" alt="sticky-note" style="max-width: 30%;"></p>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div style="display: flex; align-items: center; background: #CEBFCF; padding: 60px; margin: 60px auto 0 auto;">
        <div class="col-lg-6 p-4">
            <h2> Bisa diakses dengan mudah di mana saja dan kapan saja. </h2>
            <p class="fs-6" style="margin: 20px auto 0 auto;">Dengan desain yang mudah digunakan, pengalaman tes psikologis menjadi lebih berkesan. Aplikasi ini dapat diakses dari berbagai perangkat, mulai dari laptop, tablet, hingga smartphone, berkat desain yang responsif.</p>
        </div>
        <div class="col-lg-5 ml-auto" style="width: 50%; margin: 60px auto 0 auto;">
            <img src="img/bg-user.png" alt="Deskripsi Gambar" class="img-fluid" style="max-width: 100%;">
        </div>
    </div>
</div>

<div class="container-fluid" style="width: 85%; margin: 50px auto 0 auto;">
    <div class="row justify-content-center">
       <div class="col-md-11" style="background-color: #77337C; color: #fff; padding: 10px; text-align: center; border-radius: 5px;">TESTIMONI</div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
<style>
    .star-yellow {
        color: orange;
    }

    .user-details {
        display: flex;
        align-items: center;
    }

    .user-image {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .rating {
        margin-bottom: 10px;
    }

    .card {
        border-radius: 40px; /* Menambahkan corner radius 10px pada card */
    }
</style>
<div class="container" style="width: 85%; margin: 30px auto 0 auto;">
    <div class="row">
        <div class="col-md-6">
            <div class="card" style="width: 33rem; margin: 0 10px; background-color: #D7D7D7;">
                <div class="card-body">
                    <div class="user-details">
                        <img src="img/user2.png" alt="User Image" class="user-image">
                        <h5 class="card-title">User</h5>
                    </div>
                    <div class="rating">
                        <i class="fas fa-star star-yellow"></i>
                        <i class="fas fa-star star-yellow"></i>
                        <i class="fas fa-star star-yellow"></i>
                        <i class="fas fa-star star-yellow"></i>
                        <i class="fas fa-star star-yellow"></i>
                    </div>
                    <p class="card-text">"Tingkatkan pemahaman diri Anda dengan psikotes Spandiv. 
                        Pengalaman positif saya dengan psikolog profesional mereka membuat saya lebih siap menghadapi hidup."</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 33rem; margin: 0 10px; background-color: #D7D7D7;">
                <div class="card-body">
                    <div class="user-details">
                        <img src="img/user2.png" alt="User Image" class="user-image">
                        <h5 class="card-title">User</h5>
                    </div>
                    <div class="rating">
                        <i class="fas fa-star star-yellow"></i>
                        <i class="fas fa-star star-yellow"></i>
                        <i class="fas fa-star star-yellow"></i>
                        <i class="fas fa-star star-yellow"></i>
                        <i class="fas fa-star star-yellow"></i>
                    </div>
                    <p class="card-text">"Spandiv memberikan psikotes informatif dan bimbingan profesional yang 
                        mempersiapkan saya untuk menghadapi hidup dengan lebih baik. Alat pertumbuhan pribadi yang luar biasa!"</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6" style="margin-top: 20px;">
            <div class="card" style="width: 33rem; margin: 0 10px; background-color: #D7D7D7;">
                <div class="card-body">
                    <div class="user-details">
                        <img src="img/user1.png" alt="User Image" class="user-image">
                        <h5 class="card-title">User</h5>
                    </div>
                    <div class="rating">
                        <i class="fas fa-star star-yellow"></i>
                        <i class="fas fa-star star-yellow"></i>
                        <i class="fas fa-star star-yellow"></i>
                        <i class="fas fa-star star-yellow"></i>
                        <i class="fas fa-star star-yellow"></i>
                    </div>
                    <p class="card-text">"Spandiv memberikan pengalaman psikotes yang bermanfaat, 
                        dengan panduan profesional yang memungkinkan saya lebih siap dalam menghadapi perjalanan hidup."</p>
                </div>
            </div>
        </div>
        <div class="col-md-6" style="margin-top: 20px;">
            <div class="card" style="width: 33rem; margin: 0 10px; background-color: #D7D7D7;">
                <div class="card-body">
                    <div class="user-details">
                        <img src="img/user1.png" alt="User Image" class="user-image">
                        <h5 class="card-title">User</h5>
                    </div>
                    <div class="rating">
                        <i class="fas fa-star star-yellow"></i>
                        <i class="fas fa-star star-yellow"></i>
                        <i class="fas fa-star star-yellow"></i>
                        <i class="fas fa-star star-yellow"></i>
                        <i class="fas fa-star star-yellow"></i>
                    </div>
                    <p class="card-text">"Saya ingin berbagi pengalaman positif saya dengan Spandiv. Psikotes mereka sangat membantu dan psikolognya profesional.
                        Spandiv alat pertumbuhan pribadi yang hebat!"</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="width: 100%; margin: 60px auto 0 auto;">
    <div class="row justify-content-left">
        <div class="col-md-4" style="background-color: #77337C; color: #fff; padding: 10px; text-align: center; border-radius: 5px; margin-right: auto;">ARTIKEL</div>
    </div>
</div>

<section>
  <div class="row">
    <div class="col-sm-6 mb-3 mb-sm-0">
      <div class="card">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="img/blog2.png" class="card-img" alt="Gambar 1" style="width: 250px; height: 310px;">
          </div>
          <div class="col-md-8">
            <div class="card-body" style="margin-left: 20px;"> <!-- Menggeser ke kanan -->
              <h5 class="card-title"> "Pentingnya Self-Assessment dalam Pengembangan Karier Anda"</h5>
              <p class="card-text">Dalam menjalani perjalanan karier, terkadang kita dapat terjebak dalam rutinitas sehari-hari 
                yang membuat kita lupa untuk merenung tentang diri sendiri. Self-assessment, atau penilaian diri, 
                adalah langkah penting dalam pengembangan karier yang seringkali diabaikan oleh banyak orang..</p>
              <a href="#" class="btn btn-read-more" style="background-color: white; color: #77337C; border-color: #77337C;border-radius: 50px; font-weight: bold;">Lihat Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="img/blog1.png" class="card-img" alt="Gambar 2" style="width: 250px; height: 310px;">
          </div>
          <div class="col-md-8">
            <div class="card-body" style="margin-left: 20px;"> <!-- Menggeser ke kanan -->
              <h5 class="card-title">Mengenal Diri: Langkah Awal Menuju Kesejahteraan Pribadi</h5>
              <p class="card-text">Kehidupan yang penuh dengan tuntutan dan tekanan seringkali membuat kita lupa untuk merenung tentang diri sendiri. Namun, mengenal diri adalah kunci menuju kesejahteraan pribadi yang sejati. Artikel ini akan membahas pentingnya self-discovery dalam meningkatkan kualitas hidup kita.</p>
              <a href="#" class="btn btn-read-more" style="background-color: white; color: #77337C; border-color: #77337C;border-radius: 50px; font-weight: bold;">Lihat Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="row justify-content-center">
    <div style="display: flex; align-items: center; background: #CEBFCF; padding: 60px; margin: 60px auto 0 auto;">
        <div class="col-lg-6 p-4">
            <h3> Sudah saatnya untuk meraih hidup yang lebih penuh kebahagiaan, ketenangan, dan kepercayaan diri. </h3>
            <div class="card" style="width: 30rem; margin: 30px 0 0 0; background-color: #77337C; border-radius: 10px;">
        <div class="card-body" style="color: #ffffff;"> 
            <h5 class="card-title">Jadwalkan sesi konseling online pertamamu!</h5>
            <p class="fs-1 card-text">
            <ul>
                <li>Booking instan (&lt; 5 menit)</li>
                <li>Praktis tanpa harus kontak admin</li>
                <li>Fitur gratis e-journaling &amp; breathing!</li>
            </ul>
            </p>
            <a href="#" class="btn btn-read-more" style="background-color: white; color: #77337C; border-color: #77337C; border-radius: 50px; font-weight: bold;">Daftar Sekarang</a>
        </div>
        </div>
        </div>
        <div class="col-lg-6 ml-auto" style="width: 54%; margin: 40px auto 0 auto;">
            <img src="img/bg-loveme.png" alt="Deskripsi Gambar" class="img-fluid" style="max-width: 89%;">
        </div>
    </div>
</div>

    <style>
        .event-buttons {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .event-description {
            display: none;
            text-align: center;
        }

        .event-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }

        .event-title {
            font-size: 20px;
            margin: 10px 0;
        }

        .event-button {
            width: 145px; /* Atur lebar tombol */
            height: 40px; /* Atur tinggi tombol */
            background-color: #D0D0D0;
            color: #77337C;
            border: none;
            border-radius: 20px;
            cursor: pointer;
        }

        .event-button-container {
            display: flex;
            align-items: center; /* Memusatkan tombol-tombol secara horizontal */
            margin-top: 20px; /* Mengatur jarak ke atas */
        }

        .event-button {
            margin-right: 10px;
            transition: background-color 0.3s; /* Transisi perubahan warna latar belakang */
        }
        .event-button:active {
            background-color: transparent; /* Tombol dengan latar belakang transparan saat aktif */
            border: 2px solid #fff; /* Menambahkan border saat tombol aktif */
            color: #77337C; /* Mengubah warna teks saat tombol aktif */
        }
    </style>
       <div class="event-buttons">
        <div class="event-button-container">
            <button class="event-button" onclick="showEvent('event')">Event</button>
            <button class="event-button" onclick="showEvent('webinar')">Webinar</button>
            <button class="event-button" onclick="showEvent('workshop')">Workshop</button>
            <button class="event-button" onclick="showEvent('bootcamp')">Bootcamp</button>
        </div>
    </div>
   <div class="event-description" id="event-description">
        <div>
            <img src="img/port.png" alt="Webinar Image" class="event-image">
        </div>
        <p>Kami menyediakan pembelajaran langsung melalui platform Zoom
             dengan mentor dan psikolog handal dari Spandiv.</p>
        <div>
        <button class="event-button">Selanjutnya</button>
        </div>
    </div>
      <div class="event-description" id="webinar-description">
        <div>
            <img src="webinar-image.jpg" alt="Webinar Image" class="event-image">
        </div>
        <p>Deskripsi singkat tentang webinar ini.</p>
        <button class="event-button">Selanjutnya</button>
    </div>
      <div class="event-description" id="workshop-description">
        <div>
            <img src="webinar-image.jpg" alt="Webinar Image" class="event-image">
        </div>
        <p>Deskripsi singkat tentang webinar ini.</p>
        <button class="event-button">Selanjutnya</button>
    </div>
     <div class="event-description" id="bootcamp-description">
        <div>
            <img src="webinar-image.jpg" alt="Webinar Image" class="event-image">
        </div>
        <p>Deskripsi singkat tentang webinar ini.</p>
        <button class="event-button">Selanjutnya</button>
    </div>

      <script>
        function showEvent(eventType) {
            document.getElementById('event-description').style.display = 'none';
            document.getElementById('webinar-description').style.display = 'none';
            document.getElementById('workshop-description').style.display = 'none';
            document.getElementById('bootcamp-description').style.display = 'none';
            document.getElementById(eventType + '-description').style.display = 'flex';
        }
    </script>
<div class="col-lg-12 p-4" style="width: 90%; margin: 60px auto 0 auto; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; color:#000000;">
    <h1> Terima Kasih Telah Mempercayai Kami</h1>
</div>
<div class="d-flex justify-content-between" style="width: 85%; margin: 40px auto 0 auto;">
    <div style="width: 20%; margin-right: 7px;">
        <img src="img/like.png" class="card-img-top d-block mx-auto" alt="Gambar 1" style="max-width: 45%;">
    </div>
    <div style="width: 20%; margin-right: 7px;">
        <img src="img/content.png" class="card-img-top d-block mx-auto" alt="Gambar 2" style="max-width: 45%;">
    </div>
    <div style="width: 20%; margin-right: 7px;">
        <img src="img/counseling.png" class="card-img-top d-block mx-auto" alt="Gambar 3" style="max-width: 45%;">
    </div>
    <div style="width: 20%; margin-right: 7px;">
        <img src="img/love.png" class= "card-img-top d-block mx-auto" alt="Gambar 4" style="max-width: 45%;">
    </div>
</div>
<div class="d-flex justify-content-between" style="width: 90%; margin: 20px auto 0 auto;">
    <div class="card-body text-center" style="width: 20%; margin-right: 10px;">
        <h5 class="card-text-center" style="width: 100%; color: #000000;">200k+</h5>
        <p class="card-text"style="width: 100%;">Followers</p>
    </div>
    <div class="card-body text-center" style="width: 20%; margin-right: 10px;">
        <h5 class="card-text-center" style="width: 100%; color: #000000;">200k+</h5>
        <p class="card-text"style="width: 99%;">Content</p>
    </div>
    <div class="card-body text-center" style="width: 20%; margin-right: 10px;">
        <h5 class="card-text-center" style="width: 100%; color: #000000;">200k+</h5>
        <p class="card-text"style="width: 100%;">Konseling</p>
    </div>
    <div class="card-body text-center" style="width: 20%; margin-right: 10px;">
        <h5 class="card-text-center"style="width: 105%; color: #000000;">200k+</h5>
        <p class="card-text" style="width: 102%;">Self love</p>
    </div>
</div>

@endsection

