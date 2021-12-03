@extends('admin.includes.master')
@section('title', 'Publish Products')
@section('content')
       
<!-- Row -->
    <div class="card-group">
        <div class="card">
          <div class="card-body">
                <h3 class="card-title">Products > Publish</h3>
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
                                        <a href="javascript:void(0)" class="btn btn-danger rejectProduct" data-id="{{base64_encode($val->id)}}" title="Block"><i class="fa fa-ban"></i></a>
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