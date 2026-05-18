@extends('main')

@section('title','tambah program studi')

@section('content')
<form action="{{ route('prodi.store') }}" method="post">

    <div class ="form-group">
        <label for="nama prodi">nama prodi</label>
        <input type="text" name="nama prodi" class="form=control" value="{{ old('namaprodi') }}">
        @error('nama prodi')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class ="form-group">
        <label for="singkatan">singkatan</label>
        <input type="text" name="singkatan" class="form=control" value="{{ old('singkatan') }}">
        @error('singkatan')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class ="form-group">
        <label for="kaprodi">kaprodi</label>
        <input type="text" name="kaprodi" class="form=control" value="{{ old('kaprodi') }}">
        @error('kaprodi')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="fakultas_id">Fakultas</label>
        <select name="fakultas_id" class = "form-control" >
            <option value=""> -- pilih Fakultas --</option>
            @foreach ($fakultas as $f)
                <option value="{{ $f -> id }}"{{ old('fakultas_id') == $f->id ? 'selected':''}}>
                    {{ $f->nama }}
                </option>
            @endforeach
        </select>
        @error('fakultas_id')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary"> submit </button>
   
</form>

@endsection
