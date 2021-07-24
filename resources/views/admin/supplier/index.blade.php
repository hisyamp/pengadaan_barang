@extends('includes.home')
@section('subjudul','Jenis')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
	{{Session('success')}}
</div>
@endif

 <a href="{{ route('suppliers.create') }}" class="btn btn-info">Tambah Supplier</a>
 <br><br>
 <table class="table table-striped table-hover table-sm table-bordered">
 	<thead>
                <tr>
                    <th>No. </th>
                    <th>Nama Supplier</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>        
                @if ($suppliers) 
                    @foreach($suppliers as $result => $hasil)
                        <tr>
                            <td>{{ $result + $suppliers->firstitem() }}</td>
                            <td>{{$hasil->nama}}</td>
                            <td>{{$hasil->telepon}}</td>
                            <td>{{$hasil->alamat}}</td>
                            <td>
                                <form action="{{route('suppliers.destroy',$hasil->id)}}" method="post">
                                @csrf
                                @method('delete') 
                                <a href="{{ route('suppliers.edit',$hasil->id) }}" class="btn btn-primary btn-sm">Edit</a>
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
 {{$suppliers->links()}}

@endsection