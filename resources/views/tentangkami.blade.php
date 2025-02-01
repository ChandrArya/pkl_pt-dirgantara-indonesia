<x-layout></x-layout>
<style>
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
</style>
<x-navbar></x-navbar>

<body>
    <section class="relative h-[90vh] bg-cover bg-center" style="background-image: url('{{ asset('bg.jpg') }}');"
        data-aos="fade-in" data-aos-duration="1500">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/50" data-aos="fade" data-aos-duration="2000"></div>
        <!-- Content -->
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
        </div>
    </section>

    <!-- Button Opsi -->
    <div class="flex justify-center space-x-4">
        <button id="btn-sekilas"
            class="bg-blue-900 hover:bg-blue-900 hover:text-white text-white px-6 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900 focus:ring-offset-2 transition-colors duration-300 mt-4 mb-4">
            Sekilas tentang Departemen Spirit
        </button>
        <button id="btn-struktur"
            class="bg-white hover:bg-blue-900 hover:text-white text-black px-6 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900 focus:ring-offset-2 transition-colors duration-300 mt-4 mb-4">
            Struktur Organisasi
        </button>
    </div>

    <!-- Konten Sekilas tentang Departemen Spirit -->
    <section id="sekilas" class="bg-white py-6">
        <div class="container mx-auto px-6 lg:px-20">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-8">SEKILAS TENTANG DEPARTEMEN SPIRIT
            </h2>
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
        </div>
    </section>

    <!-- Konten Struktur Organisasi (Awalnya Disembunyikan) -->
    <section id="struktur" class="py-6 hidden">
        <div class="container mx-auto px-6 lg:px-20">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-8">STRUKTUR ORGANISASI</h2>
            <img src="{{ asset('StrukturOrganisasiSpirit.png') }}" alt="Logo" class="w-64 object-contain">
            <!-- Deskripsi Pesawat -->
            <div class="text-container">
            </div>
        </div>
    </section>

    <script>
        const btnSekilas = document.getElementById('btn-sekilas');
        const btnStruktur = document.getElementById('btn-struktur');
        const sekilasSection = document.getElementById('sekilas');
        const strukturSection = document.getElementById('struktur');

        // Fungsi untuk mengaktifkan tombol dan menampilkan konten
        function activateButton(activeButton, inactiveButton, activeSection, inactiveSection) {
            activeButton.classList.remove('bg-white', 'text-black');
            activeButton.classList.add('bg-blue-900', 'text-white');
            inactiveButton.classList.remove('bg-blue-900', 'text-white');
            inactiveButton.classList.add('bg-white', 'text-black');
            activeSection.classList.remove('hidden');
            inactiveSection.classList.add('hidden');
        }

        // Event listener untuk tombol "Sekilas tentang Departemen Spirit"
        btnSekilas.addEventListener('click', function() {
            activateButton(btnSekilas, btnStruktur, sekilasSection, strukturSection);
        });

        // Event listener untuk tombol "Struktur Organisasi"
        btnStruktur.addEventListener('click', function() {
            activateButton(btnStruktur, btnSekilas, strukturSection, sekilasSection);
        });
    </script>
    <x-footer></x-footer>
</body>
