@extends('main')

@section('title','tambah fakultas')

@section('content')
<form action="{{ route('fakultas.store') }}" method="post">
    <div class ="form-group">
        <label for="nama">Nama Fakultas</label>
        <input type="text" name="nama" class="form=control" value="{{ old('nama') }}">
        @error('nama')
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
        <label for="dekan">dekan</label>
        <input type="text" name="dekan" class="form=control" value="{{ old('dekan') }}">
        @error('dekan')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary"> submit </button>
   
</form>

@endsection
