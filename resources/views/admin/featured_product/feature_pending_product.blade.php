@extends('admin.includes.master')
@section('title', 'Featur Pending Products')
@section('content')

<!-- Row -->
    <div class="card-group">
        <div class="card">
          <div class="card-body">
                <h3 class="card-title">Products > Pending</h3>
                <div class="row">
                    <div class="col-md-6">
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        @if(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="table-responsive m-t-20">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>IMAGE</th>
                                <th>NAME</th>
                                <th>PRICE</th>
                                <th>CATAGORY</th>
                                <th>LINK</th>
                                <th>CREATED AT</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $key => $val)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td><img src="{{URL::to('/public/storage/product/'.$val->image)}}" width="50px"  onerror="this.src='{{URL::to('/public/website')}}/images/product-placeholder.png';"></td>
                                    <td>{{$val->title}}</td>
                                    <td>${{number_format($val->price, 1)}}</td>
                                    <td>{{@$val->category->name}}</td>
                                    <td><a href="{{$val->product_url}}" target="_blank"><i class="fa fa-link"></i> Link</a></td>
                                    <td>{{date('d-M-Y h:i A', strtotime($val->created_at))}}</td>
                                    <td class="p-l-0 p-r-0 action">
                                        <a href="javascript:void(0)" class="btn btn-success gold-b approveFeautreProduct" data-id="{{base64_encode($val->id)}}" title="Apporve"><i class="fa fa-globe"></i></a>

                                        <a href="javascript:void(0)" class="btn btn-danger rejectFeaPro" data-id="{{base64_encode($val->id)}}" title="Cancel"><i class="fa fa-close"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>

@endsection
@section('addScript')
    <script src="{{URL::to('/public/admin')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>
@endsection
