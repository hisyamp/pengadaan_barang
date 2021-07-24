@extends('includes.home')
@section('subjudul','Transaksi Barang Masuk')
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
    <form action="{{ route('inproducts.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nama_barang" class="form-control-label">No Transaksi</label>
        <input type="text" 
        name="id_transaksi_in" 
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
        <label for="">Supplier</label>
        <select class="form-control" name="supplier_id" id="">
            <option value="" holder>Pilih Supplier</option>
            @foreach($suppliers as $result)
            <option value="{{$result->id}}">{{$result->nama}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="type" class="form-control-label">Jumlah Tambah Stok</label>
        <input type="text" 
        name="jumlah_masuk" 
        class="form-control @error('type') is-invalid @enderror">
        @error('type') <div class="text-muted">{{$message}}</div>@enderror
    </div>

   
    
    <div class="form-group">
        <button class="btn btn-primary btn-block" type="submit">Tambah Barang</button>
    </div>
    </form>
    </div>
    </div>
    @endsection