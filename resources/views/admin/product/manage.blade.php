@extends('admin.master')

@section('body')

    <div class="row mt-3">
        <div class="col-lg-12">
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table table-bordered">
                        <p class="text-center text-success">{{Session('message')}}</p>
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Product Name</th>
                            <th width="10%">Product Description</th>
                            <th>Product Image</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td> {{$loop->iteration}} </td>
                                <td> {{$product->name}} </td>
                                <td> {{$product->description}} </td>
                                <td><img src="{{asset($product->image)}}" alt="" height="80" width="100"></td>
                                <td> {{$product->status == 1 ? 'Published' : 'Unpublished'}} </td>
                                <td>
                                    <a href="{{route('edit.product',['id' => $product->id])}}" class="btn btn-success btn-sm"> Edit </a>
                                    <a href="{{route('delete.product',['id' => $product->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you want to delete this!');"> Delete </a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

    </section>
    </div>
    </div>

@endsection
