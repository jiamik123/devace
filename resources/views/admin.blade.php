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
    <div class="title m-b-md" style="color:black;">
      <br>
      <br>
      <br>
      <center><h2>Admin Board</h2></center>
    </div>
      <div class="container" style="color:black;">
        <div class="">
        <form id="barangForm" action="{{route('create')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama" class="form-control">
            @if($errors->has('nama'))
            <div class="text-alert">
                {{$errors->first('nama')}}
            </div>
            @endif
          </div>
          <div class="form-group">
            <label>Jumlah</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control">
          </div>
          <div class="form-group">
            <label>Harga Persatuan</label>
            <input type="number" name="harga" id="harga_satuan" class="form-control">
          </div>
          <div class="form-group">
            <label>Foto</label>
            <input type="file" name="gambar">
          </div>
          <div class="form-group">
            <label>Suppliyer</label>
            <select class="custom-select form-control"  name="suppliyer" id="inputGroupSelect01">
              <option value="" selected>-Nama Suppliyer-</option>
              @foreach($suppliyer as $key => $item)
                <option value="{{$item->id}}">{{ $item->nama_suppliyer }}</option>
              @endforeach
          </select>
          </div>
          <input type="button" onclick="check()" value="masukkan ke list" class="btn btn-success">
        </form>
      <p></p>
      <div class="title m-b-md" style="color : black;">
        <center><h2>View Data</h2></center>
        </div>
        <hr>
        <table class="table table-striped table-dark" width="100%">
          <tr>
            <td>No</td>
            <td>Nama Barang</td>
            <td>Jumlah</td>
            <td>Harga Persatuan</td>
            <td>suppliyer</td>
            <td>Tanggal</td>
            <td>Action</td>
          </tr>
            @foreach($data as $key => $datas)
          <tr>
            <td>{{$key+1}}</td>
            <td>{{$datas->nama_barang}}</td>
            <td>{{$datas->jumlah_barang}}</td>
            <td>{{$datas->harga_barang}}</td>
            <td>{{$datas->suppliyer->nama_suppliyer}}</td>
            <td>{{$datas->created_at}}</td>
            <td style="padding:5px"><a href="{{url('delete/'.$datas->id)}}" class="btn btn-danger" onclick="confirm('yakin mau dihapus ?')" >delete</a>
            <a href="{{route('edit',$datas)}}" class="btn btn-primary">update</a></td>
          </tr>
          @endforeach
        </table>
        {{$data->links()}}
        </div>
      </div>
    <script type="text/javascript">
    function check(){
      var jumlah = document.getElementById('jumlah').value;
      var harga_satuan = document.getElementById('harga_satuan').value;
      if(jumlah<=0){
        alert('jumlah tidak boleh kurang dari 0');
        return;
      }else if (harga_satuan<=0) {
        alert('harga satuan barang tidak boleh kurang dari 0');
        return;
      }
      // console.log(document.getElementById('barangForm'));
      document.getElementById('barangForm').submit();
    };
    // document.getElementById('form-barang').addEventListener('submit', function(e){
      // e.preventDefault();
      // document.getElementById('form-barang').submit();

    // });
    </script>
@endsection
