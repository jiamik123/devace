<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <form action="{{ route('update_2',$cart->id)}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
        <div class="form-group">
          <label>Jumlah</label>
          <input type="number" name="jumlah_2" class="form-control"value="{{$cart->jumlah_barang}}">
        </div>
        <br>
        <input type="submit" name="" value="submit" class="btn btn-primary">
      </form>
    </div>
    </div>
  </body>
</html>
