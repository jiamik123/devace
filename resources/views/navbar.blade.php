<style media="screen">
.nabar-header{
  position: absolute;
  width: 100%;
  display: inline;
  text-align: center;
  font-style: normal;
  padding: 20px 0;
  top: 0;
  /* background-color: #b6e6bd; */
  border-top: 12px solid #b6e6bd;
  background: #6bc5d2 !important;
}
.nabar-footer{
position: absolute;
width: 100%;
bottom: 0;
left: 0;
display: inline;
text-align: center;
padding: 20px 0;
color: #fff;
border-top: 3px solid #fff;
background-color: #fff;
}
</style>
@if (Route::has('login'))
    <div class="links nabar-header">
        @auth
      <nav class="navbar-expand-lg navbar-light" style="background-color:#6bc5d2">
  <a class="navbar-brand" >
    <img src="/img/rect1233.png" alt="gambar tidak ada" height="60px" width="140px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="color : black;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <b><a class="nav-link" href="{{route('home2') }}">Home <span class="sr-only">(current)</span></a></b>
      </li>
      <li class="nav-item active">
        <b><a class="nav-link" href="{{url('beli_bahan')}}">Beli Bahan <span class="sr-only">(current)</span></a></b>
      </li>
      <li class="nav-item active">
        <b><a class="nav-link" href="{{url('admin')}}">Admin <span class="sr-only">(current)</span></a></b>
      </li>
      <li class="nav-item active">
        <b><a class="nav-link" href="{{url('petugas')}}">Petugas<span class="sr-only">(current)</span></a></b>
      </li>
      <li class="nav-item active">
        <b><a class="nav-link" href="{{ url('/contact') }}">Contact us<span class="sr-only">(current)</span></a></b>
      </li>
      <li class="nav-item active">
        <b><a class="nav-link" href="{{ url('/home') }}">Log-Out<span class="sr-only">(current)</span></a></b>
      </li>
    </ul>
  </div>
</nav>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>
    <br>
    <br>
@endif
