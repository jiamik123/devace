@extends('welcome')
@section('content')
<br>
    <div class="container" style="color:black;">
      <div class="row">
        <div class="col-md-6">
      <form action="{{route('keranjang')}}" method="post">
        {{csrf_field()}}
        <br>
        <br>
        <br>
        <div class="title m-b-md">
        <center><h2>Pembelian Bahan</h2></center>
        </div>
        <div class="form-group">
          <label>Nama Barang</label>
          <select class="form-control"  id="list" name="nama_barang" >
            <option value="" selected>-Pilih Barang-</option>
            <?php foreach ($belibahan as $key => $belibahan): ?>
              <option value="{{$belibahan->id}}" nama="{{$belibahan->nama_barang}}" harga="{{$belibahan->harga_barang}}" stok="{{$belibahan->jumlah_barang}}">{{$belibahan->nama_barang}}</option>
            <?php endforeach; ?>
          </select>
          @if($errors->has('nama'))
          <div class="text-alert">
              {{$errors->first('nama')}}
          </div>
          @endif
        </div>
        <div class="form-group">
          <label>Stock</label>
          <input type="number" id="stok" name="stocks" value="" class="form-control" readonly>
        </div>
        <div class="form-group">
          <label>Harga persatuan</label>
          <input type="number" id="harga_satuan" name="harga_satuan" value="" class="form-control" readonly>
        </div>
        <div class="form-group">
          <label>Jumlah Pembelian</label>
          <input type="number" id="jumlah_beli" min="1" name="jumlahs"  value="{{old('jumlahs')}}" class="form-control">
          {!! $errors->first('jumlahs','<span>:message</span>')!!}
        </div>
        <div class="form-group">
          <label>Total Semua</label>
          <input type="number" id="total" name="total" value="" class="form-control" readonly>
        </div>
        <div class="form-group">
          <input type="submit" name=""  onclick="check()"value="masukkan keranjang" id="btncart"  class="btn btn-primary">
        </div>
      </form>
      </div>
      <div class="col-md-6">
        <form  id="beliForm"method="post" action="{{route('bayar_cart')}}">
          {{csrf_field()}}
          <br>
          //
    @endforeach
    </table>
    <input type="submit" name="" value="Bayar" class="btn btn-success">
</div>
    </div>
  <script type="text/javascript">
  $(document).on('change', '#list', function() {
    // console.log($(this).val()); // the selected options’s value
    var id = $(this).val();
    var nama = $(this).find(':selected').attr('nama');
    var harga = $(this).find(':selected').attr('harga');
    var stok = $(this).find(':selected').attr('stok');
    $('#stok').val(stok);
    $('#harga_satuan').val(harga);
});

$('#jumlah_beli').keyup(function(){
    var jumlah = $('#jumlah_beli').val();
    var harga = $('#harga_satuan').val();
    var total = harga * jumlah;
    $('#total').val(total);

    // console.log(jumlah);
});
//   function check(){
//     var jumlah = document.getElementById('jumlah_beli').value;
//     if(jumlah<=0){
//       alert('jumlah tidak boleh kurang dari 0');
//       return;
//   }
//   document.getElementById('beliForm').submit();
// };
  </script>
@endsection
