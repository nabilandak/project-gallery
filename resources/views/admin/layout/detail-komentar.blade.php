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

                                <div class="form-group">
                                    <label>Penulis Komentar</label>
                                    <input type="text" class="form-control bg-transparent"
                                        value="{{ $dataDetailLaporanKomentar->user->name }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Komentar yang dilaporkan</label>
                                    <textarea id="email-compose-editor"
                                        class="textarea_editor form-control bg-transparent" rows="15"
                                        placeholder="Enter text ...">{{ $dataDetailLaporanKomentar->isi_kometar }}</textarea>
                                </div>

                            </div>
                            <div class="text-left mt-4 mb-5">
                                <a href='/admin-delete-komentar/{{ $dataDetailLaporanKomentar->id }}'
                                    class="btn btn-primary"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus postingan ini?')">
                                    <span class="mr-2"><i class="fa fa-trash"></i> Hapus Komentar</span>
                                </a>

                                <a href='/admin-dashboard-komentar' class="btn btn-dark btn-sl-sm">
                                    <span class="mr-2"><i class="fa fa-times"></i> Kembali</span>
                                </a>
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
