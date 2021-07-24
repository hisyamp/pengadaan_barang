@extends('includes.home')
@section('subjudul','Satuan Barang')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
	{{Session('success')}}
</div>
@endif

 <form action="{{ route('units.store') }}" method="post">
	@csrf
	<div class="form-group">
		<label for="">Satuan Barang</label>
		<input type="text" class="form-control" name="satuan_barang">
	</div>
	<div class="form-group">
		<button class="btn btn-primary">Simpan Satuan Barang</button>
	</div>
</form>
@endsection