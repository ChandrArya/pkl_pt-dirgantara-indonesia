@extends('layouts.app')

@section('title', 'Login')

@section('content')


    <div class="bg-gray-800 font-sans relative"
        style="background-image: url('{{ asset('bg.jpg') }}'); background-size: cover; background-position: center; height: 100vh;">
        <!-- Overlay Gelap -->
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <!-- Konten Form Login -->
        <div class="min-h-screen flex flex-col items-center justify-center py-6 px-4 relative z-10">
            <!-- Logo dan Judul di Pojok Kiri -->
            <div class="absolute top-6 left-6 flex items-start space-x-4">
                <img src="{{ asset('logo.png') }}" alt="Logo" class="w-16 h-16 rounded-full">
                <div>
                    <h1 class="text-gray-100 text-xl font-medium uppercase">Task Management Department Spirit</h1>
                    <h1 class="text-gray-100 text-lg font-medium uppercase">PT. Dirgantara Indonesia</h1>
                </div>
            </div>

            <div class="max-w-md w-full">
                
                <div class="p-8 rounded-2xl bg-white shadow-lg">
                    <div class="-mt-6 -ml-4">
                        <a href="{{route('beranda')}}" class=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <path fill="#0f4b81" d="M4 21V9l8-6l8 6v12h-6v-7h-4v7z" />
                        </svg></a>
                    </div>
                    <!-- Judul Halaman -->
                    <div class="flex items-center justify-center mb-3">
                        <img src="{{asset('spirit.png')}}" alt="" class="w-20">
                    </div>
                    <h2 class="text-gray-800 text-center text-3xl font-bold mb-6">Sign In</h2>
                   
                    @if (session('error'))
                        <div class="bg-red-500 text-white p-4 rounded mb-4">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="bg-green-500 text-white p-4 rounded mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Form Login -->
                    <form action="{{ route('post.login') }}" method="POST" class="space-y-5">
                        @csrf

                        <!-- Input Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-800 mb-2">Email</label>
                            <input id="email" name="email" type="email" required
                                class="w-full text-gray-800 text-sm border border-gray-300 px-4 py-3 rounded-md focus:outline-blue-600"
                                placeholder="Masukkan Email Anda">
                            @error('email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Input Password -->
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-800 mb-2">Password</label>
                            <input id="password" name="password" type="password" required
                                class="w-full text-gray-800 text-sm border border-gray-300 px-4 py-3 rounded-md focus:outline-blue-600"
                                placeholder="Masukkan Password Anda">
                            @error('password')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Tombol Login -->
                        <div>
                            <button type="submit"
                                class="w-full py-3 px-4 text-sm tracking-wide rounded-lg text-white bg-blue-800 hover:bg-blue-900 focus:outline-none">
                                Sign In
                            </button>
                        </div>

                        <!-- Link Register -->
                        <p class="text-gray-600 text-sm text-center mt-6">Don't have an account?
                            <a href="{{ route('register') }}" class="text-blue-800 hover:underline font-semibold">Register
                                here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
