@extends('admin.includes.master')
@section('title', 'Premium Users')
@section('content')

<!-- Row -->
    <div class="card-group">
        <div class="card">
          <div class="card-body">
                                <h3 class="card-title">Users > Premium</h3>
                                <div class="table-responsive m-t-20">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>S.NO</th>
                                                <th>IMAGE</th>
                                                <th>USER NAME</th>
                                                <th>EMAIL</th>
                                                <th>COUNTRY</th>
                                                <th>REG AT</th>
                                                <th>MEMBERSHIP</th>
                                                <th>MEMBERSHIP STATUS</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                             @foreach($data as $key => $val)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td><img src="{{@URL::to('/public/admin/images/users/'.$val->user->image)}}" width="50px" onerror="this.src='{{URL::to('/public/admin')}}/images/users/placeholder.png';"></td>

                                    <td>{{@$val->user->name}}</td>
                                    <td>{{@$val->user->email}}</td>
                                    <td>{{@$val->user->country->country}}</td>
                                    <td>{{@$val->user->created_at}}</td>
                                    <td>{{@$val[0]->membershipUser->package_name}}</td>
                                     }
                                      <td>
                                        @switch($val->status)
                                            @case('1')
                                               <center> <label class="label label-success">Active</label></center>
                                                @break

                                            @case('2')
                                               <center> <label class="label label-danger">Expired</label></center>
                                                @break

                                        @endswitch
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
