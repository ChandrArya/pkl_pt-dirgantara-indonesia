<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departemen Spirit</title>
    @vite('resources/css/app.css')
    <link rel="icon" type="png" href="{{ asset('spirit.png') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        /* Pastikan dropdown berada di atas konten lain */
        #dropdownMenu {
            z-index: 20;
            position: absolute;
            left: 0;
            top: 100%;
        }

        /* Pastikan item dropdown responsif terhadap klik */
        #dropdownMenu li {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- JavaScript untuk dropdown -->
    <script>
        // Ambil elemen-elemen yang diperlukan
        const dropdown = document.getElementById("dropdown");
        const dropdownMenu = document.getElementById("dropdownMenu");

        // Menangani klik untuk membuka dan menutup dropdown
        dropdown.addEventListener("click", function(event) {
            // Mencegah event klik dari menyebar ke luar dropdown
            event.stopPropagation();
            // Toggle visibilitas menu dropdown
            dropdownMenu.classList.toggle("hidden");
        });

        // Menangani klik di luar dropdown untuk menutup menu
        document.addEventListener("click", function(event) {
            if (!dropdown.contains(event.target)) {
                dropdownMenu.classList.add("hidden");
            }
        });
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>