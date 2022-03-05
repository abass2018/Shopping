@extends('layouts.admin')

@section('content')
<div class="row">
     <!-- left column -->
     <div class="col-md-10 m-auto">
  <!-- general form elements -->
  <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Edit Order Item</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
            <form action="{{url('update-order-item/'.$orders->id)}}" method="POST"  class="needs-validation" novalidate  enctype="multipart/form-data">
            @method('PUT')
       @csrf
      
                <div class="card-body">
                <div class="form-group">
                 <select  class="form-control" name="order_id">
                     @foreach ($order_details as $item)
                     <option value="{{$item->id}}">{{$item->name}}</option>
                     @endforeach
                    
                    </select>
                  </div>
                
                  <div class="form-group">
                 <select  class="form-control" name="product_id">
                     @foreach ($product as $item)
                     <option value="{{$item->id}}">{{$item->name}}</option>
                     @endforeach
                    
                    </select>
                  </div>
              

                  
                  <div class="form-group">
                  <lable for=""> Description</lable>
            <textarea name="description"  cols="30" rows="3"class="form-control"required>{{$orders->description}}</textarea>
            <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
              
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Edit Product</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</div>
</div>
@stop