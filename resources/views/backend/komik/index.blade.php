@extends('/backend/layouts/t_index')

@section('isi')
    <div class="row isiRow">
        <div class="col-sm-12">
            <div class="container">
                <div class="card_komik card mt-5">
                    <div class="card-body">
                        <h3 class="text-center"><a href="https://www.malasngoding.com">www.nakamanga.com</a></h3>
                        <h5 class="text-center my-4">Data Komik</h5>
                        <a class="btn btn-primary" href="{{route('tambah_komik')}}">Tambah Komik</a>
                        <br><br>

                        <div class="datatable">
                            <table id="dtBasicExample" class="table_komik table table-striped table-bordered table" cellspacing="0" width="100%">
                                <thead class="thead">
                                    <tr>
                                        <th class="th-sm text-center">Judul Komik</th>
                                        <th class="th-sm text-center">Author</th>
                                        <th class="th-sm text-center">Tahun Rilis</th>
                                        <th class="th-sm text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody" id="showBuku">
                                    @foreach( $komik as $k )
                                    <tr>
                                        <td class="text-center" id="judul">{{ $k->judul_komik }}</td>
                                        <td class="text-center" id="author">{{ $k->author }}</td>
                                        <td class="text-center" id="author">{{ $k->tahun }}</td>
                                        <td class="text-center">
                                            @if ($k->status == 'ongoing')
                                                <a class="btn btn-success" href="/komik/complete/{{ $k->id }}">Complete</a>            
                                            @else
                                                <a class="btn btn-info">Completed</a>
                                            @endif
                                            <a href="/komik/ubah/{{ $k->id }}" class="btn btn-warning text-white editBuku">Edit</a>
                                            <a href="/komik/hapus/{{ $k->id }}" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>   
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{-- <table class="table table-bordered table-striped text-center">
                            <thead>
                                <tr>
                                    <th>Judul Komik</th>
                                    <th>Author</th>
                                    <th>Tahun Rilis</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($komik as $k)
                                    <tr>
                                        <td>{{ $k->judul_komik }}</td>
                                        <td>{{ $k->author }} </td>
                                        <td>{{ $k->tahun }} </td>
                                        <td>
                                            @if ($k->status == 'ongoing')
                                                <a class="btn btn-success" href="/komik/complete/{{ $k->id }}">Complete</a>            
                                            @else
                                                <a class="btn btn-info">Completed</a>
                                            @endif
                                            <a class="btn btn-warning" href="/komik/ubah/{{ $k->id }}">Edit</a>
                                            <a class="btn btn-danger" href="/komik/hapus/{{ $k->id }}">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection