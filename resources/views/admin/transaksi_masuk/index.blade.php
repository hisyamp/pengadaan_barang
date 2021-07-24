@extends('includes.home')
@section('subjudul','Transaksi Barang Masuk')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
	{{Session('success')}}
</div>
@endif

 <a href="{{ route('inproducts.create') }}" class="btn btn-info">Tambah Transaksi</a>
 <br><br>
 <table class="table table-striped table-hover table-sm table-bordered">
 	<thead>
                <tr>
                    <th>No. </th>
                    <th>No. Transaksi</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Masuk</th>
                    <th>Tanggal Masuk</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>        
                @if ($items) 
                    @foreach($items as $result => $hasil)
                        <tr>
                            <td>{{$result + $items->firstitem() }}</td>
                            <td>{{$hasil->id_transaksi_in}}</td>
                            <td>{{$hasil->barangs->nama_barang}}</td>
                            <th>{{$hasil->jumlah_masuk}}</th>
                            <th>{{$hasil->created_at}}</th>
                            <td>
                                <form action="{{route('inproducts.destroy',$hasil->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{ route('inproducts.edit',$hasil->id) }}" class="btn btn-primary btn-sm">Edit</a>
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