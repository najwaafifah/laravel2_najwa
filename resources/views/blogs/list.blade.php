<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Blog</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50 p-6">
    @if (session('success'))
    <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
        {{ session('success') }}
    </div>
    @endif

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Daftar Blog</h1>
        <div class="flex gap-4">
            <a href="/tambah" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Tambah Blog</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                    Logout
                </button>
            </form>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($blogs as $blog)
        <a href="/blogs/{{ $blog->id }}" class="p-4 bg-white rounded shadow hover:shadow-lg transition">
            <img src="{{ asset('storage/' . $blog->gambar) }}" alt="Gambar Blog" class="w-full h-48 object-cover mb-4">
            <h2 class="text-xl font-semibold">{{ $blog->judul }}</h2>
            <p class="text-gray-700 mt-2 truncate">{{ $blog->isi }}</p>
            <p class="text-sm text-gray-500 mt-4">Author: {{ $blog->pembuat }}</p>
        </a>
        @endforeach
    </div>
</body>

</html>