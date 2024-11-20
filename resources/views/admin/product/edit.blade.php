@extends('admin.master')

@section('body')

    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> Edit Product Form </h4>
                    <hr/>
                    <h4 class="text-center text-success">{{session('message')}}</h4>
                    <form class="form-horizontal p-t-20" action="{{route('update.product',['id' => $product->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label"> Product Name <span class="text-danger">*</span> </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$product->name}}" name="name" id="exampleInputuname3" placeholder="Product Name"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label"> Product Description <span class="text-danger">*</span> </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description" id="exampleInputEmail3" placeholder="Product Description">{{$product->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web"> Product Image </label>
                            <div class="col-sm-9">
                                <input type="file" name="image" id="input-file-now" />
                                <img src="{{asset($product->image)}}" alt="" height="80" width="100">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword4" class="col-sm-3 control-label"> Publication Status </label>
                            <div class="col-sm-9">
                                <label class="me-3"><input type="radio" name="status" {{$product->status == 1 ? 'checked' : ''}} value="1" checked> Published </label>
                                <label><input type="radio" name="status" {{$product->status == 2 ? 'checked' : ''}} value="2"> Unpublished </label>
                            </div>
                        </div>


                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white"> Update Product </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


