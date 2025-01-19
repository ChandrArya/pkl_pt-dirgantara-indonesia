@extends('layouts.app')

@section('title', 'login')

@section('content')
    <div class="bg-gray-800 font-[sans-serif] relative"
        style="background-image:url('bg.jpg'); background-size: cover; background-position: center; height: 100vh;">
        <!-- Overlay Gelap -->
        <div class="absolute inset-0 bg-black opacity-50"></div>
        
        <!-- Konten Form Login -->
        <div class="min-h-screen flex flex-col items-center justify-center py-6 px-4 relative z-10">
            <div class="max-w-md w-full">
                <div class="p-8 rounded-2xl bg-white shadow">
                    <!-- Memusatkan gambar -->
                    <div class="w-20 h-20 flex items-center justify-center mx-auto">
                        <img src="{{asset('logo.jpeg')}}" alt="Logo">
                    </div>
                    
                    <h2 class="text-gray-800 text-center text-2xl font-bold">Sign in</h2>
                    <form class="mt-8 space-y-4" action="{{route('post.login')}}" method="POST">
                        @csrf
                        <div>
                            <label class="text-gray-800 text-sm mb-2 block">Email</label>
                            <div class="relative flex items-center">
                                <input name="email" type="text" required
                                    class="w-full text-gray-800 text-sm border border-gray-300 px-4 py-3 rounded-md outline-blue-600"
                                    placeholder="Masukan Email Anda" />
                            </div>
                        </div>

                        <div>
                            <label class="text-gray-800 text-sm mb-2 block">Password</label>
                            <div class="relative flex items-center">
                                <input name="password" type="password" required
                                    class="w-full text-gray-800 text-sm border border-gray-300 px-4 py-3 rounded-md outline-blue-600"
                                    placeholder="Masukan Password Anda" />
                            </div>
                        </div>

                        

                        <div class="!mt-8">
                            <button type="submit"
                                class="w-full py-3 px-4 text-sm tracking-wide rounded-lg text-white bg-blue-900 hover:bg-blue-900 focus:outline-none">
                                Sign in
                            </button>
                        </div>
                        <p class="text-gray-800 text-sm !mt-8 text-center">Don't have an account? <a href="javascript:void(0);"
                                class="text-blue-900 hover:underline ml-1 whitespace-nowrap font-semibold">Register
                                here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
