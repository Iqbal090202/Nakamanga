@extends('/backend/layouts/t_index')

@section('isi')
    <div class="row isiRow">
        <div class="col-sm-12">
            <div class="container">
                <div class="card_komik card mt-5">
                    <div class="card-body">
                        <h5 class="text-center my-4">Data Gambar</h5>
                        <a href="/chapter" class="btn btn-secondary"><i class="fa fa-arrow-left"> Back</i></a>
                        <a class="btn btn-primary" href="{{route('tambah_gambar', ['komik_id' => $komik_id, 'ch' => $ch, 'chapter_id' => $chapter_id])}}"><i class="fa fa-plus"> Add Picture</i></a>
                        <br><br>

                        <div class="datatable">
                            <table id="dtBasicExample" class="table table-striped table-bordered table" cellspacing="0" width="100%">
                                <thead class="thead">
                                    <tr>
                                        <th class="th-sm text-center">Picture Name</th>
                                        <th class="th-sm text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody" id="showBuku">
                                    @foreach( $gambar as $g )
                                    <tr>
                                        <td class="text-center" id="judul">{{ $g->nama_gambar }}</td>
                                        <td class="text-center">
                                            <a href="/gambar/ubah/{{ $komik_id }}/{{ $ch }}/{{$chapter_id}}/{{ $g->id }}" class="btn btn-warning text-white"><i class="fa fa-pencil"> Edit</i></a>
                                            <a onClick="hapusGambar({{$komik_id}},{{$ch}},{{$g->id}});" class="btn btn-danger text-white"><i class="fa fa-close"> Delete</i></a>
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
