@extends('welcome')
@section('style')
<style>
  .text td{
    font-size: 20px;
    font-family:sans-serif;
  }
  .button rt{
    padding:20px;
    margin:10px;
  }
</style>
<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
@endsection
@section('content')
<br>
<br>
<br>
<div class="title m-b-md" style="color:black;">
    <center><h2>Data Petugas</h2></center>
    </div>
    <div class="container" style="color:black; height:100%;">
      <form action="{{route('create_petugas')}}" method="post">
      {{csrf_field()}}
      <div class="form-group">
        <label>Nama Petugas</label>
        <input type="text" name="nama_petugas" class="form-control" value="{{old ('nama_petugas')}}">
        {!! $errors->first('nama_petugas','<span>:message</span>')!!}
        @if($errors->has('nama'))
        <div class="text-alert">
            {{$errors->first('nama')}}
        </div>
        @endif
      </div>
      <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control" value="{{old ('alamat')}}">
        {!! $errors->first('alamat','<span>:message</span>')!!}
      </div>
      <div class="form-group">
        <label>No Telepon</label>
        <input type="number" name="no_telepon" class="form-control" value="{{old ('no_telepon')}}">
        {!! $errors->first('no_telepon','<span>:message</span>')!!}
      </select>
      </div>
      <input type="submit" name="" value="submit" class="btn btn-primary">
    </form>
    </div>
    <br>
@endsection
