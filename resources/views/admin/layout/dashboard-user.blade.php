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
                        <h4 class="card-title">Total User</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Name</th>
                                        <th>Bio</th>
                                        <th>Status Active</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($dataUser as $no => $data)
                                    <tr>
                                      <td>{{$no + 1}}</td>
                                        <td>
                                            <div class="round-img">
                                                <a href=""><img width="35" src="{{asset('img-avatar/'.$data->avatar)}}" alt=""></a>
                                            </div>
                                        </td>
                                        <td>{{$data->name}}</td>
                                        <td><span>{{Str::limit($data->bio, 20)}}</span></td>
                                        <td>{{$data->status}}</td>
                                       
                                        <td>
                                            <a href="/admin-detail-profile/{{$data->id}}" class="btn btn-primary">Detail</a>
                                        
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
