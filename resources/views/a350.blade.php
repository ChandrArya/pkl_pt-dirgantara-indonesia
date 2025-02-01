<x-layout></x-layout>
<style>
    /* Menambahkan batas maksimal untuk gambar dan teks yang responsif */
    .image-container {
        max-width: 80%;
        /* Atur batas maksimal lebar gambar */
        margin: 0 auto;
        /* Pusatkan gambar */
    }

    .text-container {
        max-width: 82%;
        /* Membuat teks memiliki lebar maksimal yang sama dengan gambar */
        margin: 30px auto;
        /* Memberikan margin atas dan bawah pada teks */
        padding: 0 20px;
        /* Memberikan padding horizontal untuk teks */
    }

    .text-container p {
        text-align: justify;
        /* Membuat teks rata kanan kiri */
    }

    /* Gaya untuk tombol Kembali ke Beranda */
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
</style>

<body>
    <x-navbar></x-navbar>
    <!-- Section Komponen Pesawat -->
    <section class="bg-white py-6">
        <div class="container mx-auto px-6 lg:px-20">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-8">A350</h2>
            <!-- Gambar Pesawat -->
            <div class="flex justify-center mb-8 image-container">
                <img src="{{ asset('gambar.jpg') }}" class="w-full object-cover rounded-lg shadow-lg">
            </div>

            <!-- Deskripsi Pesawat -->
            <div class="text-container">
                <p class="text-lg text-blue-900">
                    PT Dirgantara Indonesia (Persero) adalah perusahaan milik negara (BUMN) yang bergerak di bidang
                    industri kedirgantaraan, berbasis di Bandung, Jawa Barat. Didirikan pada tahun 1976 dengan nama IPTN
                    (Industri Pesawat Terbang Nurtanio), perusahaan ini berfokus pada perancangan, pengembangan,
                    produksi,Departemen Spirit di PT Dirgantara Indonesia adalah salah satu divisi strategis yang
                    berperan penting dalam mendukung operasional dan pengembangan perusahaan di bidang manufaktur
                    komponen pesawat. Departemen ini berfokus pada produksi dan perakitan berbagai komponen utama
                    pesawat, seperti fuselage, sayap, dan struktur lainnya, bekerja sama dengan mitra global dalam
                    proyek pesawat komersial maupun militer. Departemen Spirit juga memastikan bahwa setiap komponen
                    yang dihasilkan memenuhi standar internasional, baik dari segi kualitas maupun keselamatan. Dengan
                    keahlian teknis yang tinggi, inovasi dalam proses manufaktur, dan kolaborasi dengan berbagai pihak,
                    Departemen Spirit menjadi bagian integral dari upaya PT Dirgantara Indonesia untuk memperluas
                    peranannya di industri dirgantara global. 4o serta pemeliharaan pesawat terbang untuk keperluan
                    sipil maupun militer. PT Dirgantara Indonesia dikenal atas produk-produk unggulannya, seperti
                    pesawat N219, CN235, dan NC212i, yang diakui secara internasional. Selain itu, perusahaan ini juga
                    menyediakan layanan purna jual, pelatihan teknis, dan pengembangan teknologi dirgantara.
                </p>
            </div>

            <!-- Link Kembali ke Komponen -->
            <div class="text-center mt-8">
                <a href="/" class="back-button">Kembali ke Beranda</a>
            </div>
        </div>
    </section>
    <x-footer></x-footer>
</body>
