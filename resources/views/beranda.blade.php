<x-layout></x-layout>

<body class="h-screen">

    <div class="min-h-full">
        <x-navbar></x-navbar>
        <section class="relative h-[90vh] bg-cover bg-center" style="background-image: url('{{ asset('bg.jpg') }}');"
            data-aos="fade-in" data-aos-duration="1500">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/50" data-aos="fade" data-aos-duration="2000"></div>
            <!-- Content -->
            <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
                <!-- Heading -->
                <h1 class="text-4xl md:text-6xl font-bold mb-4" data-aos="zoom-in" data-aos-duration="1000"
                    data-aos-delay="200">
                    Selamat Datang Di Department Spirit
                </h1>
            </div>
        </section>
        <x-komponenpesawat></x-komponenpesawat>
        <x-footer></x-footer>
    </div>
</body>

</html>