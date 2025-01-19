@extends('layouts.app')

@section('title', 'register')

@section('content')
    <div class="relative" style="background-image:url('bg.jpg'); background-size: cover; background-position: center; height: 100vh;">
        <!-- Overlay Gelap hanya untuk background -->
        <div class="absolute inset-0 bg-black opacity-50"></div>
        
        <!-- Konten Form Login tetap di atas -->
        <div class="flex flex-col justify-center font-[sans-serif] sm:h-screen p-4 relative z-10">
            <div class="max-w-md w-full mx-auto border bg-white border-gray-300 rounded-2xl p-8">
                <div class="w-24 h-24 flex items-center justify-center mx-auto">
                    <img src="{{asset('logo.jpeg')}}" alt="Logo">
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
                    <p class="text-gray-800 text-sm mt-6 text-center">Already have an account? <a href="javascript:void(0);"
                            class="text-blue-900 font-semibold hover:underline ml-1">Login here</a></p>
                </form>
            </div>
        </div>
    </div>
@endsection
