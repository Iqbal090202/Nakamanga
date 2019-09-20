<!-- Menghubungkan dengan view template master -->
@extends('/frontend/layouts/master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div class="container">
    
    <div class="card mt-3" id="bungkus">
        <div class="card-header">
            <h3 class="card-title"><strong class="text-uppercase">{{$komik->judul_komik}}</strong></h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="/data_gambar/cover/{{$komik->cover}}" width="90%" height="450">
                </div>

                <div class="col-md-3 mt-5">
                    <div id="title_manga">
                        <h4>Chapter</h4>
                        <h4>Post by</h4>
                        <h4>Posted on</h4>
                        <h4>Author</h4>
                        <h4>Date of release</h4>
                        <h4>Status</h4>
                        <h4>Genre</h4>
                    </div>
                </div>

                <div class="col-md-1 mt-5">
                    <div id="title_manga">
                        <h4>:</h4>
                        <h4>:</h4>
                        <h4>:</h4>
                        <h4>:</h4>
                        <h4>:</h4>
                        <h4>:</h4>
                        <h4>:</h4>
                    </div>
                </div>

                <div class="col-md-4 mt-5">
                    <div id="title_manga">
                        <h4>{{$chapter->ch}}</h4>
                        <h4>{{$user->name}}</h4>
                        <h4>{{$chapter->created_at->diffForHumans()}}</h4>
                        <h4>{{$komik->author}}</h4>
                        <h4>{{$komik->tahun}}</h4>
                        <h4>{{$komik->status}}</h4>
                        <h4>
                        @foreach ($komik->genre as $genre)
                            {{$genre->nama_genre}},
                        @endforeach
                        </h4>
                    </div>
                </div>
            </div>

            <br>

            <h4 id="judul_manga"><strong class="text-uppercase"> Sinopsis </strong></h4>
            <div class="row">
                <div class="col-md-12">
                    <div id="title_manga" class="text-justify">
                        <h4>{{$komik->sinopsis}}</h4>
                    </div>
                </div>
            </div>

        <br>
        <h4 id="judul_manga"><strong class="text-uppercase"> Chapter {{$chapter->ch}}</strong></h4>
        
        <div class="row">
            <div class="col-md-6 text-center">
                <button type="button" class="btn btn-info" id="unduh">
                <span class="glyphicon glyphicon-arrow-left"></span> NEXT Chapter
                </button>
            </div>
            <div class="col-md-6 text-center">
                <button type="button" class="btn btn-info" id="unduh">
                PREV Chapter <span class="glyphicon glyphicon-arrow-right"></span>
                </button>
            </div>
        </div>

        <br>
        @foreach ($gambar as $g)
            <div class="row">
            <div class="col-lg-12 text-center">
                <img class="img-fluid" src="/data_gambar/komik-{{$komik->id}}/ch-{{$chapter->ch}}/{{$g->nama_gambar}}">
            </div>
            </div>
        @endforeach
        <br>

        </div>
    </div>
</div>

@endsection