<nav class="bg-white shadow-md relative z-10" data-aos="fade-down" data-aos-duration="1200">
    <div class="container mx-auto px-4 py-3 flex items-center justify-between">
        <!-- Sisi Kiri: Logo dan Nama Perusahaan -->
        <div class="flex items-center" data-aos="fade-right" data-aos-duration="1000">
            <!-- Logo -->
            <img src="{{ asset('spirit.png') }}" alt="Logo" class="w-20 h-20 mr-3 object-contain">
            <!-- Nama Perusahaan dan Sub-teks -->
            <div class="hidden md:block">
                <h1 class="text-xl font-bold font-sans text-blue-800">Department Spirit Aerosystem</h1>
                <p class="text-sm text-gray-600">PT Dirgantara</p>
            </div>
        </div>

        <!-- Menu Tengah -->
        <ul class="hidden md:flex space-x-16 relative" data-aos="zoom-in" data-aos-duration="1000">
            <li><a href="{{ route('beranda') }}" class="text-gray-700 hover:text-blue-600">BERANDA</a></li>
            <li><a href="{{ route('tentangkami') }}" class="text-gray-700 hover:text-blue-600">TENTANG KAMI</a></li>
            <li><a href="{{ route('galeri') }}" class="text-gray-700 hover:text-blue-600">GALERI</a></li>
            <li><a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600">KONTAK</a></li>
        </ul>

        <!-- Tombol Login (Kanan) -->
        <div data-aos="fade-left" data-aos-duration="1000">
            <a href="{{ route('login') }}"
                class="bg-blue-900 text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition duration-300">
                Login
            </a>
        </div>

        <!-- Tombol Menu untuk Mobile -->
        <button class="md:hidden text-gray-700 focus:outline-none" onclick="toggleMobileMenu()">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

    <!-- Menu Mobile -->
    <div id="mobile-menu" class="md:hidden hidden bg-white shadow-lg">
        <ul class="flex flex-col space-y-4 p-4">
            <li><a href="{{ route('beranda') }}" class="text-gray-700 hover:text-blue-600">BERANDA</a></li>
            <li><a href="{{ route('tentangkami') }}" class="text-gray-700 hover:text-blue-600">TENTANG KAMI</a></li>
            <li><a href="{{ route('galeri') }}" class="text-gray-700 hover:text-blue-600">GALERI</a></li>
            <li><a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600">KONTAK</a></li>
        </ul>
    </div>
</nav>

<script>
    function toggleMobileMenu() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    }
</script>