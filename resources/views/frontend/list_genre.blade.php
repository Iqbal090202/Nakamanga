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
      <div class="col-md-6">
          <ul class="list-group" id="list_genre">
            <li class="list-group-item list_genre"> <a href="#">Romance</a> </li>
            <li class="list-group-item list_genre">  <a href="#">Comedy</a> </li>
             <li class="list-group-item list_genre"> <a href="#">Romance</a> </li>
            <li class="list-group-item list_genre">  <a href="#">Comedy</a> </li>
             <li class="list-group-item list_genre"> <a href="#">Romance</a> </li>
            <li class="list-group-item list_genre">  <a href="#">Comedy</a> </li>
             <li class="list-group-item list_genre"> <a href="#">Romance</a> </li>
            <li class="list-group-item list_genre">  <a href="#">Comedy</a> </li>
             <li class="list-group-item list_genre"> <a href="#">Romance</a> </li>
            <li class="list-group-item list_genre">  <a href="#">Comedy</a> </li>
             <li class="list-group-item list_genre"> <a href="#">Romance</a> </li>
            <li class="list-group-item list_genre">  <a href="#">Comedy</a> </li>
          </ul>
      </div>
      <div class="col-md-6">
          <ul class="list-group">
            <li class="list-group-item list_genre">  <a href="#">Drama</a> </li>
            <li class="list-group-item list_genre">  <a href="#">Action</a> </li>
             <li class="list-group-item list_genre"> <a href="#">Romance</a> </li>
            <li class="list-group-item list_genre">  <a href="#">Comedy</a> </li>
             <li class="list-group-item list_genre"> <a href="#">Romance</a> </li>
            <li class="list-group-item list_genre">  <a href="#">Comedy</a> </li>
             <li class="list-group-item list_genre"> <a href="#">Romance</a> </li>
            <li class="list-group-item list_genre">  <a href="#">Comedy</a> </li>
             <li class="list-group-item list_genre"> <a href="#">Romance</a> </li>
            <li class="list-group-item list_genre">  <a href="#">Comedy</a> </li>
             <li class="list-group-item list_genre"> <a href="#">Romance</a> </li>
            <li class="list-group-item list_genre">  <a href="#">Comedy</a> </li>
          </ul>
      </div>
    </div>
  <!-- Content END -->
  
    </div>

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


   
  
</div>

<!-- BANNER END -->

<!-- 1 Start -->

    

<!-- 1 END -->





</div>

@endsection