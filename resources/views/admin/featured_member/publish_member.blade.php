@extends('admin.includes.master')
@section('title', 'Publish Membership')
@section('content')
       
<!-- Row -->
   <div class="card-group">
        <div class="card">
          <div class="card-body">
                <h3 class="card-title">Vendors > Active</h3>
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
                                <th>VENDOR NAME</th>
                                <th>BUSINESS NAME</th>
                                <th>PHONE NUMBER</th>
                                <th>EMAIL</th>
                                <th>COUNTRY</th>
                                <th> Created At</th>

                                <th>Update At</th>
                               
                                {{--  <th>ACTION</th>  --}}
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($vendor as $key => $val)
                          <tr>
                              <td>{{++$key}}</td>
                              <td><img src="{{URL::to('/public/storage/vendor/logo/'.$val->logo)}}" width="50px" onerror="this.src='{{URL::to('/public/admin')}}/images/users/placeholder.png';"></td>
                              <td>{{$val->name}}</td>
                              <td>{{$val->business_name}}</td>
                              <td>{{$val->phone}}</td>
                              <td>{{$val->email}}<br>
                                @if($val->by_admin==1)
                                         <span class="label label-info"> Featured By Admin</span>
                                @endif
                              </td>
                              <td>{{@$val->country->country}}</td>
                              <td>{{$val->created_at->isoFormat('dddd D  M  Y') }}</td>
                              <td>{{$val->updated_at->isoFormat('dddd D M Y') }}</td>
                              {{--  <td class="p-l-0 p-r-0 action">
                                  <a href="javascript:void(0)" class="btn btn-success gold-b rejectVendor" data-id="{{base64_encode($val->id)}}"><i class="fa fa-ban"></i></a>
                                    @if($val->is_feature==2)
                                    <a href="javascript:void(0)" data-id="{{base64_encode($val->id)}}" class="btn btn-success gold-b featureVendor"  data-toggle="tooltip" data-original-title="Feature Vendor"><i class="fa fa-check-circle"></i> </a>
                                    @endif
                              </td>  --}}
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
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
      <script>
    $(document).ready(function() {
        $(".dataTables_filter").removeAttr("top");
    });
    </script>
@endsection