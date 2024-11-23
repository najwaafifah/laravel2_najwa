<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-br from-gray-100 to-gray-300 min-h-screen flex items-center justify-center">
    <div class="max-w-lg w-full bg-white rounded-xl shadow-xl p-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Edit Blog</h1>
        <form action="/blogs/{{ $blog->id }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')
            <!-- Input Judul -->
            <div>
                <label for="judul" class="block text-sm font-semibold text-gray-700">Judul</label>
                <input type="text" name="judul" id="judul" value="{{ $blog->judul }}"
                    class="mt-2 w-full px-4 py-2 rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-800"
                    placeholder="Masukkan judul blog" required>
            </div>

            <!-- Input Isi -->
            <div>
                <label for="isi" class="block text-sm font-semibold text-gray-700">Isi</label>
                <textarea name="isi" id="isi" rows="5"
                    class="mt-2 w-full px-4 py-2 rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-800"
                    placeholder="Tulis isi blog Anda..." required>{{ $blog->isi }}</textarea>
            </div>

            <!-- Input Gambar -->
            <div>
                <label for="gambar" class="block text-sm font-semibold text-gray-700">Gambar</label>
                <input type="file" name="gambar" id="gambar"
                    class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2">
                @if ($blog->gambar)
                <img src="{{ asset('storage/' . $blog->gambar) }}" alt="Gambar Blog"
                    class="mt-4 rounded-lg w-32 h-32 object-cover shadow">
                @endif
            </div>

            <!-- Tombol Submit -->
            <div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white font-bold px-4 py-3 rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</body>

</html>