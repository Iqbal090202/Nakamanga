@extends('/backend/layouts/t_index')

@section('isi')
    
    <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Gambar - <strong>UBAH DATA</strong> - <a href="https://www.malasngoding.com/category/laravel" target="_blank">www.nakamanga.com</a>
                </div>
                <div class="card-body">
                    <a href="/gambar/{{$komik_id}}/{{$ch}}/{{ $chapter_id }}" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                <form method="post" action="/gambar/update/{{ $gambar->id }}" enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <img src="/data_gambar/komik-{{$komik_id}}/ch-{{$ch}}/{{$gambar->nama_gambar}}" class="img-thumbnail img-fluid"><br>
                            <label>File Gambar</label>
                            <div class="custom-file">
                                <input type="file" name="file" class="custom-file-input" id="customFile" value="{{ $gambar->nama_gambar }}">
                                <label class="custom-file-label" for="customFile">Pilih file</label>
                            </div>

                            @if($errors->has('nama_gambar'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_gambar')}}
                                </div>
                            @endif
						</div>
                        
                        <input type="hidden" name="komik_id" class="form-control" value="{{ $komik_id }}">
                        <input type="hidden" name="ch" class="form-control" value="{{ $ch }}">
                        <input type="hidden" name="chapter_id" class="form-control" value="{{ $chapter_id }}">
                    
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>

@endsection