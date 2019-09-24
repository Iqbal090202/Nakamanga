<!-- Menghubungkan dengan view template master -->
@extends('/frontend/layouts/master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div class="container isiDasar">

        <div class="card mt-3 mb-4" id="bungkus">
                    <div class="card-header" id="banner_top">
                        <h4 class="card-title judul_manga">Advance Filter</h4>
                    </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <label id="label_filter">Mangaka</label>
                        <select class="selectpicker btn btn-primary" data-style="btn-info">
                          <option class="option_select"></option>
                          <option class="option_select">Toronto</option>
                          <option class="option_select">Bucharest</option>
                          <option class="option_select">Paris</option>  
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label id="label_filter">Tahun Rilis</label>
                        <select class="selectpicker btn btn-primary" data-style="btn-info">
                          <option class="option_select"></option>
                          <option class="option_select">Toronto</option>
                          <option class="option_select">Bucharest</option>
                          <option class="option_select">Paris</option>  
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label id="label_filter">Status</label>
                        <select class="selectpicker btn btn-primary" data-style="btn-info">
                          <option class="option_select"></option>
                          <option class="option_select">Toronto</option>
                          <option class="option_select">Bucharest</option>
                          <option class="option_select">Paris</option>  
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label id="label_filter">Genre 1</label>
                        <select class="selectpicker btn btn-primary" data-style="btn-info">
                          <option class="option_select"></option>
                          <option class="option_select">Toronto</option>
                          <option class="option_select">Bucharest</option>
                          <option class="option_select">Paris</option>  
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label id="label_filter">Genre 2</label>
                        <select class="selectpicker btn btn-primary" data-style="btn-info">
                          <option class="option_select"></option>
                          <option class="option_select">Toronto</option>
                          <option class="option_select">Bucharest</option>
                          <option class="option_select">Paris</option>  
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label id="label_filter">Blank</label>
                        <select class="selectpicker btn btn-primary" data-style="btn-info">
                          <option class="option_select"></option>
                          <option class="option_select">Toronto</option>
                          <option class="option_select">Bucharest</option>
                          <option class="option_select">Paris</option>  
                        </select>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn " type="button"><label class="fa fa-search"></label>Search</button>
                    </div>
                </div>

            </div>
        </div>

    <div class="card mt-3 mb-4" id="bungkus">
        <div class="card-header" id="banner_top">
            <h4 class="card-title judul_manga">Daftar Manga</h4>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($komik as $k)
                    <div class="col-lg-3">
                    <div class="text-center">
                        <a href="{{route('detail', ['id'=>$k->id])}}"><img src="/data_gambar/cover/{{$k->cover}}" width="200" height="280"></a>
                    </div>
                        <div id="title_manga">
                            <a href="{{route('detail', ['id'=>$k->id])}}">{{$k->judul_komik}}</a>
                        </div><br>
                        
                    </div>
                @endforeach
            </div>


        <div class="text-center">
      <div class="d-inline-block">
            <div class="btn-toolbar mx-auto" role="toolbar">
                <div class="btn-group mr-2" id="btn_huruf" role="group" aria-label="First group">
                    <button type="button" class="btn ">A</button>
                    <button type="button" class="btn ">B</button>
                    <button type="button" class="btn ">C</button>
                    <button type="button" class="btn ">D</button>
                    <button type="button" class="btn ">E</button>
                    <button type="button" class="btn ">F</button>
                    <button type="button" class="btn ">G</button>
                    <button type="button" class="btn ">H</button>
                    <button type="button" class="btn ">I</button>
                    <button type="button" class="btn ">J</button>
                    <button type="button" class="btn ">K</button>
                    <button type="button" class="btn ">L</button>
                    <button type="button" class="btn ">M</button>
                    <button type="button" class="btn ">N</button>
                    <button type="button" class="btn ">O</button>
                    <button type="button" class="btn ">P</button>
                    <button type="button" class="btn ">Q</button>
                    <button type="button" class="btn ">R</button>
                    <button type="button" class="btn ">S</button>
                    <button type="button" class="btn ">T</button>
                    <button type="button" class="btn ">U</button>
                    <button type="button" class="btn ">V</button>
                    <button type="button" class="btn ">W</button>
                    <button type="button" class="btn ">X</button>
                    <button type="button" class="btn ">Y</button>
                    <button type="button" class="btn ">Z</button>
                </div>
            </div>
        </div>
     </div>

        </div>
    </div>
</div>

@endsection