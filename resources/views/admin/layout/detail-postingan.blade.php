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

            <div class="col-6">
                <!-- Menggunakan col-12 agar konten mengisi seluruh lebar kolom -->
                <div class="card">
                    <div class="card-body">
                        <div class=" ml-0 ml-sm-4 ml-sm-0">
                            <div class="toolbar mb-4" role="toolbar">
                                <!-- Konten toolbar -->
                            </div>
                            <div class="compose-content">
                                <form action="#">
                                    <div class="form-group">
                                        <label>Foto</label>
                                        <label>{{ $dataDetailLaporanPostingan->foto }}</label>

                                        <img class="form-control"
                                            src="{{ asset('img-foto/'.$dataDetailLaporanPostingan->foto) }}"
                                            alt='' style="max-width: 70%; height: auto;">


                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <!-- Menggunakan col-12 agar konten mengisi seluruh lebar kolom -->
                <div class="card">
                    <div class="card-body">
                        <div class=" ml-0 ml-sm-4 ml-sm-0">
                            <div class="toolbar mb-4" role="toolbar">
                                <!-- Konten toolbar -->
                            </div>
                            <div class="compose-content">
                                <form action="#">

                                    <div class="form-group">
                                        <label>Judul</label>
                                        <input type="text" class="form-control bg-transparent"
                                            value="{{ $dataDetailLaporanPostingan->judul }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori Karya</label>
                                        <input type="text" class="form-control bg-transparent"
                                            value="{{ $dataDetailLaporanPostingan->kategori->nama }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Album</label>
                                        <input type="text" class="form-control bg-transparent"
                                            value="{{ $dataDetailLaporanPostingan->album->name }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <input type="text" class="form-control bg-transparent"
                                            value="{{ $dataDetailLaporanPostingan->deskripsi }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Postingan Dibuat</label>
                                        <input type="text" class="form-control bg-transparent"
                                            value="{{ $dataDetailLaporanPostingan->created_at->format('d-m-Y') }}"
                                            disabled>

                                    </div>
                                </form>

                            </div>
                            <div class="text-left mt-4 mb-5">
                                <a href='/admin-delete-postingan/{{ $dataDetailLaporanPostingan->id }}'
                                    class="btn btn-primary"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus postingan ini?')">
                                    <span class="mr-2"><i class="fa fa-trash"></i> Hapus Postingan</span>
                                </a>

                                <a href="/admin" class="btn btn-dark btn-sl-sm" type="button"><span class="mr-2"><i
                                            class="fa fa-times" aria-hidden="true"></i></span> Kembali</a>
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
