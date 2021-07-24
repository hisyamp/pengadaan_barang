@extends('includes.home')
@section('subjudul','Barang')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
	{{Session('success')}}
</div>
@endif

 <a href="{{ route('products.create') }}" class="btn btn-info">Tambah Barang</a>
 <br><br>
 <table class="table table-striped table-hover table-sm table-bordered">
 	<thead>
                <tr>
                    <th>No. </th>
                    <th>Nama Barang</th>
                    <th>Stok</th>
                    <th>Satuan</th>
                    <th>Jenis Barang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>        
                @if ($items) 
                    @foreach($items as $result => $hasil)
                        <tr>
                            <td>{{ $result + $items->firstitem() }}</td>
                            <td>{{$hasil->nama_barang}}</td>
                            <th>{{$hasil->stok}}</th>
                            <th>{{$hasil->units->nama_satuan}}</th>
                            <th>{{$hasil->kinds->nama_jenis}}</th>
                            <td>
                                <form action="{{route('products.destroy',$hasil->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{ route('products.edit',$hasil->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="7" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                @endif
            </tbody>
 </table>
 {{$items->links()}}

@endsection