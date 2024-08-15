@extends('layouts.main')

@section('container')
<div class="row justify-content-center ">
    <div style="display: flex; align-items: center; background: linear-gradient(to right, #BE85C5, #FFFFFF); padding: 60px;">
        <!-- Konten Anda di sini -->
        <div class="col-lg-2 ml-auto mb-4" style="width: 40%; margin: 20px auto 0 auto;">
            <img src="/img/coaching.png" alt="Deskripsi Gambar" class="img-fluid" style="max-width: 75%;">
        </div>
        <div class="col-lg-6 p-4">
            <h1> Konseling bersama Psikolog Spandiv </h1>
            <p class="fs-5">Apakah kamu merasa kehilangan kendali dalam hidupmu? Mungkin masalahmu telah mengganggu berbagai aspek kehidupanmu atau bahkan membahayakan diri sendiri atau orang lain? Konsultasikan dengan Psikolog Spandiv</p>
            <button type="button" class="btn btn-primary"
                style="--bs-btn-padding-y: .50rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem; background-color: #77337C; border-color: #77337C; font-weight: 600; border-radius: 18px;">
                Daftar Sekarang
            </button>
        </div>
    </div>
</div>
<div class="Container-center" style="width: 80%; margin: 40px auto 0 auto; text-align: center;">
    <button href="#what-section" class="btn btn-outline-purple" onclick="scrollToSection('#about-section')" style="width: 20%; margin-right: 5px; border-radius: 20px;">
      Apa Itu Mentoring
    </button>
    <button href="#harga-section" class="btn btn-outline-purple" onclick="scrollToSection('#contact-section')" style="width: 20%; margin-right: 5px; border-radius: 20px;">
       Harga Paket
    </button>
    <button href="#testimoni-section" class="btn btn-outline-purple" onclick="scrollToSection('#contact-section')" style="width: 20%; margin-right: 5px; border-radius: 20px;">
       Testimoni
    </button>
    <button href="#jadwal-section" class="btn btn-outline-purple" onclick="scrollToSection('#contact-section')" style="width: 20%; margin-right: 5px; border-radius: 20px;">
       Jadwal Mentoring
    </button>
</div>

<style>
    .btn-outline-purple {
        color: #fff; /* Warna teks putih */
        background-color: #77337C; /* Warna latar belakang ungu muda */
        border: 2px solid #77337C; /* Warna border ungu muda */
        text-align: center;
    }

    .btn-outline-purple:hover, .btn-outline-purple:active {
        border-color: #77337C; /* Warna border saat dihover atau ditekan */
    }
</style>
<div class="row justify-content-center" >
    <div style="display: flex; align-items: center; background: linear-gradient(to bottom, #BE85C5, #FFFFFF); padding: 100px; margin: 40px auto 0 auto;">
        <div class="col-lg-5 p-4" style="margin: 10px;">
            <h1 style="margin-bottom: 150px;"> Apa Sih Konseling Itu? </h1>
            <p class="fs-5 card-text" style="margin-bottom: 190px;" >
            Konseling merupakan proses konsultasi individu dengan seorang Psikolog Spandiv untuk mengatasi masalah kehidupan yang mengganggu aktivitas sehari-hari dan berpotensi membahayakan diri sendiri atau orang lain.
            </p>
        </div>
    <!-- Image Section -->
    <div class="col-lg-4 p-4">
        <h2 style="margin-bottom: -170px;">
            <span style="font-size: 2.5em;">3</span> kamu butuh konseling dengan psikolog
        </h2>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-4 mb-3">
                <div class="card" style="width: 14rem; margin: 0px; background-color: #ffffff; border-radius: 30px;">
                    <div class="card-body" style="color: #000000;"> 
                        <h5 class="card-title">Menyakiti atau membahayakan diri sendiri</h5>
                        <p class="fs-6 card-text">
                        (e.g: Merasa harga diri rendah, pikiran yang menyakiti diri sendiri, gangguan nafsu makan)
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card" style="width: 14rem; margin: 110px; background-color: #ffffff; border-radius: 30px;">
                    <div class="card-body" style="color: #000000;"> 
                        <h5 class="card-title">Menyakiti atau membahayakan orang lain</h5>
                        <p class="fs-6 card-text">
                        (e.g: Merasa harga diri rendah, pikiran yang menyakiti diri sendiri, gangguan nafsu makan)
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card" style="width: 14rem; margin: 220px; background-color: #ffffff; border-radius: 30px;">
                    <div class="card-body" style="color: #000000;"> 
                        <h5 class="card-title">Menyakiti atau membahayakan diri sendiri</h5>
                        <p class="fs-6 card-text">
                        (e.g: Merasa harga diri rendah, pikiran yang menyakiti diri sendiri, gangguan nafsu makan)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<div class="col-lg-12 p-4" style="width: 80%; margin: 0px auto 0 auto; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; color:#000000;">
    <h1> Paket Konsultasi Bersama Mentor Pilihanmu</h1>
