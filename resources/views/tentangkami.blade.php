<x-layout></x-layout>

<style>
    .text-container {
        max-width: 82%;
        margin: 30px auto;
        padding: 0 20px;
    }

    .text-container p {
        text-align: justify;
    }

    .btn-active {
        background-color: #1E40AF;
        color: white;
    }

    .btn-inactive {
        background-color: white;
        color: black;
        border: 2px solid #1E40AF;
    }
</style>

<x-navbar></x-navbar>

<body>
    <!-- Hero Section -->
    <section class="relative h-[50vh] md:h-[90vh] bg-cover bg-center flex items-center justify-center text-center text-white px-4"
        style="background-image: url('{{ asset('bg.jpg') }}');" data-aos="fade-in" data-aos-duration="1500">
        <div class="absolute inset-0 bg-black/50" data-aos="fade" data-aos-duration="2000"></div>
        <div class="relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold" data-aos="fade-up" data-aos-duration="2000">Departemen Spirit</h1>
            <p class="text-lg mt-4" data-aos="fade-up" data-aos-duration="2500">Mewujudkan keunggulan dalam manufaktur
                komponen pesawat</p>
        </div>
    </section>

    <!-- Tombol Navigasi -->
    <div class="flex justify-center space-x-4 mt-6">
        <button id="btn-sekilas" class="btn-active px-4 py-2 md:px-6 md:py-2 rounded-lg transition duration-300">
            Sekilas tentang Departemen Spirit
        </button>
        <button id="btn-struktur" class="btn-inactive px-4 py-2 md:px-6 md:py-2 rounded-lg transition duration-300">
            Struktur Organisasi
        </button>
    </div>

    <!-- Section Sekilas -->
    <section id="sekilas" class="bg-white py-6">
        <div class="container mx-auto px-6 lg:px-20">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-8">Sekilas tentang Departemen Spirit</h2>
            <div class="flex flex-col lg:flex-row items-center lg:items-start gap-8">
                <!-- Paragraf -->
                <div class="text-container flex-1">
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
                <!-- Gambar -->
                <div class="flex-1">
                    <img src="{{ asset('pt.jpg') }}" alt="Departemen Spirit" 
                         class="w-full h-auto rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Section Struktur Organisasi -->
    <section id="struktur" class="py-12 hidden">
        <section id="struktur" class="py-12">
            <div class="container mx-auto px-6 lg:px-20 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-8 uppercase tracking-wide"
                    data-aos="fade-up">
                    Struktur Organisasi
                </h2>
                <div class="flex flex-col items-center">
                    <!-- General Manager -->
                    <div class="bg-blue-900 text-white font-bold py-4 px-6 rounded-lg shadow-lg w-64 mb-6 flex flex-col items-center"
                        data-aos="fade-down">
                        <img src="{{ asset('profil.jpg') }}" alt="General Manager"
                            class="w-20 h-20 rounded-full mb-2 shadow-md">
                        <p>General Manager SBU Aerostructure</p>
                        <p class="text-sm text-blue-200">Muhammad Luqman</p>
                    </div>

                    <!-- Program Manager -->
                    <div class="relative flex flex-col items-center">
                        <div class="w-1 h-8 bg-blue-900"></div>
                        <div class="bg-blue-700 text-white font-semibold py-4 px-6 rounded-lg shadow-lg w-56 mb-6 flex flex-col items-center"
                            data-aos="fade-down">
                            <img src="{{ asset('profil.jpg') }}" alt="Program Manager"
                                class="w-20 h-20 rounded-full mb-2 shadow-md">
                            <p>Program Manager</p>
                            <p class="text-sm text-blue-100">Redo Nanda Putra</p>
                        </div>
                    </div>

                    <!-- Project Manager -->
                    <div class="relative flex flex-col items-center">
                        <div class="w-1 h-8 bg-blue-900"></div>
                        <div class="bg-blue-500 text-white font-semibold py-4 px-6 rounded-lg shadow-lg w-48 mb-6 flex flex-col items-center"
                            data-aos="fade-down">
                            <img src="{{ asset('profil.jpg') }}" alt="Project Manager"
                                class="w-20 h-20 rounded-full mb-2 shadow-md">
                            <p>Project Manager Spirit</p>
                            <p class="text-sm text-gray-200">Kabul hardiyatha</p>
                        </div>
                    </div>

                    <!-- Asisten Project -->
                    <div class="relative flex flex-col items-center">
                        <div class="w-1 h-8 bg-blue-900"></div>
                        <div class="flex space-x-6">
                            <div class="bg-blue-300 text-blue-900 font-semibold py-3 px-4 rounded-lg shadow-lg w-40 flex flex-col items-center"
                                data-aos="fade-up">
                                <img src="{{ asset('profil.jpg') }}" alt="Asisten 1"
                                    class="w-16 h-16 rounded-full mb-2 shadow-md">
                                <p>Asisten Project Manager A321</p>
                                <p class="text-xs text-gray-800">uwantoro</p>
                            </div>
                            <div class="bg-blue-300 text-blue-900 font-semibold py-3 px-4 rounded-lg shadow-lg w-40 flex flex-col items-center"
                                data-aos="fade-up">
                                <img src="{{ asset('profil.jpg') }}" alt="Asisten 2"
                                    class="w-16 h-16 rounded-full mb-2 shadow-md">
                                <p>Asisten Project Manager A321</p>
                                <p class="text-xs text-gray-800">Ilham Mulah Putra</p>
                            </div>
                            <div class="bg-blue-300 text-blue-900 font-semibold py-3 px-4 rounded-lg shadow-lg w-40 flex flex-col items-center"
                                data-aos="fade-up">
                                <img src="{{ asset('profil.jpg') }}" alt="Asisten 3"
                                    class="w-16 h-16 rounded-full mb-2 shadow-md">
                                <p>Asisten Project Manager A321</p>
                                <p class="text-xs text-gray-800">Rusta, E.Rachman</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </section>


    <script>
        const btnSekilas = document.getElementById('btn-sekilas');
        const btnStruktur = document.getElementById('btn-struktur');
        const sekilasSection = document.getElementById('sekilas');
        const strukturSection = document.getElementById('struktur');

        function switchSection(activeBtn, inactiveBtn, activeSection, inactiveSection) {
            activeBtn.classList.add('btn-active');
            activeBtn.classList.remove('btn-inactive');
            inactiveBtn.classList.add('btn-inactive');
            inactiveBtn.classList.remove('btn-active');
            activeSection.classList.remove('hidden');
            inactiveSection.classList.add('hidden');
        }

        btnSekilas.addEventListener('click', function() {
            switchSection(btnSekilas, btnStruktur, sekilasSection, strukturSection);
        });

        btnStruktur.addEventListener('click', function() {
            switchSection(btnStruktur, btnSekilas, strukturSection, sekilasSection);
        });
    </script>
    <!-- Tambahkan AOS CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

<!-- Tambahkan AOS JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<!-- Inisialisasi AOS -->
<script>
    AOS.init();
</script>
    <x-footer></x-footer>
</body>