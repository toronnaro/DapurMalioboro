<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/card.css">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>dapur Malioboro | Home</title>
</head>
<body>
    @extends('layout.main')
    @section('container')
    {{-- swiper --}}

    {{-- about --}}
    <div class="about">
        <p class="font-about-title">TENTANG DAPUR MALIOBORO</p>
        <p class="font-about-subtext">Terasa Seperti Makanan Jadoel Jawa</p>
    </div>

    {{-- recomendation menu --}}
    <section class="popmenus" id="popmenus">
        <div class="heading">
            <h1>Our Popular Menu's <br><span>Menu Preview's</span></h1>
                <a href="Menu" class="btn">Check More<i class="bx"></i></a>
        </div>
        {{-- popmenu content --}}
        <section class="category">
            <div class="list-items">
                <div class="card-list">
                    {{-- box 1 --}}
                    <div class="card">
                        <img src="image/nasigorengkampung.jpg" alt="">
                        <div class="food-title">
                            <h1>Nasi Goreng Kampung</h1>
                        </div>
                        <div class="desc-food">
                            <p>Makanan Khas Jawa berupa nasi yang digoreng dan dicampur dalam minyak goreng, margarin atau mentega. Biasanya ditambah kecap manis, bawang merah, bawang putih, asam jawa, lada dan bahan lainnya; seperti telur, daging ayam, dan kerupuk</p>
                        </div>
                        <div class="price">
                            <span>Rp 23.000</span>
                            <span><i class='bx bx-cart cart-icon' ></i></span>
                        </div>
                    </div>
                    {{-- box 2 --}}
                    <div class="card2">
                        <img src="image/sopbuah.jpg" alt="">
                        <div class="food-title">
                            <h1>Sop Buah</h1>
                        </div>
                        <div class="desc-food">
                            <p>campuran beberapa jenis buah, mulai dari yang manis hingga asam, ditambahkan dengan susu, sirup, dan es batu yang menyegarkan.</p>
                        </div>
                        <div class="price">
                            <span>Rp 27.000</span>
                            <span><i class='bx bx-cart cart-icon' ></i></span>
                        </div>
                    </div>
                    {{-- box 3 --}}
                    <div class="card3">
                        <img src="image/ayamgeprek.jpeg" alt="">
                        <div class="food-title">
                            <h1>Ayam Geprek + Nasi</h1>
                        </div>
                        <div class="desc-food">
                            <p>makanan ayam goreng tepung khas Indonesia yang diulek atau dilumatkan bersama sambal bajak. Sebagian besar sumber menyebut bahwa ayam geprek berasal dari Kota Yogyakarta.</p>
                        </div>
                        <div class="price">
                            <span>Rp 24.300</span>
                            <span><i class='bx bx-cart cart-icon' ></i></span>
                        </div>
                    </div>
                    {{-- box 4 --}}
                    <div class="card4">
                        <img src="image/sotoayam.jpg" alt="">
                        <div class="food-title">
                            <h1>Soto Ayam</h1>
                        </div>
                        <div class="desc-food">
                            <p>makanan khas Indonesia yang berupa sejenis sup ayam dengan kuah yang berwarna kekuningan. Warna kuning ini dikarenakan oleh kunyit yang digunakan sebagai bumbu.</p>
                        </div>
                        <div class="price">
                            <span>Rp 27.000</span>
                            <span><i class='bx bx-cart cart-icon' ></i></span>
                        </div>
                    </div>
                    {{-- box 5 --}}
                    <div class="card5">
                        <img src="image/ayambakar.jpg" alt="">
                        <div class="food-title">
                            <h1>Ayam Bakar Madu + Nasi</h1>
                        </div>
                        <div class="desc-food">
                            <p>hidangan Asia Tenggara Maritim, terutama hidangan Indonesia atau Malaysia, dari ayam yang dipanggang di atas arang.</p>
                        </div>
                        <div class="price">
                            <span>Rp 27.000</span>
                            <span><i class='bx bx-cart cart-icon' ></i></span>
                        </div>
                    </div>
                    {{-- box 6 --}}
                    <div class="card6">
                        <img src="image/alpukat.jpg" alt="">
                        <div class="food-title">
                            <h1>alpukat</h1>
                        </div>
                        <div class="desc-food">
                            <p>Alpukat mengandung sejumlah nutrisi penting, termasuk vitamin C, vitamin B-6, folat, magnesium, dan kalium. Nutrisi ini mendukung fungsi tubuh yang optimal dan menjaga kesehatan secara menyeluruh.</p>
                        </div>
                        <div class="price">
                            <span>Rp 22.500</span>
                            <span><i class='bx bx-cart cart-icon' ></i></span>
                        </div>
                    </div>
                    {{-- box 7 --}}
                    <div class="card7">
                        <img src="image/cendol.jpg" alt="">
                        <div class="food-title">
                            <h1>Es cendol + Kelapa Muda</h1>
                        </div>
                        <div class="desc-food">
                            <p>makanan khas Indonesia yang bahan dasarnya terbuat dari tepung beras dan di campur dengan bahan tambahan lainnya yaitu air kapur, ekstrak daun pandan dan garam. Cendol biasanya disajikan dalam bentuk minuman dengan bahan tambahan santan dan cairan gula merah.</p>
                        </div>
                        <div class="price">
                            <span>Rp 25.000</span>
                            <span><i class='bx bx-cart cart-icon' ></i></span>
                        </div>
                    </div>
                    {{-- box 8 --}}
                    <div class="card8">
                        <img src="image/teh.jpg" alt="">
                        <div class="food-title">
                            <h1>Es Teh</h1>
                        </div>
                        <div class="desc-food">
                            <p>minuman teh yang disajikan dingin dengan es batu. Biasanya, Es teh seringkali ditambahkan rasa seperti melati, dan buah-buahan seperti lemon, ceri, dan stroberi, atau susu.</p>
                        </div>
                        <div class="price">
                            <span>Rp 4.500</span>
                            <span><i class='bx bx-cart cart-icon' ></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>