@extends('user.includes.master')
@section('title', 'Membership Status')
@section('content')

<!-- Row -->
    <div class="card-group">
        <div class="card">
          <div class="card-body">
                                <h3 class="card-title">Membership > Status</h3>

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
                                <div class="table-responsive m-t-40 mob-top-m-0">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>S.NO</th>
                                                <th>ID</th>
                                                <th>USER NAME</th>
                                                <th>PACKAGE NAME</th>
                                                <th>BUY DATe</th>
                                                <th>EXPIRY DATE</th>
                                                <th>STATUS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $key => $val)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$val->id}}</td>
                                    <td>{{@$val->user->name}}</td>
                                    {{--  <td>{{@$val->membershipUser->package_name}}</td>  --}}
                                    <td>{{@$val->membershipUser->package_name}}</td>
                                    <td>{{$val->buy_date}}</td>
                                    <td>{{$val->expired_date}}</td>

                                    <td>
                                        @switch($val->status)
                                            @case('1')
                                                <label class="label label-success">Active</label>
                                                @break

                                            @case('2')
                                                <label class="label label-danger">Expired</label>
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
