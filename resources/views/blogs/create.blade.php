<h1>Tambah Blog</h1>
<form action="/tambah" method="POST">
    @csrf
    <div>
        <label for="">Judul</label>
        <input type="text" name="judul">
    </div>
    <div>
        <label for="">Isi</label>
        <input type="text" name="isi">
    </div>
    <div>
        <label for="">Pembuat</label>
        <input type="text" name="pembuat">
    </div>
    <div>
        <button type="submit">Tambah</button>
    </div>
</form>
