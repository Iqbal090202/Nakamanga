@extends('/backend/layouts/t_index')

@section('isi')
    <div class="row isiRow">
        <div class="col-sm-12">
            <div class="container">
                <div class="card_komik card mt-5">
                    <div class="card-body">
                        <h5 class="text-center my-4">Data Chapter Manga</h5>
                        <a class="btn btn-primary" id="tambahCh" href="{{route('tambah_chapter', ['id' => $kom->id])}}"><i class="fa fa-plus"> Add Chapter</i></a>
                        <br>
                        <div class="text-center pt-3 pb-3">
                            <Label for="selectKomik" class="font-weight-bold">Manga : </Label>
                            <select class="selectpicker" data-style="btn-secondary" data-live-search="true" id="selectKomik" aria-label="Komik" name="komik_id">
                                @foreach( $komik as $k )
                                    <option value="{{ $k->id }}">{{ $k->judul_komik }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="datatable">
                            <table id="dtBasicExample" class="table table-striped table-bordered table" cellspacing="0" width="100%">
                                <thead class="thead">
                                    <tr>
                                        <th class="th-sm text-center">Chapter</th>
                                        <th class="th-sm text-center">File PDF</th>
                                        <th class="th-sm text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody" id="showKomik">
                                    @foreach( $chapter as $c )
                                    <tr>
                                        <td class="text-center" id="judul">{{ $c->ch }}</td>
                                        <td class="text-center" id="judul">{{ $c->link_file }}</td>
                                        <td class="text-center">
                                            <a href="/gambar/{{ $c->komik_id }}/{{ $c->ch }}/{{ $c->id }}" class="btn btn-info text-white"><i class="fa fa-info-circle"> Detail</i></a>
                                            <a href="/chapter/ubah/{{ $c->id }}" class="btn btn-warning text-white"><i class="fa fa-pencil"> Edit</i></a>
                                            <a href="/chapter/hapus/{{ $c->id }}" class="btn btn-danger"><i class="fa fa-close"> Delete</i></a>
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