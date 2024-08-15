@extends('layouts.main')
@section('container')
<div class="row justify-content-center ">
    <div style="display: flex; align-items: center; background: linear-gradient(to right, #BE85C5, #FFFFFF); padding: 100px;">
        <!-- Konten Anda di sini -->
        <div class="col-lg-6 p-4">
            <h1> Yuk ! <br> Kenalan Tes Psikologi Spandiv  </h1>
            <p class="fs-5">Tes Psikologi Spandiv ini sebuah startup yang bergerak dalam dunia psikologi. 
               Kami adalah sumber terpercaya untuk informasi, tips, dan panduan praktis tentang kesehatan 
               mental, perkembangan pribadi, dan kebahagiaan. Kami memiliki 4 layanan utama yaitu Coaching, 
               Counseling, Mentoring, Analisis data statistik.</p>
        </div>
        <div class="col-lg-6 ml-auto">
            <img src="img/A.png" alt="Deskripsi Gambar" style="max-width: 120%;">
        </div>
    </div>
</div>

<div class="Container-center" style="width: 80%; margin: 40px auto 0 auto; text-align: center;">
    <button href="#about-section" class="btn btn-outline-purple" onclick="scrollToSection('#about-section')" style="width: 20%; margin-right: 5px; border-radius: 20px;">
        About Us
    </button>
    <button href="#contact-section" class="btn btn-outline-purple" onclick="scrollToSection('#contact-section')" style="width: 20%; margin-right: 5px; border-radius: 20px;">
        Contact Us
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

<div id="about-section"  class="container-fluid" style="width: 100%; margin: 60px auto 0 auto;">
    <div class="row justify-content-left">
        <div class="col-md-4" style="background-color: #77337C; color: #fff; padding: 10px; text-align: center; border-radius: 5px; margin-right: auto;">About Us</div>
    </div>
</div>
<div class="row justify-content-center">
    <div style="display: flex; align-items: center; background: #FFFFFF; padding: 20px;">
        <div class="col-lg-4 ml-auto mb-4" style="width: 40%; margin: 60px auto 0 auto;">
            <img src="img/B.png" alt="Deskripsi Gambar" class="img-fluid" style="max-width: 90%;">
        </div>
        <div class="col-lg-6 ml-auto" style="margin-left: 20px;" >
            <h1 style="width: 80%; margin: 40px auto 0 auto; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; color:#77337C;"> Our Story </h1>
            <p class="fs-5" style="width: 90%; margin: 20px auto 0 auto;">Kita berawal dari  mempunyai fitur atau layanan tes psikologi di website spandiv. 
                Karena banyaknya client yang melakukan tes psikologi maka kita membangun sendiri tes psiklogi 
                spandiv ini dan memisahkan dari website spandiv. Maka dari itu, dibangun  Tes Psikologi Spandiv 
                pada tahun 2023. Website ini membantu orang-orang untuk menyelesaikan masalahnya dari psikolog dan 
                layanan dari tes psikologi spandiv. Tes Psikologi Spandiv memiliki 4 layanan yaitu mentoring, 
                konseling, coaching dan analisis data statistik.</p>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div style="display: flex; align-items: center; background: #FFFFFF; padding: 50px; margin: 0px auto 0 auto;">
        <div class="col-lg-6 p-4">
            <h1 style="width: 80%; margin: 10px auto 0 auto; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; color: #77337C;">OUR VISION & MISSION</h1>
            <h2 style="margin: 60px auto 0 auto; color: #77337C;">Vision</h2>
            <p class="fs-5" style="margin: 20px auto 0 auto;">Visi kami adalah menciptakan dunia di mana setiap orang memiliki pemahaman mendalam tentang dirinya sendiri, memanfaatkan kekuatan pribadi mereka, dan meraih potensi maksimal dalam kehidupan pribadi dan profesional mereka.</p>
            <h2 style="margin: 60px auto 0 auto; color: #77337C;">Mission</h2>
            <p class="fs-5 card-text">
                <ul>
                    <li style="font-size: 18px;">Menyediakan tes psikologi yang akurat, valid, dan reliabel untuk mendukung pengambilan keputusan yang tepat dalam berbagai konteks</li>
                    <li style="font-size: 18px;">Memberikan pelayanan yang profesional dan bersahabat</li>
                    <li style="font-size: 18px;">Membangun kerjasama yang strategis dan dinamis dengan institusi lain untuk meningkatkan kinerja dan pelayanan terbaik</li>
                    <li style="font-size: 18px;">Mengembangkan pengetahuan, pengalaman, kreativitas, dan mengedukasi masyarakat tentang pentingnya pemahaman diri melalui tes psikologi</li>
                </ul>
            </p>
        </div>
        <div class="col-lg-6 ml-auto" style="width: 50%; margin: 70px 0px 0 auto;">
            <img src="img/C.png" alt="Deskripsi Gambar" class="img-fluid" style="max-width: 100%;">
        </div>
    </div>
