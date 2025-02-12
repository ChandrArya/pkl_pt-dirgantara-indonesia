<!-- Tambahkan Swiper.js untuk efek carousel -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<section class="bg-white py-6">
    <div class="container mx-auto px-6 lg:px-20">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-8">Galeri Komponen Departemen Spirit</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2 row-span-2">
                <img src="{{ asset('bg.jpg') }}" alt="A321" class="w-full h-[50vh] object-cover rounded-lg shadow-lg">
                <div class="text-center py-4">
                    <a class="text-blue-900 font-semibold text-lg">A321</a>
                </div>
            </div>
            <div>
                <img src="{{ asset('gambar.jpg') }}" alt="A350"
                    class="w-full h-48 object-cover rounded-lg shadow-lg">
                <div class="text-center py-4">
                    <a class="text-blue-900 font-semibold text-lg">A350</a>
                </div>
            </div>
            <div>
                <img src="{{ asset('gambar2.jpg') }}" alt="A380"
                    class="w-full h-48 object-cover rounded-lg shadow-lg">
                <div class="text-center py-4">
                    <a class="text-blue-900 font-semibold text-lg">A380</a>
                </div>
            </div>
        </div>

        <!-- Carousel untuk tampilan yang lebih interaktif -->
        <div class="swiper mySwiper mt-8">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{ asset('bg.jpg') }}" alt="A321"
                        class="w-full h-[57vh] object-cover rounded-lg shadow-lg"></div>
                <div class="swiper-slide"><img src="{{ asset('gambar.jpg') }}" alt="A380"
                        class="w-full h-[57vh] object-cover rounded-lg shadow-lg"></div>
                <div class="swiper-slide"><img src="{{ asset('gambar2.jpg') }}" alt="A380"
                        class="w-full h-[57vh] object-cover rounded-lg shadow-lg"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>