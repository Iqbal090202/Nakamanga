<!-- Menghubungkan dengan view template master -->
@extends('/frontend/layouts/master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div class="container isiDasar">

    <div class="card mt-3 mb-4" id="bungkus">
        <div class="card-header">
            <h4 class="card-title judul_manga">Daftar Manga</h4>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($komik as $k)
                    <div class="col-md-2 mb-3">
                    
                        <a href="{{route('detail', ['id'=>$k->id])}}"><img src="/data_gambar/cover/{{$k->cover}}" width="100%" height="240"></a>
                        <div id="title_manga">
                            <a href="{{route('detail', ['id'=>$k->id])}}">{{$k->judul_komik}}</a>
                        </div>
                        
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection