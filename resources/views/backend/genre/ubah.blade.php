@extends('/backend/layouts/t_index')

@section('isi')
    
    <div class="container">
            <div class="card mt-5" id="bungkus">
                <div class="card-header text-center" id="banner_top">
                    CRUD Data Genre - <strong>UBAH DATA</strong> - <a href="https://www.malasngoding.com/category/laravel" target="_blank">www.nakamanga.com</a>
                </div>
                <div class="card-body">
                    <a href="/genre" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                <form method="post" action="/genre/update/{{ $genre->id }}">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Nama Genre</label>
                            <input type="text" name="nama_genre" class="form-control" placeholder="Nama genre .." value="{{ $genre->nama_genre }}">

                            @if($errors->has('nama_genre'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_genre')}}
                                </div>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>

@endsection