</div>
<style>
.card-text li {
    font-size: 18px;
}
</style>
<script>
    function scrollToSection(sectionId) {
        var section = document.querySelector(sectionId);
        window.scrollTo({
            top: section.offsetTop,
            behavior: 'smooth'
        });
    }
</script>

<div class="col-lg-12 p-4" style="width: 90%; margin: 40px auto 0 auto; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; color:#77337C;">
    <h1> Our Values </h1>
</div>
<!-- Set 1 -->
<div class="row d-flex justify-content-center align-items-center">
    <div class="col-lg-3 mb-4">
        <div class="card shadow">
            <img src="img/Service Excellent.png" class="card-img-top d-block mx-auto" alt="Gambar 1" style="max-width: 30%;">
            <div class="card-body text-center">
                <h5 class="card-title" style="color: #77337C;">Service Excellent</h5>
                <p class="card-text">Bangun kepercayaan dan kepercayaan di antara kami dengan memberikan layanan terbaik.</p>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mb-4">
        <div class="card shadow">
            <img src="img/Professional.png" class="card-img-top d-block mx-auto" alt="Gambar 2" style="max-width: 30%;">
            <div class="card-body text-center">
                <h5 class="card-title" style="color: #77337C;">Professional</h5>
                <p class="card-text">Dengan etika tinggi baik secara pribadi maupun profesional setiap layanan yang kami sediakan.</p>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mb-4">
        <div class="card shadow">
            <img src="img/Adaptability.png" class="card-img-top d-block mx-auto" alt="Gambar 3" style="max-width: 23%;">
            <div class="card-body text-center">
                <h5 class="card-title" style="color: #77337C;">Adaptability</h5>
                <p class="card-text">Kami selalu beradaptasi seiring perkembangan jaman guna memberikan pelayanan yang tepat guna.</p>
            </div>
        </div>
    </div>
</div>

<!-- Set 2 -->
<div class="row d-flex justify-content-center align-items-center">
    <div class="col-lg-3 mb-4">
        <div class="card shadow">
            <img src="img/New Era.png" class="card-img-top d-block mx-auto" alt="Gambar 1" style="max-width: 30%;">
            <div class="card-body text-center">
                <h5 class="card-title" style="color: #77337C;">New Era</h5>
                <p class="card-text">Produk dan layanan yang kami berikan selalu mengikuti trend terbaru, namun mempunyai cirikhas.</p>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mb-4">
        <div class="card shadow">
            <img src="img/Dependability.png" class="card-img-top d-block mx-auto" alt="Gambar 2" style="max-width: 30%; ">
            <div class="card-body text-center">
                <h5 class="card-title" style="color: #77337C;">Dependability</h5>
                <p class="card-text">Layanan yang kami berikan dikerjakan oleh ahlinya yang dapat diandalkan serta profesional.</p>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mb-4">
        <div class="card shadow">
            <img src="img/Innovation.png" class="card-img-top d-block mx-auto" alt="Gambar 3" style="max-width: 30%;">
            <div class="card-body text-center">
                <h5 class="card-title" style="color: #77337C;">Innovation</h5>
                <p class="card-text">Setiap produk yang kami buat di desain menggunakan teknologi terbaru sehingga efisien.</p>
            </div>
        </div>
    </div>
</div>

<!-- Set 3 -->
<div class="row d-flex justify-content-center align-items-center">
    <div class="col-lg-3 mb-4">
        <div class="card shadow">
            <img src="img/Value.png" class="card-img-top d-block mx-auto" alt="Gambar 1" style="max-width: 30%; box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);">
            <div class="card-body text-center">
                <h5 class="card-title" style="color: #77337C;">Value</h5>
                <p class="card-text">Kami membuat produk dan layanan yang menambah nilai dan bermanfaat bagi kehidupan manusia.</p>
            </div>
        </div>
    </div>
</div>
<style>
.card {
    box-shadow: 50px 50px 50px rgba(0, 0, 0, 1);
}
</style>
<script>
    function scrollToSection(sectionId) {
        var section = document.querySelector(sectionId);
        window.scrollTo({
            top: section.offsetTop,
            behavior: 'smooth'
        });
    }
