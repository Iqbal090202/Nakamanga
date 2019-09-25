@extends('/backend/layouts/t_index')

@section('isi')
    
    <div class="container">
            <div class="card mt-5" id="bungkus">
                <div class="card-header text-center" id="banner_top">
                    CRUD Data Manga - <strong>ADD DATA</strong> - <a href="https://www.malasngoding.com/category/laravel" target="_blank">www.nakamanga.com</a>
                </div>
                <div class="card_komik card-body">
                    <a href="/komik" class="btn btn-primary"><i class="fa fa-arrow-left"> Back</i></a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/komik/store"  enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Title Manga</label>
                            <input type="text" name="judul_komik" class="form-control" placeholder="Title Manga ..">

                            @if($errors->has('judul_komik'))
                                <div class="text-danger">
                                    {{ $errors->first('judul_komik')}}
                                </div>
                            @endif
						</div>

                        <div class="form-group">
                            <label>Synopsis</label>
                            <textarea name="sinopsis" class="form-control" placeholder="Synopsis .."></textarea>

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
                            <label>Year</label>
                            <input type="year" name="tahun" class="form-control" placeholder="Year ..">

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
                            <div class="custom-file" id="search_cover">
                                <input type="file" name="file" class="custom-file-input" id="cover">
                                <label class="custom-file-label" for="cover">Choose Cover</label>
                            </div>

                            @if($errors->has('file'))
                                <div class="text-danger">
                                    {{ $errors->first('file')}}
                                </div>
                            @endif
						</div>

                        <div class="form-group">
                            <input id="submitKomik" type="submit" class="btn btn-success" value="Save">
                        </div>

                    </form>

                </div>
            </div>
        </div>

@endsection