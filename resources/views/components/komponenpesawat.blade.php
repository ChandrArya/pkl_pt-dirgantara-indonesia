<section class="bg-gradient-to-br from-blue-50 to-blue-200 py-14 min-h-screen flex items-center">
    <div class="container mx-auto px-6 lg:px-20">
        <!-- Judul -->
        <h2 class="text-4xl md:text-5xl font-bold text-center text-blue-900 mb-6 tracking-wide">
            Komponen
        </h2>
        <p class="text-center text-gray-700 mb-12 max-w-2xl mx-auto">
            Jelajahi berbagai komponen dengan detail lengkap, spesifikasi, dan fitur unggulan yang tersedia di sini.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Card 1 -->
            <div class="relative bg-white bg-opacity-90 rounded-2xl shadow-lg backdrop-blur-lg border border-gray-200 overflow-hidden h-[75vh] transition transform duration-500 hover:scale-[1.03] hover:shadow-2xl">
                <div class="absolute inset-0 bg-gradient-to-t from-blue-500 via-transparent to-transparent opacity-20"></div>
                <img src="{{ asset('bg.jpg') }}" alt="A321" class="w-full h-[300px] object-cover">
                <div class="text-center py-6 px-4">
                    <h3 class="text-blue-800 font-semibold text-2xl">A321</h3>
                    <p class="text-gray-600 text-sm mt-2">
                        Pesawat narrow-body dengan efisiensi tinggi, cocok untuk penerbangan jarak menengah.
                    </p>
                    <a href="/a321"
                        class="relative inline-block mt-4 bg-blue-900 text-white px-5 py-2 rounded-lg shadow-md text-sm font-semibold hover:bg-blue-700 transition">
                        Lihat Detail
                    </a>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="relative bg-white bg-opacity-90 rounded-2xl shadow-lg backdrop-blur-lg border border-gray-200 overflow-hidden h-[75vh] transition transform duration-500 hover:scale-[1.03] hover:shadow-2xl">
                <div class="absolute inset-0 bg-gradient-to-t from-blue-500 via-transparent to-transparent opacity-20"></div>
                <img src="{{ asset('gambar.jpg') }}" alt="A350" class="w-full h-[300px] object-cover">
                <div class="text-center py-6 px-4">
                    <h3 class="text-blue-800 font-semibold text-2xl">A350</h3>
                    <p class="text-gray-600 text-sm mt-2">
                        Pesawat wide-body modern dengan kenyamanan premium untuk penerbangan jarak jauh.
                    </p>
                    <a href="/a350"
                        class=" relative inline-block mt-4 bg-blue-900 text-white px-5 py-2 rounded-lg shadow-md text-sm font-semibold hover:bg-blue-700 transition">
                        Lihat Detail
                    </a>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="relative bg-white bg-opacity-90 rounded-2xl shadow-lg backdrop-blur-lg border border-gray-200 overflow-hidden h-[75vh] transition transform duration-500 hover:scale-[1.03] hover:shadow-2xl">
                <div class="absolute inset-0 bg-gradient-to-t from-blue-500 via-transparent to-transparent opacity-20"></div>
                <img src="{{ asset('gambar2.jpg') }}" alt="A380" class="w-full h-[300px] object-cover">
                <div class="text-center py-6 px-4">
                    <h3 class="text-blue-800 font-semibold text-2xl">A380</h3>
                    <p class="text-gray-600\ text-sm mt-2">
                        Pesawat terbesar di dunia dengan kapasitas tinggi dan teknologi canggih.
                    </p>
                    <a href="/a380"
                        class="relative inline-block mt-4 bg-blue-900 text-white px-5 py-2 rounded-lg shadow-md text-sm font-semibold hover:bg-blue-700 transition">
                        Lihat Detail
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
