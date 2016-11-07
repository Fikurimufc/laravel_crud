@extends('layout')
@section('content')
<h3>Create Mahasiswa</h3>
{!! Form::open(['route'=>'main.store']) !!}
    {!! Form::text('nim', null, ['placeholder' => 'Masukkan NIM']) !!}
    {!! Form::text('nama', null, ['placeholder'=>'Masukan nama']) !!}
    {!! Form::text('kelas', null, ['placeholder' => 'Masukkan Kelas','class'=>'form-controller']) !!}
    {!! Form::submit('Simpan') !!}
{!! Form::close() !!}

@endsection
