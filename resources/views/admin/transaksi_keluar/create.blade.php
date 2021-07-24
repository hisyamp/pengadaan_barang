@extends('includes.home')
@section('subjudul','Transaksi Barang Keluar')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
	{{Session('success')}}
</div>
@endif

 <div class="card col-sm-8 mx-auto">
    <div class="card-header">
        <strong>Tambah Transaksi Barang Masuk</strong>
    </div>

    <div class="card-body card-block">
    <form action="{{ route('outproducts.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nama_barang" class="form-control-label">No Transaksi</label>
        <input type="text" 
        name="id_transaksi_out" 
        value="{{$data}}" 
        readonly="" 
        class="form-control @error('name') is-invalid @enderror">
        @error('name') <div class="text-muted">{{$message}}</div>@enderror
    </div>
    <div class="form-group">
        <label for="">Nama Barang</label>
        <select class="form-control" name="barang_id" id="">
            <option value="" holder>Pilih Nama Barang</option>
            @foreach($products as $result)
            <option value="{{$result->id}}">{{$result->nama_barang}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="type" class="form-control-label">Jumlah Pengurangan Stok</label>
        <input type="text" 
        name="jumlah_keluar" 
        class="form-control @error('type') is-invalid @enderror">
        @error('type') <div class="text-muted">{{$message}}</div>@enderror
    </div>

   
    
    <div class="form-group">
        <button class="btn btn-primary btn-block" type="submit">Tambah Transaksi</button>
    </div>
    </form>
    </div>
    </div>
    @endsection