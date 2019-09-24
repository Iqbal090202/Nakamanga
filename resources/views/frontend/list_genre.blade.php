<!-- Menghubungkan dengan view template master -->
@extends('/frontend/layouts/master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<!-- BANNER START -->
<div class="container">
  <br>
  <div class="row">
    <div class="col-md-8">
      <div class="card mb-3" id="card_banner">
        <div class="card-header" id="banner_top">
          <h4>List Genre</h4>
        </div>
        <div class="card-body" id="banner_home">
            <div class="row">
          @foreach ($genre as $g)
          <div class="col-md-6">
              <ul class="list-group" id="list_genre">
                <li class="list-group-item list_genre"> <a href="{{route('filter_genre', ['genre'=>$g->nama_genre])}}">{{$g->nama_genre}}</a> </li>
              </ul>
          </div>
          @endforeach
      </div>
        </div>
      </div>
    </div>
    <!-- Content END -->
      <div class="col-md-4">
      <div class="card" id="manga_populer">
        <div class="card-body" id="judul_panel">
          <h5 class="card-title">Manga Populer</h5>
        </div>
        <ul class="list-group list-group-flush">
          @foreach ($komik2 as $k2)
            <li class="list-group-item">
              <a href="/detail/{{$k2->id}}"><h6 class="font_panel">{{$k2->judul_komik}}</h6></a>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  
<!-- BANNER END -->

<!-- 1 Start -->
  </div><br><br><br><br><br><br>
    
</div>

<!-- 1 END -->

@endsection