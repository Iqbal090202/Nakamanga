@extends('/backend/layouts/t_index')

@section('isi')
    <div class="row isiRow">
        <div class="col-sm-12">
            <div class="container">
                <div class="card_komik card mt-5">
                    <div class="card-body">
                        <h5 class="text-center my-4">Data Genre</h5>
                        <a class="btn btn-primary" href="{{route('tambah_genre')}}"><i class="fa fa-plus"> Add Genre</i></a>
                        <br><br>

                        <div class="datatable">
                            <table id="dtBasicExample" class="table table-striped table-bordered table" cellspacing="0" width="100%">
                                <thead class="thead">
                                    <tr>
                                        <th class="th-sm text-center">Title Genre</th>
                                        <th class="th-sm text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody" id="showBuku">
                                    @foreach( $genre as $g )
                                    <tr>
                                        <td class="text-center" id="judul">{{ $g->nama_genre }}</td>
                                        <td class="text-center">
                                            <a href="/genre/ubah/{{ $g->id }}" class="btn btn-warning text-white editBuku"><i class="fa fa-pencil"> Edit</i></a>
                                            <a onClick="hapusGenre({{$g->id}});" class="btn btn-danger text-white"><i class="fa fa-close"> Delete</i></a>
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