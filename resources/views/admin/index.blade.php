@extends('admin.includes.master')
@section('title', 'Dashboard')
@section('content')

    <div class="row">
        <div class="col-3">
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-b-0"><i class="mdi mdi-briefcase-check text-info"></i></h2>
                                <h3 class="">{{$totaluser}}</h3>
                                <h6 class="card-subtitle">Total Users</h6></div>
                        </div>
                    </div>
                </div>       
            </div>
        </div>
        <div class="col-3">
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-b-0"><i class="mdi mdi-briefcase-check text-info"></i></h2>
                                <h3 class="">245s6</h3>
                                <h6 class="card-subtitle">Premium Users</h6></div>
                        </div>
                    </div>
                </div>       
            </div>
        </div>
        <div class="col-3">
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-b-0"><i class="mdi mdi-alert-circle text-success"></i></h2>
                                <h3 class="">546</h3>
                                <h6 class="card-subtitle">Active Users</h6>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <div class="col-3">
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-b-0"><i class="mdi mdi-alert-circle text-success"></i></h2>
                                <h3 class=""></h3>
                                <h6 class="card-subtitle">Expired Users</h6>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-b-0"><i class="mdi mdi-briefcase-check text-info"></i></h2>
                                <h3 class="">{{$vendoruser}}</h3>
                                <h6 class="card-subtitle">Total Vendors</h6></div>
                           
                        </div>
                    </div>
                </div>       
            </div>
        </div>
        <div class="col-3">
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-b-0"><i class="mdi mdi-alert-circle text-success"></i></h2>
                                <h3 class="">546</h3>
                                <h6 class="card-subtitle">Featured Vendors</h6>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <div class="col-3">
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-b-0"><i class="mdi mdi-alert-circle text-success"></i></h2>
                                <h3 class="">546</h3>
                                <h6 class="card-subtitle">Approved Vendors</h6>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <div class="col-3">
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-b-0"><i class="mdi mdi-alert-circle text-success"></i></h2>
                                <h3 class="">546</h3>
                                <h6 class="card-subtitle">Rejected Vendors</h6>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-b-0"><i class="mdi mdi-briefcase-check text-info"></i></h2>
                                <h3 class="">2456</h3>
                                <h6 class="card-subtitle">Total Products</h6></div>
                           
                        </div>
                    </div>
                </div>       
            </div>
        </div>
        <div class="col-3">
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-b-0"><i class="mdi mdi-alert-circle text-success"></i></h2>
                                <h3 class="">546</h3>
                                <h6 class="card-subtitle">Featured Products</h6>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <div class="col-3">
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-b-0"><i class="mdi mdi-alert-circle text-success"></i></h2>
                                <h3 class="">546</h3>
                                <h6 class="card-subtitle">Approved Products</h6>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <div class="col-3">
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-b-0"><i class="mdi mdi-alert-circle text-success"></i></h2>
                                <h3 class="">546</h3>
                                <h6 class="card-subtitle">Rejected Products</h6>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-1">
        </div>
        <div class="col-3">
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-b-0"><i class="mdi mdi-briefcase-check text-info"></i></h2>
                                <h3 class="">2456</h3>
                                <h6 class="card-subtitle">Featuring Month</h6></div>
                           
                        </div>
                    </div>
                </div>       
            </div>
        </div>
        <div class="col-3">
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-b-0"><i class="mdi mdi-alert-circle text-success"></i></h2>
                                <h3 class="">546</h3>
                                <h6 class="card-subtitle">Revenue</h6>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <div class="col-3">
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-b-0"><i class="mdi mdi-alert-circle text-success"></i></h2>
                                <h3 class="">546</h3>
                                <h6 class="card-subtitle">Pending Vendors</h6>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    
@endsection