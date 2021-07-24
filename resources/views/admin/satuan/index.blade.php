@extends('includes.home')
@section('subjudul','Satuan')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
	{{Session('success')}}
</div>
@endif

 <a href="{{ route('units.create') }}" class="btn btn-info">Tambah Satuan</a>
 <br><br>
 <table class="table table-striped table-hover table-sm table-bordered">
 	<thead>
                <tr>
                    <th>No. </th>
                    <th>Satuan Barang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>        
                @if ($units) 
                    @foreach($units as $result => $unit)
                        <tr>
                            <td>{{ $result + $units->firstitem() }}</td>
                            <td>{{$unit->nama_satuan}}</td>
                            <td>
                                <form action="{{route('units.destroy',$unit->id)}}" method="post">
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
 {{$units->links()}}

@endsection