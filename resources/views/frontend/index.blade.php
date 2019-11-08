<!-- Menghubungkan dengan view template master -->
@extends('/frontend/layouts/master')

@section('konten')

	<!-- BANNER START -->
<div class="container isiDasar">
  <div class="row mt-3">

    {{-- banner --}}
    <div class="col-md-8">
      <div class="card" id="card_banner">
        <div class="card-header" id="banner_top">
          <h4>Top Manga</h4>
        </div>
        <div class="card-body" id="banner_home">
          <div id="banner" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="data_gambar/banner/{{$banner[0]->nama_banner}}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="data_gambar/banner/{{$banner[1]->nama_banner}}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="data_gambar/banner/{{$banner[2]->nama_banner}}" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="data_gambar/banner/{{$banner[3]->nama_banner}}" alt="Fourth slide">
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
        </div>
      </div>


      <br>
    <!-- Content Start -->
      
      <div class="card mb-4" id="bungkus">
        <div class="card-header" id="banner_top">
          <h4 class="card-title">Manga Update</h4>
        </div>
        <div class="card-body">
          <div class="row">
            @foreach ($komik as $k)
              <div class="col-lg-4 card-manga">
                <div class="text-center">
                  <a href="{{route('detail', ['id'=>$k->id])}}"><img src="http://localhost/nakamanga/public/data_gambar/cover/{{$k->cover}}" width="170" height="250"></a>
                </div>
                  <div id="title_manga" class="mb-1"><a href="{{route('detail', ['id'=>$k->id])}}">{{$k->judul_komik}}</a>
                  </div>
                  <div id="genre_manga">
                    Genre :
                    @foreach ($k->genre as $g)
                      <a href="/filter/{{$g->nama_genre}}">{{$g->nama_genre}}</a>,
                    @endforeach
                  </div>
              </div>
            @endforeach
          </div>
        </div>
        <div class="card-footer">
        </div>
      </div>
      
  <!-- Content END -->
    </div>

<!-- Populer Start -->
    <div class="col-md-4">
      <div class="card" id="manga_populer">
        <div class="card-body" id="judul_panel">
          <h5 class="card-title">Daftar Populer</h5>
        </div>
        <ul class="list-group list-group-flush">
          <?php $id = 1; ?>
          @foreach ($komik2 as $k2)
                <li class="list-group-item judul-pop" id="judul-{{$id}}">
                  <a href="/detail/{{$k2->id}}"><span class="font_panel pl-3">{{$k2->judul_komik}}</span></a>
                  <i class="fa fa-arrow-down pull-right pr-2 text-white" id="down-{{$id}}"></i>
                  <div class="list-group-item detail-pop m-0 p-2" id="detail-{{$id}}">
                    <h6 class="font_panel">author: {{$k2->author}}</h6>
                    <h6 class="font_panel">status: {{$k2->status}}</h6>
                    <h6 class="font_panel">genre: 
                      @foreach ($k2->genre as $g2)
                        <a href="/filter/{{$g2->nama_genre}}" class="link-rdrc">{{$g2->nama_genre}}</a>,
                      @endforeach
                    </h6>
                  </div>
                </li>
            <?php $id++; ?>
          @endforeach
        </ul>
      </div>
    </div>
  <!-- Populer END -->
  </div>
</div>

@endsection
