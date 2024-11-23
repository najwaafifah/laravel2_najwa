<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Blog</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50 p-6">
    <a href="/blogs" class="text-blue-500 hover:underline mb-6 block">Kembali ke Daftar Blog</a>

    <div class="p-6 bg-white rounded shadow">
        <img src="{{ asset('storage/' . $blog->gambar) }}" alt="Gambar Blog" class="w-full h-80 object-cover mb-4">
        <h1 class="text-3xl font-bold">{{ $blog->judul }}</h1>
        <p class="text-sm text-gray-500 mt-2">Author: {{ $blog->pembuat }}</p>
        <p class="text-gray-700 mt-6">{{ $blog->isi }}</p>
    </div>

    @if (Auth::check() && Auth::user()->name === $blog->pembuat)
    <div class="mt-6 flex space-x-4">
        <!-- Edit Button -->
        <a href="/blogs/{{ $blog->id }}/edit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Edit</a>

        <!-- Delete Form -->
        <form action="/blogs/{{ $blog->id }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Delete</button>
        </form>
    </div>
    @endif
</body>

</html>