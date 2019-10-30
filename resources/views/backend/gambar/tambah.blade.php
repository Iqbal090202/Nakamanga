@extends('/backend/layouts/t_index')

@section('isi')
    
    <div class="container">
            <div class="card mt-5" id="bungkus">
                <div class="card-header text-center" id="banner_top">
                    CRUD Data Gambar - <strong>TAMBAH DATA</strong> - <a href="https://www.malasngoding.com/category/laravel" target="_blank">www.nakamanga.com</a>
                </div>
                <div class="card-body">
                    <a href="/gambar/{{$komik_id}}/{{$ch}}/{{ $chapter_id }}" class="btn btn-primary"><i class="fa fa-arrow-left"> Back</i></a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/gambar/store" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        
                        <div class="form-group">
                            <label>File Gambar</label>
                            <div class="custom-file">
                                <input type="file" name="file[]" class="custom-file-input" id="customFile" multiple>
                                <label class="custom-file-label" for="customFile">Pilih file</label>
                            </div>

                            @if($errors->has('file'))
                                <div class="text-danger">
                                    {{ $errors->first('file')}}
                                </div>
                            @endif
						</div>
                        <input type="hidden" name="komik_id" class="form-control" value="{{ $komik_id }}">
                        <input type="hidden" name="ch" class="form-control" value="{{ $ch }}">
                        <input type="hidden" name="chapter_id" class="form-control" value="{{ $chapter_id }}">
                        
                        <div class="form-group">
                            <button id="submitGambar" type="submit" class="btn btn-primary">
                                <i class="fa fa-save"> Save</i>
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

@endsection