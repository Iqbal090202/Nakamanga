<!-- Menghubungkan dengan view template master -->
@extends('/frontend/layouts/master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div class="container isiDasar">

    <div class="card mt-3 mb-4" id="bungkus">
        <div class="card-header" id="banner_top" id="lolll">
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
        </div>
    </div>
</div>

@endsection