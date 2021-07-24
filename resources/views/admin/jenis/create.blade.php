@extends('includes.home')
@section('subjudul','Jenis Barang')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
	{{Session('success')}}
</div>
@endif

 <form action="{{ route('kinds.store') }}" method="post">
	@csrf
	<div class="form-group">
		<label for="">Jenis Barang</label>
		<input type="text" class="form-control" name="jenis_barang">
	</div>
	<div class="form-group">
		<button class="btn btn-primary">Simpan Jenis Barang</button>
	</div>
</form>
    @endsection