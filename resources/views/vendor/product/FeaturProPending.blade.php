@extends('vendor.includes.master')
@section('title', 'Pending Feature Products')
@section('content')

<!-- Row -->
    <div class="card-group">
        <div class="card">
          <div class="card-body">
                <h3 class="card-title">Products > Feature Pending</h3>
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
                <div class="table-responsive m-t-40 mob-top-m-0 ">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.NO</th>
                                <th>IMAGE</th>
                                <th>NAME</th>
                                <th>PRICE</th>
                                <th>CATAGORY</th>
                                <th>LINK</th>
                                <th>FEATURED</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $val)
                                <tr>
                                     <td>{{++$key}}</td>
                                    <td><img src="{{URL::to('/public/storage/product/'.$val->image)}}" width="60px"></td>
                                    <td>{{$val->title}}</td>
                                    <td>${{number_format($val->price, 1)}}</td>
                                    <td>{{@$val->category->name}}</td>
                                    <td><a href="{{$val->product_url}}" target="_blank"><span class="fa fa-link"></span>&nbsp;Link</a></td>
                                    <td>
                                        @switch($val->is_featured)

                                            @case('0')
                                                <label class="label label-info">Pending</label>
                                                @break

                                            @case('1')
                                                <label class="label label-success">Approved</label>
                                                @break

                                            @case('2')
                                                <label class="label label-danger">Rejected</label>
                                                @break
                                                
                                        @endswitch
                                    </td>
                                    <td class="p-l-0 p-r-0 action">
                                        <a href="javascript:void(0)" class="btn btn-success gold-b unfeaturePro" title="Cancel" data-id="{{base64_encode($val->id)}}"><i class="fa fa-trash"></i></a>
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
