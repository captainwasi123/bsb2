@extends('admin.includes.master')
@section('title', 'Blocked Vendors')
@section('content')

<!-- Row -->
    <div class="card-group">
        <div class="card">
          <div class="card-body">
                <h3 class="card-title">Vendors > Blocked</h3>
                
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

                <div class="table-responsive m-t-20">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.NO</th>
                                <th>IMAGE</th>
                                <th>VENDOR NAME</th>
                                <th>BUSINESS NAME</th>
                                <th>PHone</th>
                                <th>EMAIL</th>
                                <th>COUNTRY</th>
                                <th>WEBSITE LINK</th>
                                <th>TOTAL PRODUCTS</th>
                               
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                           {{-- sa --}}
                           @foreach($data as $key => $val)
                           <tr>
                               <td>{{++$key}}</td>
                               <td><img src="{{URL::to('/public/storage/vendor/logo/'.$val->logo)}}" width="50px" onerror="this.src='{{URL::to('/public/admin')}}/images/users/placeholder.png';"></td>
                               <td>{{$val->name}}</td>
                               <td>{{$val->business_name}}</td>
                               <td>{{$val->phone}}</td>
                               <td>{{$val->email}}</td>
                               <td>{{@$val->country->country}}</td>
                               <td>{{$val->website_link}}</td>
                               <td></td>
                          
                               <td class="p-l-0 p-r-0 action">
                                   <a href="javascript:void(0)" data-id="{{base64_encode($val->id)}}" class="btn btn-success gold-b approveVendor"  data-toggle="tooltip" data-original-title="Approve Vendor"><i class="fa fa-check-circle"></i> </a>
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