<!-- Menghubungkan dengan view template master -->
@extends('/frontend/layouts/master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div class="container">
    
    <div class="card mt-3" id="bungkus">
        <div class="card-header" id="banner_top">
            <h3 class="card-title">{{$komik->judul_komik}}</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="/data_gambar/cover/{{$komik->cover}}" width="90%" height="450">
                </div>

                <div class="col-md-3 mt-5">
                    <div id="title_manga">
                        <h5>Chapter</h5>
                        <h5>Post by</h5>
                        <h5>Posted on</h5>
                        <h5>Author</h5>
                        <h5>Date of release</h5>
                        <h5>Status</h5>
                        <h5>Genre</h5>

                        <div class="row">
                        <div class="col-md-12" id="iklan_baca">
                            <img src="/img/iklan/iklan7.png" width="680" height="180">
                        </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-1 mt-5">
                    <div id="title_manga">
                        <h5>:</h5>
                        <h5>:</h5>
                        <h5>:</h5>
                        <h5>:</h5>
                        <h5>:</h5>
                        <h5>:</h5>
                        <h5>:</h5>
                    </div>
                </div>

                <div class="col-md-4 mt-5">
                    <div id="title_manga">
                        <h5>{{$chapter->ch}}</h5>
                        <h5>{{$user->name}}</h5>
                        <h5>{{$chapter->created_at->diffForHumans()}}</h5>
                        <h5>{{$komik->author}}</h5>
                        <h5>{{$komik->tahun}}</h5>
                        <h5>{{$komik->status}}</h5>
                        <h5>
                        @foreach ($komik->genre as $genre)
                            {{$genre->nama_genre}},
                        @endforeach
                        </h5>
                    </div>
                </div>
            </div>

            <br>

            <h4 id="judul_manga">Sinopsis</h4>
            <div class="row">
                <div class="col-md-12">
                    <div id="title_manga" class="text-justify">
                        <h5>{{$komik->sinopsis}}</h5>
                    </div>
                </div>
            </div>

        <br>
        <h4 id="judul_manga">Chapter {{$chapter->ch}}</h4>
        <div class="row">
            <div class="col-md-6 text-center">
                <a href="/baca/{{$komik->id}}/{{$chap['prev']}}" type="button" class="btn btn-info" id="unduh">
                    <span class="fa fa-arrow-left"></span> PREV Chapter
                </a>
            </div>
            <div class="col-md-6 text-center">
                <a href="/baca/{{$komik->id}}/{{$chap['next']}}" type="button" class="btn btn-info" id="unduh">
                    NEXT Chapter <span class="fa fa-arrow-right"></span>
                </a>
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