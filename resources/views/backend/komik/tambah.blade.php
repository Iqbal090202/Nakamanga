@extends('/backend/layouts/t_index')

@section('isi')
    
    <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Komik - <strong>TAMBAH DATA</strong> - <a href="https://www.malasngoding.com/category/laravel" target="_blank">www.nakamanga.com</a>
                </div>
                <div class="card-body">
                    <a href="/komik" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/komik/store"  enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Judul Komik</label>
                            <input type="text" name="judul_komik" class="form-control" placeholder="Judul komik ..">

                            @if($errors->has('judul_komik'))
                                <div class="text-danger">
                                    {{ $errors->first('judul_komik')}}
                                </div>
                            @endif
						</div>

                        <div class="form-group">
                            <label>Sinopsis</label>
                            <textarea name="sinopsis" class="form-control" placeholder="Sinopsis .."></textarea>

                            @if($errors->has('sinopsis'))
                                <div class="text-danger">
                                    {{ $errors->first('sinopsis')}}
                                </div>
                            @endif
                        </div>
						
						<div class="form-group">
                            <label>Author</label>
                            <input type="text" name="author" class="form-control" placeholder="Author ..">

                            @if($errors->has('author'))
                                <div class="text-danger">
                                    {{ $errors->first('author')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="year" name="tahun" class="form-control" placeholder="Tahun ..">

                            @if($errors->has('tahun'))
                                <div class="text-danger">
                                    {{ $errors->first('tahun')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="genre">Genre</label>
                            <select class="selectpicker" multiple name="genre[]" data-width="100%">
                                @foreach ($genre as $g)
                                    <option value="{{$g->id}}">{{$g->nama_genre}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Cover</label>
                            <div class="custom-file">
                                <input type="file" name="file" class="custom-file-input" id="cover">
                                <label class="custom-file-label" for="cover">Pilih Cover</label>
                            </div>

                            @if($errors->has('file'))
                                <div class="text-danger">
                                    {{ $errors->first('file')}}
                                </div>
                            @endif
						</div>

                        <div class="form-group">
                            <input id="submitKomik" type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>

@endsection