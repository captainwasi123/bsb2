@extends('vendor.includes.master')
@section('title', 'Approve Products')
@section('content')

<!-- Row -->
    <div class="card-group">
        <div class="card">
          <div class="card-body">
             <h3 class="card-title">Products > Approved</h3>

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
                <div class="table-responsive m-t-40 mob-top-m-0 ">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>S.NO</th>
                                                <th>IMAGE</th>
                                                <th>ID</th>
                                                <th>NAME</th>
                                                <th>PRICE</th>
                                                <th>CATAGORY</th>
                                                <th>LINK</th>
                                                <th>FEATURED</th>
                                                <th>STATUS</th>
                                                <th>ACTION</th>
                                            </tr> 
                                        </thead>
                                        <tbody>
                                           
                                         
@foreach($data as $key => $val)
<tr>
     <td>{{++$key}}</td>
    <td><img src="{{URL::to('/public/storage/product/'.$val->image)}}" width="60px"></td>
   <td>{{ $val->id }}</td>
    <td>{{$val->title}}</td>
    <td>${{number_format($val->price, 1)}}</td>
    <td>{{@$val->category->name}}</td>
    <td><a href="{{$val->product_url}}" target="_blank"><span class="fa fa-link"></span>&nbsp;Link</a></td>
   <td></td>
    <td>
        @switch($val->status)

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
        <a href="{{route('vendor.product.edit', base64_encode($val->id))}}" class="btn btn-success gold-b"><i class="fa fa-edit"></i> </a>
        <a href="javascript:void(0)" class="btn btn-success gold-b deleteProduct" data-id="{{base64_encode($val->id)}}"><i class="fa fa-trash"></i></a>
        <a href="javascript:void(0)" class="btn btn-success gold-b featureProPend" data-id="{{base64_encode($val->id)}}" title="Feature"><i class="fa fa-globe"></i></a>
                                   
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
