@extends('/backend/layouts/t_index')

@section('isi')
    <div class="row isiRow">
        <div class="col-sm-12">
            <div class="container">
                <div class="card_komik card mt-5">
                    <div class="card-body">
                        <h5 class="text-center my-4" id="data-manga">Data Manga</h5>
                        <a class="btn btn-primary" href="{{route('tambah_komik')}}"><i class="fa fa-plus"> Add Manga</i></a>
                        <br><br>

                        <div class="datatable">
                            <table id="komik-table" class="table_komik table table-striped table-bordered table" cellspacing="0" width="100%">
                                <thead class="thead">
                                    <tr>
                                        <th class="th-sm text-center">Title Manga</th>
                                        <th class="th-sm text-center">Author</th>
                                        <th class="th-sm text-center">Date Release</th>
                                        <th class="th-sm text-center">Action</th>
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
                                                <a class="btn btn-success" href="/komik/complete/{{ $k->id }}"><i class="fa fa-bell"> Complete</i></a>            
                                            @else
                                                <a class="btn btn-info"><i class="fa fa-check"> Completed</i></a>
                                            @endif
                                            <a href="/komik/ubah/{{ $k->id }}" class="btn btn-warning text-white editBuku"><i class="fa fa-pencil"> Edit</i></a>
                                            <a onClick="hapusKomik({{$k->id}});" class="btn btn-danger text-white"><i class="fa fa-close"> Delete</i></a>
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