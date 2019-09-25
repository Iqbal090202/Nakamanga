@extends('/backend/layouts/t_index')

@section('isi')
    
    <div class="container">
            <div class="card mt-5" id="bungkus">
                <div class="card-header text-center" id="banner_top">
                    CRUD Data MANGA - <strong>EDIT DATA</strong> - <a href="https://www.malasngoding.com/category/laravel" target="_blank">www.nakamanga.com</a>
                </div>
                <div class="card-body">
                    <a href="/komik" class="btn btn-primary"><i class="fa fa-arrow-left"> Back</i></a>
                    <br/>
                    <br/>
                    
                <form method="post" action="/komik/update/{{ $komik->id }}"  enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Title Manga</label>
                            <input type="text" name="judul_komik" class="form-control" placeholder="Title Manga .." value="{{ $komik->judul_komik }}">

                            @if($errors->has('judul_komik'))
                                <div class="text-danger">
                                    {{ $errors->first('judul_komik')}}
                                </div>
                            @endif
						</div>

                        <div class="form-group">
                            <label>Synopsis</label>
                            <textarea name="sinopsis" class="form-control" placeholder="Synopsis ..">{{ $komik->sinopsis }}</textarea>

                            @if($errors->has('sinopsis'))
                                <div class="text-danger">
                                    {{ $errors->first('sinopsis')}}
                                </div>
                            @endif
                        </div>
						
						<div class="form-group">
                            <label>Author</label>
                            <input type="text" name="author" class="form-control" placeholder="Author .." value="{{ $komik->author }}">

                            @if($errors->has('author'))
                                <div class="text-danger">
                                    {{ $errors->first('author')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Year</label>
                            <input type="year" name="tahun" class="form-control" placeholder="Year .." value="{{ $komik->tahun }}">

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
                            <img src="/data_gambar/cover/{{$komik->cover}}" class="img-thumbnail img-fluid"><br>
                            <label>File Image</label>
                            <div class="custom-file">
                                <input type="file" name="file" class="custom-file-input" id="cover" value="{{ $komik->cover }}">
                                <label class="custom-file-label" for="cover">Choose Cover</label>
                            </div>

                            @if($errors->has('file'))
                                <div class="text-danger">
                                    {{ $errors->first('file')}}
                                </div>
                            @endif
						</div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Save">
                        </div>

                    </form>

                </div>
            </div>
        </div>

@endsection