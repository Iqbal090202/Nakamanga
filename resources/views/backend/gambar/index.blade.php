@extends('/backend/layouts/t_index')

@section('isi')
    <div class="row isiRow">
        <div class="col-sm-12">
            <div class="container">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="text-center"><a href="https://www.malasngoding.com">www.nakamanga.com</a></h3>
                        <h5 class="text-center my-4">Data Gambar</h5>
                        <a href="/chapter" class="btn btn-secondary">Kembali</a>
                        <a class="btn btn-primary" href="{{route('tambah_gambar', ['komik_id' => $komik_id, 'ch' => $ch, 'chapter_id' => $chapter_id])}}">Tambah Gambar</a>
                        <br><br>

                        <div class="datatable">
                            <table id="dtBasicExample" class="table table-striped table-bordered table" cellspacing="0" width="100%">
                                <thead class="thead">
                                    <tr>
                                        <th class="th-sm text-center">Nama gambar</th>
                                        <th class="th-sm text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody" id="showBuku">
                                    @foreach( $gambar as $g )
                                    <tr>
                                        <td class="text-center" id="judul">{{ $g->nama_gambar }}</td>
                                        <td class="text-center">
                                            <a href="/gambar/ubah/{{ $komik_id }}/{{ $ch }}/{{ $g->id }}" class="btn btn-warning text-white">Edit</a>
                                            <a href="/gambar/hapus/{{ $komik_id }}/{{ $ch }}/{{ $g->id }}" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
