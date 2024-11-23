<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Blog</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-br from-blue-100 to-blue-300 min-h-screen flex items-center justify-center">
    <div class="max-w-lg w-full bg-white rounded-lg shadow-lg p-8">
        <h1 class="text-3xl font-extrabold text-gray-800 mb-6 text-center">Tambah Blog</h1>
        <form action="/tambah" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <div>
                <label for="judul" class="block text-sm font-semibold text-gray-700">Judul</label>
                <input type="text" name="judul" id="judul" placeholder="Masukkan judul blog"
                    class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm px-4 py-2"
                    required>
            </div>
            <div>
                <label for="isi" class="block text-sm font-semibold text-gray-700">Isi</label>
                <textarea name="isi" id="isi" rows="5" placeholder="Tulis isi blog Anda..."
                    class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm px-4 py-2"
                    required></textarea>
            </div>
            <div>
                <label for="gambar" class="block text-sm font-semibold text-gray-700">Gambar</label>
                <input type="file" name="gambar" id="gambar"
                    class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm px-4 py-2">
            </div>
            <div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white font-bold px-4 py-3 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">
                    Tambah Blog
                </button>
            </div>
        </form>
    </div>
</body>

</html>