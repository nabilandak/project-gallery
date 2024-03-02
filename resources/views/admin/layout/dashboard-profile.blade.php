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
                        <h4 class="card-title">Laporan Profile</h4>
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
                                @foreach($dataLaporanProfile as $no => $data)
                                    <tr>
                                      <td>{{$no + 1}}</td>
                                        <td>
                                            <div class="round-img">
                                                <a href=""><img width="35" src="{{asset('img-avatar/'.$data->profileDilapor->avatar)}}" alt=""></a>
                                            </div>
                                        </td>
                                        <td>{{$data->profileDilapor->name}}</td>
                                        <td><span>{{$data->alasan}}</span></td>
                                       
                                        <td>
                                            <a href="/admin-detail-profile/{{$data->id_user}}" class="btn btn-primary">Detail</a>
                                        <a href="/admin-delete-laporan/{{$data->id}}" class="btn btn-warning"  onclick="return confirm('Apakah Anda yakin ingin menghapus Laporan ini?')">Hapus Laporan</a>
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
</div>
<!--**********************************
            Content body end
        ***********************************-->


@endsection
