@extends('admin.includes.master')
@section('title', 'Cancel Membership')
@section('content')
       
<!-- Row -->
    <div class="card-group">
        <div class="card">
          <div class="card-body">
                                <h3 class="card-title">Membership > Cancel</h3>
                                <div class="table-responsive m-t-20">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>S.NO</th>
                                                <th>IMAGE</th>
                                                <th>CLIENT NAME</th>
                                                <th>BUSINESS NAME</th>
                                                <th>EMAIL</th>
                                                <th>COUNTRY</th>
                                                <th>WEBSITE LINK</th>
                                                <th>TOTAL PRODUCTS</th>
                                                <th>SELECTED PACKAGE</th>
                                                <th>FEATURED MONTH</th>
                                                <th>MEMBERSHIP STATUS</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><img src="https://divsnpixel.com/assets/images/logo.png" width="120px"></td>
                                                <td>ANAS</td>
                                                <td>Anas</td>
                                                <td>DIVSNPIXEL</td>
                                                <td>ANAS@GMAIL.COM</td>
                                                <td>PAKISTAN</td>
                                                <td>https://divsnpixel.com/</td>
                                                <td>BROWN</td>  
                                                <td>MAY</td> 
                                                <td>ACTIVE</td>                               
                                                <td class="p-l-0 p-r-0 action">
                                                    <button type="submit" class="btn btn-success gold-b"><i class="fa fa-ban"></i></button>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td><img src="https://divsnpixel.com/assets/images/logo.png" width="120px"></td>
                                                <td>ANAS</td>
                                                <td>Anas</td>
                                                <td>DIVSNPIXEL</td>
                                                <td>ANAS@GMAIL.COM</td>
                                                <td>PAKISTAN</td>
                                                <td>https://divsnpixel.com/</td>
                                                <td>BROWN</td>  
                                                <td>MAY</td> 
                                                <td>ACTIVE</td>                               
                                                <td class="p-l-0 p-r-0 action">
                                                    <button type="submit" class="btn btn-success gold-b"><i class="fa fa-ban"></i></button>
                                                </td>                                                
                                            </tr>                                           
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