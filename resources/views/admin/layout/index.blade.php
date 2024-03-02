@extends('admin.master.master')
@section('title', 'Dashboard')
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
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <a href='/admin-dashboard-postingan'>
                                <div class="stat-text">Total Laporan Postingan</div>
                            </a>
                            <div class="stat-digit">{{ $dataLaporanPostingan->count() }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <a href='/admin-dashboard-komentar'>
                                <div class="stat-text">Total Laporan Komentar</div>
                            </a>
                            <div class="stat-digit">{{ $dataLaporanKomentar->count() }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <a href='/admin-dashboard-kategori'>
                                <div class="stat-text">Total Kategori</div>
                            </a>
                            <div class="stat-digit">{{ $dataKategori->count() }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <a href=''>
                                <div class="stat-text">Total User</div>
                            </a>
                            <div class="stat-digit">{{ $dataUser->count() }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <a href='/admin-dashboard-profile'>
                                <div class="stat-text">Total User DiLaporkan</div>
                            </a>
                            <div class="stat-digit">{{ $dataLaporanProfile->count() }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <a href='/admin-dashboard-user-banned'>
                                <div class="stat-text">Total Akun Dibanned</div>
                            </a>
                            <div class="stat-digit">{{ $dataUserBanned->count() }}</div>
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