</script>

<div id="contact-section"  class="container-fluid" style="width: 100%; margin: 60px auto 0 auto;">
    <div class="row justify-content-left">
        <div class="col-md-4" style="background-color: #77337C; color: #fff; padding: 10px; text-align: center; border-radius: 5px; margin-right: auto;">Contact Us</div>
    </div>
</div>

<div class="row d-flex justify-content-center align-items-center" style="width: 100%; margin: 60px auto 0 auto;">
    <div class="col-lg-2 mb-3">
        <div class="card shadow">
        <a href="#telepon-section" class="btn card-btn" onclick="scrollToSection('#telepon-section')">
            <img src="img/Phone.png" class="card-img-top d-block mx-auto" alt="Gambar 1" style="max-width: 30%;">
            <div class="card-body text-center">
                <h5 class="card-title" style="color: #77337C;">Telepone</h5>
            </div>
        </a>
        </div>
    </div>
    <div class="col-lg-2 mb-3">
        <div class="card shadow">
            <a href="#email-section" class="btn card-btn" onclick="scrollToSection('#email-section')">
                <img src="img/Email Open.png" class="card-img-top d-block mx-auto" alt="Gambar 2" style="max-width: 30%;">
                <div class="card-body text-center">
                    <h5 class="card-title" style="color: #77337C;">Email</h5>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-2 mb-3">
        <div class="card shadow">
            <a href="#maps-section" class="btn card-btn" onclick="scrollToSection('#maps-section')">
                <img src="img/Map Marker.png" class="card-img-top d-block mx-auto" alt="Gambar 3" style="max-width: 30%;">
                <div class="card-body text-center">
                    <h5 class="card-title" style="color: #77337C;">Maps</h5>
                </div>
            </a>
        </div>
    </div>
</div>
<style>
    .card {
        border-radius: 15px; /* Sesuaikan nilai border radius sesuai keinginan Anda */
        overflow: hidden; /* Pastikan gambar dan konten tidak melintasi batas border radius */
    }

    .card-btn {
        transition: background-color 0.3s ease, color 0.3s ease;
        text-decoration: none; /* Menghapus garis bawah pada tautan */
    }

    .card-btn:hover {
        background-color: #77337C; /* Ganti dengan warna yang diinginkan saat button dihover */
        color: #fff !important; /* Warna teks saat button dihover */
    }

    .card-btn:active {
        background-color: #5e275f; /* Ganti dengan warna yang diinginkan saat button ditekan */
        color: #fff !important; /* Warna teks saat button ditekan */
    }
</style>



<div id="telepon-section" class="col-lg-12 p-4" style="width: 90%; margin: 40px auto 0 auto; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; color:#77337C;">
    <h1> Kontak Telepon </h1>
</div>
    <div class="row">
    <!-- Cards -->
    <div class="col-lg-2 mb-4" style="margin-left: 250px;">
    <!-- Card 1 -->
        <a href="https://wa.me/62895359771137" target="_blank" class="card-link">
            <div class="card shadow" style="margin: 100px 0px 0 auto; background-color:#EBE5EC">
                <img src="img/Phone.png" class="card-img-top d-block mx-auto" alt="Gambar 1" style="max-width: 20%; margin: 20px 0px 0 auto;">
                <div class="card-body text-center">
                    <h5 class="card-title" style="color: #77337C;">Telepon</h5>
                    <p class="card-text">+62895359771137</p>
                </div>
            </div>
        </a>

        <!-- Card 2 -->
        <a href="https://wa.me/62895359771137" target="_blank" class="card-link">
            <div class="card shadow mt-4" style="margin: 100px 0px 0 auto; background-color:#EBE5EC"> <!-- Add margin-top to separate the cards -->
                <img src="img/WhatsApp.png" class="card-img-top d-block mx-auto" alt="Gambar 2" style="max-width: 20%; margin: 20px 0px 0 auto;">
                <div class="card-body text-center">
                    <h5 class="card-title" style="color: #77337C;">Whatsapp</h5>
                    <p class="card-text">+62895359771137</p>
                </div>
            </div>
        </a>
    </div>
    <!-- Description Image -->
    <div class="col-lg-6 ml-auto" style="width: 50%; margin: 40px 0px 0 auto;">
        <img src="img/contact-phone.png" alt="Deskripsi Gambar" class="img-fluid" style="max-width: 100%;">
    </div>
