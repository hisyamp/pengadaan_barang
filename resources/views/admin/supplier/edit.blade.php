@extends('includes.home')
@section('subjudul','Supplier')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
	{{Session('success')}}
</div>
@endif

 <form action="{{ route('suppliers.update',$suppliers->id) }}" method="post">
	@csrf
	@method('patch')
	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" class="form-control" name="nama" value="{{$suppliers->nama}}">
	</div>
	<div class="form-group">
		<label for="">Telepon</label>
		<input type="text" class="form-control" name="telepon" value="{{$suppliers->telepon}}">
	</div>
	<div class="form-group">
		<label for="">Alamat</label>
		<input type="text" class="form-control" name="alamat" value="{{$suppliers->alamat}}">
	</div>
	<div class="form-group">
		<button class="btn btn-primary">Simpan Supplier</button>
	</div>
</form>
    @endsection