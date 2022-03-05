@extends('layouts.admin')

@section('content')
<div class="row">
     <!-- left column -->
     <div class="col-md-12 m-auto">
 <div class="card card-primary">
     
     <div class="card-header">
         <h3  class="card-title" >Products Page </h3>
        </div>
     <div class="card-body">
         <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">Id</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Selling Price</th>
                    <th>Image</th>
                    <th style="width: 150px">Action</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($products as $item)
                <tr>
                    <td>{{ $item->id}}</td>
                    <td>{{ $item->category->name}}</td>
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->selling_price}}</td>
                    <td><img src = "{{ asset('assets/uploads/product/'. $item->image) }}" class="cate-image" alt=""></td>
                    <td> <a href="{{ url('edit-product/'.$item->id)}}" class="btn btn-success "> Edit</a>
                    <a href="{{ url('delete-product/'.$item->id)}}" class="btn btn-danger "> Delete</a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table> 
</div>
</div>
</div>
</div>
</div>
@stop