</div>

<script>
    function scrollToSection(sectionId) {
        var section = document.querySelector(sectionId);
        window.scrollTo({
            top: section.offsetTop,
            behavior: 'smooth'
        });
    }
</script>


<div id="email-section" class="col-lg-12 p-4" style="width: 90%; margin: 40px auto 0 auto; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; color:#77337C;">
    <h1> Kontak E-mail </h1>
</div>
    <div class="row">
        <!-- Description Image -->
    <div class="col-lg-6 ml-auto" style="width: 50%; margin: 40px 0px 0 auto;">
        <img src="img/contact-email.png" alt="Deskripsi Gambar" class="img-fluid" style="max-width: 100%;">
    </div>
    <!-- Cards -->
    <div class="col-lg-2 mb-4" style="margin-right: 250px;">
        <!-- Card 1 -->
        <a href="mailto:info@spandiv.xyz" class="card-link">
            <div class="card shadow" style="margin: 100px 0px 0 auto; background-color:#EBE5EC">
                <img src="img/Letter.png" class="card-img-top d-block mx-auto" alt="Gambar 1" style="max-width: 20%; margin: 20px 0px 0 auto;">
                <div class="card-body text-center">
                    <h5 class="card-title" style="color: #77337C;">Email Marketing</h5>
                    <p class="card-text">info@spandiv.xyz</p>
                </div>
            </div>
        </a>

        <!-- Card 2 -->
        <a href="mailto:info@spandiv.xyz" class="card-link">
            <div class="card shadow mt-4" style="margin: 100px 0px 0 auto; background-color:#EBE5EC"> <!-- Add margin-top to separate the cards -->
                <img src="img/Email.png" class="card-img-top d-block mx-auto" alt="Gambar 2" style="max-width: 20%; margin: 20px 0px 0 auto;">
                <div class="card-body text-center">
                    <h5 class="card-title" style="color: #77337C;">Email Customer Service</h5>
                    <p class="card-text">info@spandiv.xyz</p>
                </div>
            </div>
        </a>
    </div>
</div>
<script>
    function scrollToSection(sectionId) {
        var section = document.querySelector(sectionId);
        window.scrollTo({
            top: section.offsetTop,
            behavior: 'smooth'
        });
    }
</script>

<div class="col-lg-12 p-4" style="width: 90%; margin: 60px auto 0 auto; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; color:#77337C;">
    <h1> Temukan Kami di Google Maps </h1>
</div>
<style>
    .map-section {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: left;
        margin-top: 60px;
    }

    .map-details {
        display: flex;
        align-items: right;
        text-align: left;
    }

    .map-icon {
        width: 100px;
        height: 100px;
        margin-right: 10px;
    }

    .map-title {
        font-size: 24px;
        color: #5e275f;
    }

    .map-description {
        margin-top: 15px;
        font-size: 20px;
        color: #5e275f;
    }

    .map-image {
        margin-top: 20px;
        max-width: 100%;
        height: auto;
        border-radius: 5px;
    }

    .open-maps-button {
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #5e275f;
        color: #fff;
        text-decoration: none;
        border-radius: 15px;
        font-size: 16px;
        cursor: pointer;
    }
</style>

    <div class="map-section" style="margin: 60px auto 0 auto;">
    <div class="col-lg-8 ml-auto map-details">
        <img src="img/Location.png" alt="Map Image" class="map-image" style="max-width: 10%;">
        <h5 class="map-title" style="color: #5e275f;">Address</h5>
    </div>
    <p class="col-lg-8 ml-auto map-decription" style="color: #5e275f;">Jl. Jenderal Sudirman No.103, Krobokan, Kec. Semarang Barat, Kota Semarang, Jawa Tengah 50142 50262 Semarang Jawa Tengah Indonesia</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.244445704269!2d110.39625907390743!3d-6.980456268353962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x899e6ccd5b885c33%3A0xf51337faee27cf8e!2sSpandiv%20Digital%20Solutions!5e0!3m2!1sid!2sid!4v1701143299775!5m2!1sid!2sid" width="66%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <a href="https://www.google.com/maps/place/Spandiv+Digital+Solutions/@-6.9810207,110.3966346,17z/data=!4m6!3m5!1s0x899e6ccd5b885c33:0xf51337faee27cf8e!8m2!3d-6.9804616!4d110.398834!16s%2Fg%2F11rtz957fw?authuser=0&entry=ttu" target="_blank" class="open-maps-button">Buka Google Maps</a>
</div>

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