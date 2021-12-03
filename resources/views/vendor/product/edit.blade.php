@extends('vendor.includes.master')
@section('title', 'Edit Product')
@section('addStyle')
<link rel="stylesheet" href="{{URL::to('/public/admin')}}/plugins/dropify/dist/css/dropify.min.css">
@endsection
@section('content')
        <div class="card card-outline-info">
            <div class="card-body">
                <form method="post" action="{{route('vendor.product.update')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="pid" value="{{base64_encode($data['id'])}}">
                    <div class="form-body">
                        <h3 class="card-title">Product > {{$data['title']}}</h3>
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
                            <div class="col-md-3">               
                                <div class="form-group">
                                    <label for="input-file-now">Upload Product Image</label>
                                    <input type="file" id="input-file-now" class="dropify" name="product_image"/>
                                </div>
                            </div>
                            <div class="col-md-3">               
                                <div class="form-group">
                                    <img src="{{URL::to('/public/storage/product/'.$data['image'])}}" class="img-responsive">
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                      
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Name</label>
                                    <input type="text" id="lastName" class="form-control form-control-danger" name="title" value="{{$data['title']}}" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="number" class="form-control" name="price" value="{{$data['price']}}" required>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Catagory</label>
                                    <select class="form-control custom-select" name="category_id" required>
                                        <option value="">Select</option>
                                        @foreach($categories as $val)
                                            <option value="{{$val->id}}"
                                                {{$val->id == $data['category_id'] ? 'selected' : ''}}
                                            >{{$val->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Product URL</label>
                                    <input type="text" class="form-control" name="product_url" value="{{$data['product_url']}}" required>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Discription</label>
                                    <textarea class="form-control" rows="5" cols="40" name="description" required>{{$val->description}}</textarea>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success gold-b">Update</button>
                        <button type="reset" class="btn btn-inverse">Cancel</button>
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