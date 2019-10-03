@extends('/backend/layouts/t_index')

@section('isi')
    
    <div class="container">
            <div class="card mt-5" id="bungkus">
                <div class="card-header text-center" id="banner_top">
                    CRUD Data Genre - <strong>ADD DATA</strong> - <a href="https://www.malasngoding.com/category/laravel" target="_blank">www.nakamanga.com</a>
                </div>
                <div class="card-body">
                    <a href="/genre" class="btn btn-primary"><i class="fa fa-arrow-left"> Back</i></a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/genre/store">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Title Genre</label>
                            <input type="text" name="nama_genre" class="form-control" placeholder="Title genre .." autocomplete="off">

                            @if($errors->has('nama_genre'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_genre')}}
                                </div>
                            @endif
						</div>

                        <div class="form-group">
                            <button id="submitGenre" type="submit" class="btn btn-primary">
                                <i class="fa fa-save"> Save</i>
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

@endsection