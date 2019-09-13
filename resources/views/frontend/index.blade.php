<!-- Menghubungkan dengan view template master -->
@extends('/frontend/layouts/master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

	<!-- BANNER START -->
<div class="container isiDasar">
  <div class="row mt-3">
    <div class="col-md-8">
      <div id="banner" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/kaguya.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/kaguya.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/kaguya.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#banner" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#banner" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    <br>
    <!-- Content Start -->
  
  <div class="card mb-4" id="bungkus">
    <div class="card-header">
      <h4 class="card-title">Manga Terupdate</h4>
    </div>
    <div class="card-body">
      <div class="row">
        @foreach ($komik as $k)
          <div class="col-md-3 mb-3">
              <a href="{{route('detail', ['id'=>$k->id])}}"><img src="/data_gambar/cover/{{$k->cover}}" width="100%" height="250"></a>
              <div id="title_manga" class="mb-1"><a href="{{route('detail', ['id'=>$k->id])}}">{{$k->judul_komik}}</a>
              </div>
              <div id="genre_manga">
                Genre :
                @foreach ($k->genre as $g)
                  <a href="/list_genre/{{$g->id}}">{{$g->nama_genre}}</a>,
                @endforeach
              </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- Content END -->
</div>

<!-- Populer Start -->
  <div class="col-md-4">
    
    <div class="panel panel-primary" id="populer">
    <div class="panel-body">
      <h3 class="text-on-pannel" id="populer2"><strong class="text-uppercase"> Populer </strong></h3>
      <ul>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li>
        <li>
          <a href="#">Shokugeki No Soma</a>
        </li> 
      </ul>
    </div>
    </div>

  </div>
  <!-- Populer END -->


   
  
</div>

<!-- BANNER END -->

<!-- 1 Start -->

    

<!-- 1 END -->





</div>

@endsection