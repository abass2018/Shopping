@extends('layouts.admin')

@section('content')
<div class="row">
     <!-- left column -->
     <div class="col-md-12 m-auto">
 <div class="card card-primary">
     
     <div class="card-header">
         <h3  class="card-title" >Order_Item Page </h3>
        </div>
     <div class="card-body">
         <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                
                    <th>Order Details</th>
                    <th>Product</th>
                    
                    <th style="width: 150px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order_items as $item)
                <tr>
                    <td>{{ $item->order_details->name}}</td>
                    <td>{{ $item->products->name}}</td>
                    
                    
                    <td> <a href="{{ url('edit-order-item/'.$item->id)}}" class="btn btn-success "> Edit</a>
                    <a href="{{ url('delete-order-item/'.$item->id)}}" class="btn btn-danger "> Delete</a>
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