@extends('vendor.includes.master')
@section('title', 'Password & Security')
@section('content')
<div class="card card-outline-info">
    <div class="card-body">
        <form method="post">
            @csrf
            <div class="form-body">
                <h3 class="card-title">Vendor > Password and Security </h3>
                <hr>
                <div class="row p-t-20">
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
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Current Password</label>
                            <input type="Password" class="form-control" name="old_password" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="Password" class="form-control" name="password" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--/span-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="Password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>
                    <!--/span-->
                </div>
                <!--/row-->
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-success gold-b"> Update</button>
                <button type="button" class="btn btn-inverse">Cancel</button>
            </div>
        </form>
    </div>
</div>

@endsection