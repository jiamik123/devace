@extends('welcome')
@section('home')
<br>
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('img/buah.jpg')}}" height="615px" weight="615px" class="d-block w-100" alt="gambar tidak ada">
        <div class="carousel-caption d-none d-md-block">
          <b><p>Banyak barang kebutuhanmu disini</p></b>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('img/kasir_alat.jpg')}}" height="615px" weight="615px" class="d-block w-100" alt="gambar tidak ada">
        <div class="carousel-caption d-none d-md-block">
          <b><p>Harga yang dapat dijangkau untuk semua kalangan</p></b>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('img/kasir.jpg')}}" height="615px" weight="615px" class="d-block w-100" alt="gambar tidak ada">
        <div class="carousel-caption d-none d-md-block">
          <b><p>Semakin banyak membeli semakin banyk juga diskon yang dapat kamu dapatkan</p></b>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
@endsection
@section('content')
<div class="container" style="color:black;">
<br>
<br>
<center><h2>PRODUK KAMI</h2></center>
</div>
<br>
<div class="row">
  @foreach($barang as $data)
  <div class="col-lg-6">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="image/{{$data->gambar}}" class="card-img" alt="gambar tidak ada">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$data->nama_barang}}</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            <a href="{{route('keranjang', $data->id)}}" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
  </div>
  </div>
    @endforeach
</div>

<!-- <div class="container">
  <div class="row">
    @foreach($barang as $data)
    <div class="col-sm-4">
    <div class="card mb-4" style="width: 18rem;">
      <img src="image/{{$data->gambar}}" class="card-img-top" alt="gambar tidak ada">
      <div class="card-body">
        <h5 class="card-title">{{$data->nama_barang}}</h5>
        <a href="{{route('keranjang', $data->id)}}" class="btn btn-primary">Beli</a>
      </div>
    </div>
    </div>
    @endforeach
  </div> -->
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="navbar-footer" style="color:black;">
  <center><b><h1>Tentang Kami</h1></b></center>
  <center><b><p>Lorem ipsum dolor sit amet,
    consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
     Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
      pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
      anim id est laborum.</p></b></center>
    </div>
</div>
@endsection
