<section class="bg-white-900 py-6">
    <div class="container mx-auto px-6 lg:px-20">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-8">KOMPONEN</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Foto 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden" style="height: 40vh">
                <img src="{{ asset('bg.jpg') }}" alt="A321" class="w-full h-96 object-cover">
                <div class="text-center py-4">
                    <a href="/a321" class="text-blue-900 font-semibold text-lg hover:underline">A321</a>
                </div>
            </div>
            <!-- Foto 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden" style="height: 40vh">
                <img src="{{ asset('gambar.jpg') }}" alt="A350" class="w-full h-96 object-cover">
                <div class="text-center py-4">
                    <a href="/a350" class="text-blue-900 font-semibold text-lg hover:underline">A350</a>
                </div>
            </div>
            <!-- Foto 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden" style="height: 40vh">
                <img src="{{ asset('gambar2.jpg') }}" alt="A380" class="w-full h-96 object-cover">
                <div class="text-center py-4">
                    <a href="/a380" class="text-blue-900 font-semibold text-lg hover:underline">A380</a>
                </div>
            </div>
        </div>
    </div>
</section>
