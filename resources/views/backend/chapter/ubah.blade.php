@extends('/backend/layouts/t_index')

@section('isi')
    
    <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Komik - <strong>UBAH DATA</strong> - <a href="https://www.malasngoding.com/category/laravel" target="_blank">www.nakamanga.com</a>
                </div>
                <div class="card-body">
                    <a href="/chapter" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                <form method="POST" action="/chapter/update/{{ $chapter->id }}">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Chapter</label>
                            <input type="number" name="ch" class="form-control" placeholder="Chapter .." value="{{ $chapter->ch }}">

                            @if($errors->has('chapter'))
                                <div class="text-danger">
                                    {{ $errors->first('chapter')}}
                                </div>
                            @endif
                        </div>
						
						<div class="form-group">
                            <label>Link File PDF</label>
                            <input type="text" name="link_file" class="form-control" placeholder="Link File .." value="{{ $chapter->link_file }}">

                            @if($errors->has('link_file'))
                                <div class="text-danger">
                                    {{ $errors->first('link_file')}}
                                </div>
                            @endif
                        </div>

                        <input type="hidden" name="user_id" class="form-control" value="{{ Auth::user()->id }}">
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>

@endsection