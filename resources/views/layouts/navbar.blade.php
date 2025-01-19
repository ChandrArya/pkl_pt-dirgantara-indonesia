<header
    class='flex shadow-[rgba(0,0,0,0.1)_-4px_9px_25px_-6px] py-4 px-4 sm:px-10 bg-white font-sans min-h-[75px] tracking-wide relative z-50'>
    <div class='flex flex-wrap items-center gap-4 w-full'>
        <!-- Logo -->
        <a href="javascript:void(0)"><img src="{{ asset('logo.jpeg') }}" alt="logo" class='lg:w-20 w-16' /></a>

        <!-- Menu Navigation -->
        <div id="collapseMenu"
            class='lg:ml-12 max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-40 max-lg:before:inset-0 max-lg:before:z-50'>
            <!-- Close Button -->
            <button id="toggleClose"
                class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white w-9 h-9 flex items-center justify-center border'>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 fill-black" viewBox="0 0 320.591 320.591">
                    <path
                        d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                        data-original="#000000"></path>
                    <path
                        d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                        data-original="#000000"></path>
                </svg>
            </button>

            <!-- Menu Items -->
            <ul
                class='lg:flex lg:gap-x-4 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-2/3 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-4 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
                <li class='max-lg:border-b mx-auto flex justify-center items-center max-lg:pb-4 px-3 lg:hidden'>
                    <a href="javascript:void(0)"><img src="{{ asset('logo.jpeg') }}" alt="logo" class='w-20' /></a>
                </li>
                <li class='max-lg:border-b max-lg:py-3 px-3 text-center'>
                    <a href='javascript:void(0)'
                        class='hover:text-[#007bff] text-blue-900 block font-semibold text-base'>Home</a>
                </li>
            </ul>
        </div>

        <!-- Authentication Menu -->
        <div class="flex ml-auto">
            @auth
                <div class="relative">
                    <!-- Profile Button -->
                    <button id="profileMenuButton"
                        class="flex items-center space-x-2 text-sm font-semibold text-blue-900 px-4 py-4 rounded-md">
                        <img src="{{ asset('profil.jpg') }}" class="rounded-full w-10 h-10" alt="">
                        <span>{{ Auth::user()->username }}</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <div id="profileMenu"
                        class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Lihat Profil</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pengaturan</a>
                        <form action="{{ route('logout') }}" method="POST" class="border-t border-gray-200">
                            @csrf
                            <button type="submit"
                                class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Log
                                Out</button>
                        </form>
                    </div>
                </div>
            @endauth

            @guest
                <a href="{{ route('login') }}"
                    class="px-4 py-2 text-sm rounded-md font-semibold text-white border-2 bg-blue-900 hover:bg-blue-800">
                    Login
                </a>
            @endguest

            <!-- Mobile Toggle Button -->
            <div id="toggleOpen" class="flex ml-auto lg:hidden">
                <button class="ml-4">
                    <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>

<script>
    // Toggle Menu untuk Mobile
    document.getElementById('toggleOpen').addEventListener('click', () => {
        document.getElementById('collapseMenu').classList.remove('max-lg:hidden');
    });

    document.getElementById('toggleClose').addEventListener('click', () => {
        document.getElementById('collapseMenu').classList.add('max-lg:hidden');
    });

    // Toggle Profil Menu
    document.getElementById('profileMenuButton').addEventListener('click', function () {
        const menu = document.getElementById('profileMenu');
        menu.classList.toggle('hidden');
    });
</script>
