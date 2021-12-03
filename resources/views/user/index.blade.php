@extends('user.includes.master')
@section('title', 'Dashboard')
@section('content')

    <div class="row">
        <div class="col-12 col-lg-4 col-md-4 col-sm-6">
        
     
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-b-0"><i class="mdi mdi-briefcase-check text-info"></i></h2>
                                <h3 class="">0</h3>
                                <h6 class="card-subtitle">Totla Products</h6></div>
                            <!-- <div class="col-12">
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>       
            </div>
        </div>
       <div class="col-12 col-lg-4 col-md-4 col-sm-6">
            <div class="card-group">
                  <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h2 class="m-b-0"><i class="mdi mdi-alert-circle text-success"></i></h2>
                        <h3 class="">0</h3>
                        <h6 class="card-subtitle">Featuring Month</h6></div>
                </div>
            </div>
        </div> 
            </div>
        </div>
      <div class="col-12 col-lg-4 col-md-4 col-sm-6">
            <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h2 class="m-b-0"><i class="mdi mdi-wallet text-purple"></i></h2>
                        <h3 class="">0</h3>
                        <h6 class="card-subtitle">Membership Status</h6></div>
                </div>
            </div>
        </div>
        </div>
    
        <div class="col-12 col-lg-4 col-md-4 col-sm-6">
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-b-0"><i class="mdi mdi-briefcase-check text-info"></i></h2>
                                <h3 class="">0</h3>
                                <h6 class="card-subtitle">Pending Products</h6></div>
                           
                        </div>
                    </div>
                </div>       
            </div>
        </div>
        <div class="col-12 col-lg-4 col-md-4 col-sm-6">
            <div class="card-group">
                  <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h2 class="m-b-0"><i class="mdi mdi-alert-circle text-success"></i></h2>
                        <h3 class="">0</h3>
                        <h6 class="card-subtitle">Approved Project</h6></div>
                    
                </div>
            </div>
        </div> 
            </div>
        </div>
        <div class="col-12 col-lg-4 col-md-4 col-sm-6">
            <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h2 class="m-b-0"><i class="mdi mdi-wallet text-purple"></i></h2>
                        <h3 class="">0</h3>
                        <h6 class="card-subtitle">Featured Products</h6>
                    </div>                   
                </div>
            </div>
        </div>
        </div>
    </div>    

    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-12 col-xlg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex flex-wrap">
                                <div>
                                    <h4 class="card-title">Payment History Graph</h4>
                                </div>
                                <div class="ml-auto">
                                    <ul class="list-inline">
                                        <li>
                                            <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Sales</h6> </li>
                                        <li>
                                            <h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>Earning ($)</h6> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div id="earning" style="height: 355px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                @if(session()->has('error'))
                <div class="alert alert-danger">
                {{ session()->get('error') }}
                </div>
                @endif


@endsection
@section('addScript')
    @if(session()->has('success_modal'))
        <script>
            $(document).ready(function () {
                $('#exampleModalCenter').modal('show')
            });
        </script>
    @endif
@endsection
 
   

          