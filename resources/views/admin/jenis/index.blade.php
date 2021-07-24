@extends('includes.home')
@section('subjudul','Jenis Barang')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
	{{Session('success')}}
</div>
@endif

 <a href="{{ route('kinds.create') }}" class="btn btn-info">Tambah Jenis Barang</a>
 <br><br>
 <table class="table table-striped table-hover table-sm table-bordered">
 	<thead>
                <tr>
                    <th>No. </th>
                    <th>Jenis Barang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>        
                @if ($items) 
                    @foreach($items as $result => $hasil)
                        <tr>
                            <td>{{ $result + $items->firstitem() }}</td>
                            <td>{{$hasil->nama_jenis}}</td>
                            <td>
                                <form action="{{route('kinds.destroy',$hasil->id)}}" method="post">
                                @csrf
                                @method('delete') 
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