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
      //
@endsection
