<h2>Berita</h2>
@foreach ($result as $item)
    {{ $item->judul }} - {{ $item->deskripsi }} <br>
@endforeach