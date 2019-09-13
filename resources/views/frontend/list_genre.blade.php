<!-- Menghubungkan dengan view template master -->
@extends('/frontend/layouts/master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<!-- BANNER START -->
<div class="container ">
  <div class="row">
    <div class="col-md-8">

      <h3 id="judul_manga"><strong class="text-uppercase"> List Genre </strong></h3>

    <br>
    <!-- Content Start -->
  
      <div class="row">
          @foreach ($genre as $g)
          <div class="col-md-6">
              <ul class="list-group" id="list_genre">
                <li class="list-group-item list_genre"> <a href="{{$g->id}}">{{$g->nama_genre}}</a> </li>
              </ul>
          </div>
          @endforeach
      </div>
    </div>
    <!-- Content END -->
  
  
    <!-- Populer Start -->
    <div class="col-md-4">
      
      <div class="panel panel-primary" id="populer">
        <div class="panel-body">
          <h3 class="text-on-pannel" id="populer4"><strong class="text-uppercase"> Populer </strong></h3>
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
          </ul>
        </div>
      </div>

    </div>
  <!-- Populer END -->
  
<!-- BANNER END -->

<!-- 1 Start -->
  </div>
    
</div>

<!-- 1 END -->

@endsection