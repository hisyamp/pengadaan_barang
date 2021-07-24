@extends('includes.home')
@section('subjudul','Supplier')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
	{{Session('success')}}
</div>
@endif

 <form action="{{ route('suppliers.store') }}" method="post">
	@csrf
	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label for="">Telepon</label>
		<input type="text" class="form-control" name="telepon">
	</div>
	<div class="form-group">
		<label for="">Alamat</label>
		<input type="text" class="form-control" name="alamat">
	</div>
	<div class="form-group">
		<button class="btn btn-primary">Simpan Supplier</button>
	</div>
</form>
    @endsection