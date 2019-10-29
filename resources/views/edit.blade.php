<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <form action="{{ route('update',$barang->id)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
          <label>Nama Barang</label>
          <input type="text" name="nama" class="form-control" value="{{$barang->nama_barang}}">
          @if($errors->has('nama'))
          <div class="text-alert">
              {{$errors->first('nama')}}
          </div>
          @endif
        </div>
        <div class="form-group">
          <label>Jumlah</label>
          <input type="number" name="jumlah" class="form-control"value="{{$barang->jumlah_barang}}">
        </div>
        <div class="form-group">
          <label>Harga</label>
          <input type="number" name="harga" class="form-control"value="{{$barang->harga_barang}}">
        </div>
        <div class="form-group">
          <label>Foto</label>
          <input type="file" name="gambar_1">
        </div>
        <div class="form-group">
          <label>Suppliyer</label>
          <select class="custom-select form-control"  name="suppliyer" id="inputGroupSelect01">
            @foreach($suppliyer as $key => $item)
            @if($item->id == $barang->id)
              <option value="{{$item->id}}" selected>{{ $item->nama_suppliyer }}</option>
            @else
            <option value="{{$item->id}}">{{ $item->nama_suppliyer }}</option>
            @endif
            @endforeach
        </select>
        <br>
        <input type="submit" name="" value="submit" class="btn btn-primary">
      </form>
    </div>
  </body>
</html>
