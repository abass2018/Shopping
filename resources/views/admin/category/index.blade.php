@extends('layouts.admin')

@section('content')
<div class="row">
     <!-- left column -->
     <div class="col-md-12 m-auto">
 <div class="card card-primary">
     
     <div class="card-header">
         <h3 class="card-title">Category Page </h3>
        </div>
     <div class="card-body">
         <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th style="width: 150px">Action</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($category as $item)
                <tr>
                    <td>{{ $item->id}}</td>
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->description}}</td>
                    <td><img src = "{{ asset('assets/uploads/category/'. $item->image) }}" class="cate-image" alt=""></td>
                    <td> <a href="{{ url('edit-prod/'.$item->id)}}" class="btn btn-success"> Edit</a>
                    <a href="{{ url('delete-category/'.$item->id)}}" class="btn btn-danger"> Delete</a>
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