</div>

<style>
    .card {
        border: 1px solid #ccc;
        border-radius: 20px;
        padding: 20px;
        margin: 20px;
        width: 300px;
        float: left;
        background-color: #E8E0E9; /* Warna ungu */
        color: #000000; /* Warna teks putih */ 
    }
    .title {
        font-size: 23px;
        font-weight: bold;
        margin-bottom: 15px;
        color: #77337C; /* Warna teks title */
        text-align: center;
    }
    .column {
        display: flex;
        justify-content: space-between;
        width: 100%; /* Menggunakan lebar penuh */
    }
    .list {
        margin-top: 10px;
    }
    .price {
        margin-top: 20px;
        font-size: 18px;
        color: #77337C; /* Warna teks harga */
        text-align: center;
    }
    .discount {
        text-decoration: line-through;
        color: #999;
    }
    .separator {
        width: 100%;
        height: 2px;
        background-color: #000;
        margin: 10px 0;
    }
</style>
<div class="row justify-content-center" >
    <div class="card">
        <div class="title">Paket Bronze</div>
        <div class="separator"></div>
        <div class="column">
            <div>1 sesi</div>
            <div>60 Menit <br> Sesi Konsultasi</div>
        </div>
        <div class="separator"></div>
        <div class="list">
            <div>&#10003; Catatan Konsultasi</div>
            <div>&#10003; Worksheet</div>
            <div>&#10003; Lembar Hasil Coaching</div>
            <div>&#10003; Tes Tanya Jawab</div>
            <div>&#10005; Visualisasi dan Imajinasi</div>
            <div>&#10005; Tes Minat Karier</div>
            <div>&#10005; Pemantauan Progress</div>
            <!-- Add other items here -->
        </div>
        <div class="separator"></div>
        <div class="price">
            Harga: Rp 100.000
            <br>
            <span class="discount">Potongan Harga: Rp 10.000</span>
        </div>
    </div>
    <!-- ... (Card Silver and Gold) ... -->
    <div class="card">
        <div class="title">Paket Silver</div>
        <div class="separator"></div>
        <div class="column">
            <div>2 sesi</div>
            <div>50 Menit <br> Sesi Konsultasi</div>
        </div>
        <div class="separator"></div>
        <div class="list">
            <div>&#10003; Catatan Konsultasi</div>
            <div>&#10003; Worksheet</div>
            <div>&#10003; Lembar Hasil Coaching</div>
            <div>&#10003; Tes Tanya Jawab</div>
            <div>&#10003; Visualisasi dan Imajinasi</div>
            <div>&#10003; Tes Minat Karier</div>
            <div>&#10003; Pemantauan Progress</div>
            <!-- Add other items here -->
        </div>
        <div class="separator"></div>
        <div class="price">
            Harga: Rp 100.000
            <br>
            <span class="discount">Potongan Harga: Rp 10.000</span>
        </div>
    </div>
    <div class="card">
        <div class="title">Paket Gold</div>
        <div class="separator"></div>
        <div class="column">
            <div>3 sesi</div>
            <div>Sepuasnya  <br> Sesi Konsultasi</div>
        </div>
        <div class="separator"></div>
        <div class="list">
            <div>&#10003; Catatan Konsultasi</div>
            <div>&#10003; Worksheet</div>
            <div>&#10003; Lembar Hasil Coaching</div>
            <div>&#10003; Tes Tanya Jawab</div>
            <div>&#10003; Visualisasi dan Imajinasi</div>
            <div>&#10003; Tes Minat Karier</div>
            <div>&#10003; Pemantauan Progress</div>
            <!-- Add other items here -->
        </div>
        <div class="separator"></div>
        <div class="price">
            Harga: Rp 100.000
            <br>
            <span class="discount">Potongan Harga: Rp 10.000</span>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div style="display: flex; flex-direction: column; align-items: center; background: #CEBFCF; padding: 60px; margin: 60px auto 0 auto; text-align: center;">
        <h1 style="color: #000;">Alur Konsultasi</h1>

     <!-- Flow with arrows and descriptions -->
        <div style="display: flex; justify-content: space-around; align-items: center; margin: 50px 0;">

            <!-- Alur 1 -->
            <div style="text-align: center; flex: 1;">
                <img src="/img/pesan.png" alt="Pesan Paket" style="max-width: 40%; height: auto;">
                <h3>Pesan Paket</h3>
                <p>Pilih paket mentoring sesuai kebutuhan kamu</p>
            </div>

            <!-- Arrow 1 -->
            <div style="margin: 20px;">
                <img src="/img/arrow.png" alt="Arrow" style="max-width: 150px; height: auto;">
            </div>

            <!-- Alur 2 -->
            <div style="text-align: center; flex: 1;">
                <img src="/img/jadwal.png" alt="Jadwal Sesi" style="max-width: 55%; height: auto;">
                <h3>Jadwal Sesi</h3>
                <p>Pilih jadwal dan mentormu sendiri</p>
            </div>

            <!-- Arrow 2 -->
            <div style="margin: 20px;">
                <img src="/img/arrow.png" alt="Arrow" style="max-width: 150px; height: auto;">
            </div>

            <!-- Alur 3 -->
            <div style="text-align: center; flex: 1;">
                <img src="/img/konsultasi.png" alt="Jadwal Sesi" style="max-width: 55%; height: auto;">
                <h3>Mulai Konsultasi!</h3>
                <p>Mulai mentoring di ruang konsultasimu</p>
            </div>
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
            <div class="card" style="width: 33rem; margin: 0 10px; background-color: #CEBFCF;">
                <div class="card-body">
                    <div class="user-details">
                        <img src="/img/user2.png" alt="User Image" class="user-image">
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
            <div class="card" style="width: 33rem; margin: 0 10px; background-color: #CEBFCF;">
                <div class="card-body">
                    <div class="user-details">
                        <img src="/img/user2.png" alt="User Image" class="user-image">
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
            <div class="card" style="width: 33rem; margin: 0 10px; background-color: #CEBFCF;">
                <div class="card-body">
                    <div class="user-details">
                        <img src="/img/user1.png" alt="User Image" class="user-image">
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
            <div class="card" style="width: 33rem; margin: 0 10px; background-color: #CEBFCF;">
                <div class="card-body">
                    <div class="user-details">
                        <img src="/img/user1.png" alt="User Image" class="user-image">
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
<div class="col-lg-12 p-4" style="width: 90%; margin: 60px auto 0 auto; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; color:#000000;">
    <h1> Jadwal Terdekat</h1>
</div>


<div class="col-lg-12 p-4" style="width: 90%; margin: 60px auto 0 auto; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; color:#000000;">
    <h1> Terima Kasih Telah Mempercayai Kami</h1>
</div>
<div class="d-flex justify-content-between" style="width: 85%; margin: 40px auto 0 auto;">
    <div style="width: 20%; margin-right: 7px;">
        <img src="/img/like.png" class="card-img-top d-block mx-auto" alt="Gambar 1" style="max-width: 45%;">
    </div>
    <div style="width: 20%; margin-right: 7px;">
        <img src="/img/content.png" class="card-img-top d-block mx-auto" alt="Gambar 2" style="max-width: 45%;">
    </div>
    <div style="width: 20%; margin-right: 7px;">
        <img src="/img/counseling.png" class="card-img-top d-block mx-auto" alt="Gambar 3" style="max-width: 45%;">
    </div>
    <div style="width: 20%; margin-right: 7px;">
        <img src="/img/love.png" class= "card-img-top d-block mx-auto" alt="Gambar 4" style="max-width: 45%;">
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