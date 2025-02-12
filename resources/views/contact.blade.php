@extends('layouts.app')

@section('content')
    @include('components.navbar')

    <div class="container mx-auto px-4 py-12">
        <h1 class="text-4xl font-bold text-center text-blue-600 mb-8" data-aos="fade-down">Hubungi Kami</h1>

        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <!-- Informasi Kontak -->
            <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-right" data-aos-duration="1000">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Informasi Kontak</h2>
                <p class="text-gray-700 flex items-center mb-3">
                    <svg class="w-5 h-5 text-blue-500 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 10l9-6 9 6M4 10v10a1 1 0 001 1h14a1 1 0 001-1V10"></path>
                    </svg>
                    No.154, Jalan Pajajaran, Husen Sastranegara, Kec. Cicendo, Kota Bandung, Jawa Barat 40174
                </p>
                <p class="text-gray-700 flex items-center mb-3">
                    <svg class="w-5 h-5 text-blue-500 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 12h2a2 2 0 012 2v4a2 2 0 01-2 2h-4M8 12H6a2 2 0 00-2 2v4a2 2 0 002 2h4"></path>
                    </svg>
                    Email: info@spiritdepartment.com
                </p>
                <p class="text-gray-700 flex items-center mb-3">
                    <svg class="w-5 h-5 text-blue-500 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h2M12 10h10M5 10a7 7 0 1014 0M5 10V8m14 2V8"></path>
                    </svg>
                    Telepon: +62 812-3456-7890
                </p>
            </div>
        </div>
    </div>

    <!-- Peta Lokasi -->
    <div class="container mx-auto px-4 py-12">
        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-4" data-aos="fade-up">Lokasi Kami</h2>
        <div class="w-full h-full mb-20" data-aos="zoom-in" data-aos-duration="1200">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12295.85152064911!2d107.57888573826953!3d-6.898592988644071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e67a7f745057%3A0xd0ea2a5421c0b6a7!2sGedung%20Pusat%20Manajemen%20PT%20Dirgantara%20Indonesia!5e0!3m2!1sid!2sid!4v1739081805781!5m2!1sid!2sid"
                width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>

    @include('components.footer')
@endsection