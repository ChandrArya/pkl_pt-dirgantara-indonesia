<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komponen Pesawat A321</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #f9fafb, #e2e8f0);
            margin: 0;
            padding: 0;
        }

        /* Navbar Spacing */
        .navbar-spacing {
            height: 80px; /* Sesuaikan dengan tinggi navbar */
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
            color: #1a365d;
            margin-bottom: 40px;
            text-transform: uppercase;
            letter-spacing: 2px;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            width: 50%;
            height: 4px;
            background: #1a365d;
            position: absolute;
            bottom: -10px;
            left: 25%;
            border-radius: 2px;
        }

        .image-container {
            margin-bottom: 40px;
            text-align: center;
        }

        .image-container img {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .image-container img:hover {
            transform: scale(1.02);
        }

        .text-description {
            text-align: center;
            font-size: 1.2rem;
            color: #4b5563;
            margin: 0 auto 40px;
            line-height: 1.6;
            max-width: 800px;
        }

        /* Grid untuk Komponen */
        .grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* Menampilkan 4 kolom dalam satu baris */
            gap: 20px;
            margin-bottom: 40px;
        }

        .grid-item {
            background: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .grid-item:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .grid-item img {
            width: 100%;
            height: 200px; /* Tinggi gambar disesuaikan */
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .grid-item h3 {
            font-size: 1.5rem;
            color: #1a365d;
            margin-bottom: 10px;
        }

        .grid-item p {
            font-size: 1rem;
            color: #4b5563;
            line-height: 1.6;
        }
        .back-button {
        display: inline-block;
        padding: 12px 24px;
        font-size: 16px;
        font-weight: 600;
        color: #ffffff;
        background-color: #1a365d;
        /* Warna biru tua */
        border-radius: 8px;
        text-decoration: none;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .back-button:hover {
        background-color: #2c5282;
        /* Warna biru yang lebih terang saat hover */
        transform: translateY(-2px);
        /* Efek naik sedikit saat hover */
    }

    .back-button:active {
        transform: translateY(0);
        /* Efek kembali ke posisi semula saat diklik */
    }
  .bg-#1a365d {
    background-color: #1a365d;
  }

        /* Responsif untuk layar kecil */
        @media (max-width: 1024px) {
            .grid {
                grid-template-columns: repeat(2, 1fr); /* 2 kolom untuk layar lebih kecil */
            }
        }

        @media (max-width: 600px) {
            .grid {
                grid-template-columns: 1fr; /* 1 kolom untuk layar sangat kecil */
            }
        }

    </style>
</head>
<body>
    @extends('components.layout')
    {{-- Navbar --}}
    @include('components.navbar')

    <div class="container">
        <h1 class="section-title" data-aos="fade-down">Pesawat A321</h1>
        <div class="image-container" data-aos="fade-up">
            <img src="{{ asset('gambar2.jpg') }}" alt="Pesawat A321">
        </div>
        <p class="text-description" >
            Pesawat A321 adalah salah satu pesawat berbadan sempit terbaik yang dirancang untuk penerbangan jarak menengah. Dengan kapasitas penumpang yang lebih besar dan teknologi modern, pesawat ini menjadi pilihan utama maskapai penerbangan.
        </p>

        <h2 class="section-title" data-aos="fade-down">Komponen Pesawat</h2>
        <div class="grid">
            <div class="grid-item" data-aos="fade-up">
                <img src="{{ asset('komponen.jpg') }}" alt="Sayap">
                <h3>Panel 3 Fuel LWR ASSY</h3>
                <p>Sayap dirancang untuk memberikan efisiensi aerodinamis maksimal.</p>
            </div>
            <div class="grid-item" data-aos="fade-up">
                <img src="{{ asset('komponen2.png') }}" alt="Fuselage">
                <h3>Fuselage</h3>
                <p>Struktur utama pesawat yang menampung penumpang dan kargo.</p>
            </div>
            <div class="grid-item" data-aos="fade-up">
                <img src="{{ asset('komponen3.jpg') }}" alt="Cockpit">
                <h3>Cockpit</h3>
                <p>Tempat pilot mengendalikan pesawat dengan berbagai instrumen canggih.</p>
            </div>
            <div class="grid-item" data-aos="fade-up">
                <img src="{{ asset('komponen4.jpg') }}" alt="Mesin">
                <h3>Mesin</h3>
                <p>Mesin jet yang memberikan tenaga dorong untuk penerbangan.</p>
            </div>
        </div>
        <div class="text-center mt-8">
                <a href="/" class="back-button">Kembali ke Beranda</a>
            </div>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>
    <x-footer></x-footer>
</body>
</html>
