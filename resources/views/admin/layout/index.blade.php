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
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <div class="stat-text">Total Laporan Postingan</div>
                            <div class="stat-digit">{{$dataLaporanPostingan->count()}}</div>
                        </div>

                    </div>
                </div>
            </div>
            
        </div>

       
        <div class="row">



            <div class="col-lg-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Laporan Postingan</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto Pelapor</th>
                                        <th>Name</th>
                                        <th>Isi Laporan</th>
                                       
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($dataLaporanPostingan as $no => $data)
                                    <tr>
                                      <td>{{$no + 1}}</td>
                                        <td>
                                            <div class="round-img">
                                                <a href=""><img width="35" src="{{asset('img-avatar/'.$data->user->avatar)}}" alt=""></a>
                                            </div>
                                        </td>
                                        <td>{{$data->user->name}}</td>
                                        <td><span>{{$data->alasan}}</span></td>
                                       
                                        <td>
                                            <a href="/admin-detail-postingan/{{$data->postingan_id}}" class="btn btn-primary">Detail</a>
                                        <a href="/admin-delete-laporan/{{$data->id}}" class="btn btn-warning"  onclick="return confirm('Apakah Anda yakin ingin menghapus Laporan ini?')">Hapus Laporan</a>
                                        </td>
                                       
                                        
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">{{$dataLaporanPostingan->links()}}</div>
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
