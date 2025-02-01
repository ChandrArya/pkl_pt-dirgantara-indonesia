<nav class="bg-white shadow-md relative z-10" data-aos="fade-down" data-aos-duration="1200">
    <div class="container mx-auto px-4 py-3 flex items-center justify-between">
        <!-- Sisi Kiri: Logo dan Nama Perusahaan -->
        <div class="flex items-center" data-aos="fade-right" data-aos-duration="1000">
            <img src="{{ asset('logo.jpeg') }}" alt="Logo" class="w-20 -mt-2 h-20 mr-3 object-contain">
            {{-- <span class="text-xl mt-2 font-bold font-sans text-blue-800">SPIRIT DEPARTMENT</span> --}}
        </div>

        <!-- Menu Tengah -->
        <ul class="hidden md:flex space-x-16 relative" data-aos="zoom-in" data-aos-duration="1000">
            <li><a href="{{ route('beranda') }}" class="text-gray-700 hover:text-blue-600">BERANDA</a></li>
            <li><a href="{{ route('tentangkami') }}" class="text-gray-700 hover:text-blue-600">TENTANG KAMI</a></li>
            <li><a href="{{ route('galeri') }}" class="text-gray-700 hover:text-blue-600">GALERI</a></li>
            <li><a href="{{ route('informasi') }}" class="text-gray-700 hover:text-blue-600">INFORMASI</a></li>
            <li><a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600">LOG IN</a></li>
        </ul>
        <div class="flex items-center" data-aos="fade-right" data-aos-duration="1000">
            <img src="{{ asset('spirit.png') }}" alt="Logo" class="w-20 -mt-2 h-20 mr-3 object-contain">
            {{-- <span class="text-xl mt-2 font-bold font-sans text-blue-800">SPIRIT DEPARTMENT</span> --}}
        </div>
    </div>
</nav>