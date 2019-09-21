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
                        <div class="dropdown">
                          <button class="btn  dropdown-toggle" type="button" id="dropdownMenuMenu" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Mangaka
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuMenu">
                            <button class="dropdown-item" type="button">Action</button>
                            <button class="dropdown-item" type="button">Another action</button>
                            <button class="dropdown-item" type="button">Something else here</button>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="dropdown">
                          <button class="btn  dropdown-toggle" type="button" id="dropdownMenuMenu" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Tahun Rilis
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuMenu">
                            <button class="dropdown-item" type="button">Action</button>
                            <button class="dropdown-item" type="button">Another action</button>
                            <button class="dropdown-item" type="button">Something else here</button>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="dropdown">
                          <button class="btn  dropdown-toggle" type="button" id="dropdownMenuMenu" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Status
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuMenu">
                            <button class="dropdown-item" type="button">Action</button>
                            <button class="dropdown-item" type="button">Another action</button>
                            <button class="dropdown-item" type="button">Something else here</button>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="dropdown">
                          <button class="btn  dropdown-toggle" type="button" id="dropdownMenuMenu" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Genre 1
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuMenu">
                            <button class="dropdown-item" type="button">Action</button>
                            <button class="dropdown-item" type="button">Another action</button>
                            <button class="dropdown-item" type="button">Something else here</button>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="dropdown">
                          <button class="btn  dropdown-toggle" type="button" id="dropdownMenuMenu" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Genre 2
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuMenu">
                            <button class="dropdown-item" type="button">Action</button>
                            <button class="dropdown-item" type="button">Another action</button>
                            <button class="dropdown-item" type="button">Something else here</button>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="dropdown">
                          <button class="btn  dropdown-toggle" type="button" id="dropdownMenuMenu" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Blank
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuMenu">
                            <button class="dropdown-item" type="button">Action</button>
                            <button class="dropdown-item" type="button">Another action</button>
                            <button class="dropdown-item" type="button">Something else here</button>
                          </div>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn " type="button"><i class="fa fa-search"></i>Search</button>
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
                <div class="btn-group mr-2" role="group" aria-label="First group">
                    <button type="button" class="btn ">1</button>
                    <button type="button" class="btn ">2</button>
                    <button type="button" class="btn ">3</button>
                    <button type="button" class="btn ">4</button>
                    <button type="button" class="btn ">5</button>
                    <button type="button" class="btn ">6</button>
                    <button type="button" class="btn ">7</button>
                    <button type="button" class="btn ">8</button>
                </div>
            </div>
        </div>
     </div>

        </div>
    </div>
</div>

@endsection