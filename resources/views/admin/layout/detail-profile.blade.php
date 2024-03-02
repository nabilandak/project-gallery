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
                                        <label>{{ $dataDetailLaporanProfile->avatar }}</label>

                                        <img class="form-control"
                                            src="{{ asset('img-avatar/'.$dataDetailLaporanProfile->avatar) }}"
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
                                <form action="/admin-profile-update/{{$dataDetailLaporanProfile->id}}" enctype="multipart/form-data" method="post">
                                    @csrf

                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control bg-transparent"
                                            value="{{ $dataDetailLaporanProfile->name }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control bg-transparent"
                                            value="{{ $dataDetailLaporanProfile->username }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control bg-transparent"
                                            value="{{ $dataDetailLaporanProfile->address }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <input type="text" class="form-control bg-transparent"
                                            value="{{ $dataDetailLaporanProfile->jenis_kelamin }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Bio</label>
                                        <input type="text" class="form-control bg-transparent"
                                            value="{{ $dataDetailLaporanProfile->bio }}"
                                            disabled>

                                    </div>
                                    <div class="form-group">
                                        <label>No Telfon</label>
                                        <input type="text" class="form-control bg-transparent"
                                            value="{{ $dataDetailLaporanProfile->no_telepon }}"
                                            disabled>

                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status" placeholder="status user">
                                            <option>-- Status User --</option>
                                            <option value="active" @if($dataDetailLaporanProfile->status == 'active') selected @endif>Active</option>
                                            <option value="no_active" @if($dataDetailLaporanProfile->status == 'no_active') selected @endif>No Active</option>
                                        </select>
                                    </div>

                                    <div class="text-left mt-4 mb-5">
                                        <button type="submit"  class="btn btn-primary" onclick="return confirm('Apakah Anda yakin ingin mengubah status user ini?')">
                                        <span class="mr-2">Ubah</span>                                    
                                        </button>
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
