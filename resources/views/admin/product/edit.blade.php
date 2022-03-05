@extends('layouts.admin')

@section('content')
<div class="row">
     <!-- left column -->
     <div class="col-md-10 m-auto">
  <!-- general form elements -->
  <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Edit Products</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
            <form action="{{url('update-product/'.$products->id)}}" method="POST"  class="needs-validation" novalidate  enctype="multipart/form-data">
            @method('PUT')
       @csrf
      
                <div class="card-body">
                <div class="form-group">
                 <select  class="form-control" name="cate_id">
                     @foreach ($category as $item)
                     <option value="{{$item->id}}">{{$item->name}}</option>
                     @endforeach
                    
                    </select>
                  </div>
                
                  <div class="form-group">
                  <lable for="">Name</lable>
               <input type="text" class="form-control" value="{{$products->name}}" name="name"required>
               <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                
                  
              

                  
                  <div class="form-group">
                  <lable for=""> Description</lable>
            <textarea name="description"  cols="30" rows="3"class="form-control"required>{{$products->description}}</textarea>
            <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                  <lable for="">Original Price</lable>
               <input type="number" class="form-control"value="{{$products->original_price}}" name="original_price"required>
               <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  </div>
                  <div class="col-sm-6">
                  <div class="form-group">
                  <lable for="">Selling Price</lable>
               <input type="number" class="form-control"value="{{$products->selling_price}}" name="selling_price"required>
               <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  </div>
                  </div>

                  
                  
                  <div class="form-group">
                  <lable for="">Quantity </lable>
               <input type="number" class="form-control"value="{{$products->qty}}" name="qty"required>
               <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                 
                 

         
            @if( $products->image)
                <img src="{{ asset ('assets/uploads/product/'.$products->image)}}" width="100px" alt="image">
                @endif
                <div class="form-group">
                    <input type="file"name="image"class="form-control">
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