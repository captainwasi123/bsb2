@extends('user.includes.master')
@section('title', 'Edit Profile')
@section('addStyle')
<link rel="stylesheet" href="{{URL::to('/public/admin')}}/plugins/dropify/dist/css/dropify.min.css">
@endsection
@section('content')
        <div class="card card-outline-info">
                            <div class="card-body">
                                <form method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">
                                        <h3 class="card-title">Setting > Profile</h3>
                                        <hr>
                                        @if(session()->has('success'))
                                            <div class="alert alert-success">
                                                {{ session()->get('success') }}
                                            </div>
                                        @endif

                                        <div class="row p-t-20">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Full Name *</label>
                                                    <input type="text" id="firstName" class="form-control" name="name" value="{{Auth::user()->name}}" required>
                                                 </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Business Name *</label>
                                                    <input type="text" id="lastName" class="form-control form-control" name="business_name" value="{{Auth::user()->business_name}}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label class="control-label">Email Info</label>
                                                    <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Phone *</label>
                                                    <input type="text" class="form-control" name="phone" value="{{Auth::user()->phone}}" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Address *</label>
                                                    <input type="text" class="form-control" name="address" value="{{Auth::user()->address}}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Country *</label>
                                                    <select class="form-control custom-select" name="country_id" required>
                                                        <option value="">Select</option>
                                                        @foreach($countries as $val)
                                                            <option value="{{$val->id}}"
                                                                {{$val->id == Auth::user()->country_id ? 'selected' : ''}}
                                                            >{{$val->nicename}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">City *</label>
                                                    <input type="text" class="form-control" name="city" value="{{Auth::user()->city}}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">State *</label>
                                                    <input type="text" class="form-control" name="state" value="{{Auth::user()->state}}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">ZipCode</label>
                                                    <input type="number" class="form-control" name="province" value="{{Auth::user()->province}}" required>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Website Link *</label>
                                                    <input type="text" class="form-control" name="website_link" value="{{Auth::user()->website_link}}" required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="input-file-now">Upload Image</label>
                                                <input type="file" id="input-file-now" class="dropify" name="image" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="input-file-now">Upload Logo</label>
                                                <input type="file" id="input-file-now" class="dropify" name="logo_file" />
                                            </div>
                                        </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Business Description</label>
                                                    <textarea class="form-control" rows="5" cols="40" name="description">{{Auth::user()->description}}</textarea>
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
@section('addScript')
<script src="{{URL::to('/public/admin')}}/plugins/dropify/dist/js/dropify.min.js"></script>
    <script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

    });
    </script>
@endsection
