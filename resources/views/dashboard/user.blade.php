@extends('layouts.app')

@section('title', 'Manajemen User')

@section('header')
    @include('layouts.navbar')
@endsection

@section('content')
<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-semibold text-gray-900 mb-4">Manajemen User</h1>

    @if (session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded-lg mb-6">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
    <div class="bg-red-500 text-white p-4 rounded mb-4">
        {{ session('error') }}
    </div>
@endif

    <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="py-3 px-6 text-left">Nama</th>
                    <th class="py-3 px-6 text-left">Email</th>
                    <th class="py-3 px-6 text-left">Role</th>
                    <th class="py-3 px-6 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="border-b">
                        <td class="py-3 px-6">{{ $user->name }}</td>
                        <td class="py-3 px-6">{{ $user->email }}</td>
                        <td class="py-3 px-6">{{ $user->role }}</td>
                        <td class="py-3 px-6">
                            <form action="{{ route('users.updateRole', $user) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="flex space-x-2 items-center">
                                    <select name="role" class="border border-gray-300 p-2 rounded-md">
                                        <option value="User" {{ $user->role == 'User' ? 'selected' : '' }}>User</option>
                                        <option value="APM" {{ $user->role == 'APM' ? 'selected' : '' }}>APM</option>
                                    </select>
                                    <button class="bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600 transition-colors">Ubah</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
