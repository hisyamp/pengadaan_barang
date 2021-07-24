@extends('includes.home')
@section('subjudul','Barang')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
	{{Session('success')}}
</div>
@endif

 <div class="card">
    <div class="card-header">
        <strong>Tambah Barang</strong>
    </div>
    <div class="card-body card-block">
    <form action="{{ route('products.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nama_barang" class="form-control-label">Nama Barang</label>
        <input type="text" 
        name="nama_barang" 
        value="{{ old('name')}}" 
        class="form-control @error('name') is-invalid @enderror">
        @error('name') <div class="text-muted">{{$message}}</div>@enderror
    </div>
    <div class="form-group">
        <label for="type" class="form-control-label">Jumlah Stok Barang</label>
        <input type="text" 
        name="stok" 
        value="{{ old('type')}}" 
        class="form-control @error('type') is-invalid @enderror">
        @error('type') <div class="text-muted">{{$message}}</div>@enderror
    </div>
    <div class="form-group">
        <label for="">Satuan</label>
        <select class="form-control" name="satuan_id" id="">
            <option value="" holder>Pilih Satuan</option>
            @foreach($units as $result)
            <option value="{{$result->id}}">{{$result->nama_satuan}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Jenis</label>
        <select class="form-control" name="jenis_id" id="">
            <option value="" holder>Pilih Jenis</option>
            @foreach($kinds as $result)
            <option value="{{$result->id}}">{{$result->nama_jenis}}</option>
            @endforeach
        </select>
    </div>
    
    <div class="form-group">
        <button class="btn btn-primary btn-block" type="submit">Tambah Barang</button>
    </div>
    </form>
    </div>
    </div>
    @endsection