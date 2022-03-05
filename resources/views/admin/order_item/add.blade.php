@extends('layouts.admin')

@section('content')
<div class="row">
     <!-- left column -->
     <div class="col-md-10 m-auto">
  <!-- general form elements -->
  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Orders</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('insert-order-item')}}" method="POST" class="needs-validation" novalidate  enctype="multipart/form-data">
       @csrf
                <div class="card-body">
                <div class="form-group">
                 <select  class="form-control"name="order_id">
                     <option value="">Select a Order-Details</option>
                     @foreach ($order_details as $item)
                     <option value="{{$item->id}}">{{$item->name}}</option>
                     @endforeach
            </select>
                  </div>

                  <div class="form-group">
                 <select  class="form-control"name="product_id">
                     <option value="">Select a Product </option>
                     @foreach ($products as $item)
                     <option value="{{$item->id}}">{{$item->name}}</option>
                     @endforeach
            </select>
                  </div>
               
                
                 
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</div>
</div>
@stop