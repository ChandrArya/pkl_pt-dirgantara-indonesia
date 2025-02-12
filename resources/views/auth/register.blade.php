@extends('layouts.app')

@section('title', 'register')

@section('content')
    <div class="relative font-sans" style="background-image:url('bg.jpg'); background-size: cover; background-position: center; height: 100vh;">
        <!-- Overlay Gelap hanya untuk background -->
        <div class="absolute inset-0 bg-black opacity-50"></div>
        
        <!-- Konten Form Login tetap di atas -->
        <div class="flex flex-col justify-center sm:h-screen p-4 relative z-10">
              <!-- Logo dan Judul di Pojok Kiri -->
              <div class="absolute top-6 left-6 flex items-start space-x-4">
                <img src="{{ asset('spirit.png') }}" alt="Logo" class="w-20 h-20 mr-3 object-contain">
                
                <div>
                    <h1 class="text-gray-100 text-xl font-medium uppercase">Task Management Department Spirit</h1>
                    <h1 class="text-gray-100 text-lg font-medium uppercase">PT. Dirgantara Indonesia</h1>
                </div>
            </div>
            <div class="max-w-md w-full mx-auto border bg-white border-gray-300 rounded-2xl p-8">
                <div class="flex items-center justify-center mb-3">
                    <img src="{{asset('spirit.png')}}" alt="" class="w-20">
                </div>
                <div class="w-24 h-24 flex items-center justify-center mx-auto">
                    <h1 class="text-2xl font-bold font-sans">REGISTER</h1>
                </div>

                <form action="{{route('post.register')}}" method="POST">
                    @csrf
                    <div class="space-y-6">
                        <div>
                            <label class="text-gray-800 text-sm mb-2 block">Nama Lengkap</label>
                            <input name="name" type="text"
                                class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500"
                                placeholder="Masukan Nama Anda" />
                        </div>

                        <div>
                            <label class="text-gray-800 text-sm mb-2 block">username</label>
                            <input name="username" type="text"
                                class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500"
                                placeholder="Masukan Username Anda" />
                        </div>

                        <div>
                            <label class="text-gray-800 text-sm mb-2 block">Email Id</label>
                            <input name="email" type="email"
                                class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500"
                                placeholder="Masukan email Anda" />
                        </div>
                        <div>
                            <label class="text-gray-800 text-sm mb-2 block">Password</label>
                            <input name="password" type="password"
                                class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500"
                                placeholder="Enter password" />
                        </div>
                        

                       
                    </div>

                    <div class="!mt-8">
                        <button type="submit"
                            class="w-full py-3 px-4 text-sm tracking-wider font-semibold rounded-md text-white bg-blue-900 hover:bg-blue-900 focus:outline-none">
                            Create an account
                        </button>
                    </div>
                    <p class="text-gray-800 text-sm mt-6 text-center">Already have an account? <a href="{{route('login')}}"
                            class="text-blue-900 font-semibold hover:underline ml-1">Login here</a></p>
                </form>
            </div>
        </div>
    </div>
@endsection
