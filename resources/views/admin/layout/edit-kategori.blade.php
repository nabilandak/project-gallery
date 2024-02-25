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
    <div class="container-fluid">
        <!-- row -->
        <div class="row">


            <div class="col-12">
                <!-- Menggunakan col-12 agar konten mengisi seluruh lebar kolom -->
                <div class="card">
                    <div class="card-body">
                        <div class=" ml-0 ml-sm-4 ml-sm-0">
                            <div class="toolbar mb-4" role="toolbar">
                                <!-- Konten toolbar -->
                            </div>
                            <div class="compose-content">
                                <form action="/admin-edit-kategori-proses/{{$dataKategori->id}}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label>Nama Kategori</label>
                                        <input type="text" class="form-control bg-transparent" name="nama" value={{$dataKategori->nama}}>
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi Kategori</label>
                                        <textarea type="text" class="form-control bg-transparent"
                                            name="deskripsi" >{{$dataKategori->deskripsi}}</textarea>
                                    </div>
                                    <div class="text-left mt-4 mb-5">
                                        <button class="btn btn-primary btn-sl-sm" type="submit"><span class="mr-2"><i
                                                    class="fa fa-check" aria-hidden="true"></i></span> Update Kategori</button>
                                    </div>

                                </form>

                            </div>

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
