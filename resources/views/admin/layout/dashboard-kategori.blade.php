@extends('admin.master.master')
@section('title')
@section('contents')
<!--**********************************
            Sidebar end
        ***********************************-->

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        

        <div class="row">



            <div class="col-lg-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Kategori</h4>
                        <a href='/admin-upload-kategori' class="btn btn-primary">Tambah Kategori</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-4">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                        <th>Deskripsi Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($dataKategori as $no => $data)
                                    <tr>
                                      <td>{{$no + 1}}</td>
                                       
                                        <td>{{$data->nama}}</td>
                                        <td><span>{{ substr($data->deskripsi, 0, 100) }}</span></td>
                                       
                                        <td>
                                            <a href="/admin-edit-kategori/{{$data->id}}" class="btn btn-warning">Edit</a>
                                            <a href="/admin-delete-kategori/{{$data->id}}" class="btn btn-danger"  onclick="return confirm('Apakah Anda yakin ingin menghapus Kategori ini?')">Hapus </a>
                                        </td>
                                       
                                        
                                    </tr>
                                    @endforeach
                                   
                                   
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">{{$dataKategori->links()}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->


@endsection
