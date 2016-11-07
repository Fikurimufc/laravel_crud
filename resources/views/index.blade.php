@extends('layout')
@section('content')
        <h3>Read</h3>
        <table border="1" class="table table-hover">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswas as $row)
                <tr>
                    <td>{{$row->nim}}</td>
                    <td>{{$row->nama}}</td>
                    <td>{{$row->kelas}}</td>
                    <td>
                     <form method="POST" action="{{ route('main.destroy', $row->id) }}" accept-charset="UTF-8">
                        <input name="_method" type="hidden" value="DELETE">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                        <a href="{{ route('main.edit', $row->id) }}">Edit</a> | 
                        <input class="btn btn-primary" onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" value="Hapus" />
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
            <a href="{{route('main.create')}}">Create</a>
        @endsection       
