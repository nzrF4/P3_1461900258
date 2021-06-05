<form action="{{ route('data_tambah0258') }}" method="post">
    @csrf
    Nama: <input type="text" name='nama_pasien'>
    Alamat: <input type="text" name='alamat_pasien'>
    <button type="submit">Simpan</button>
</form>