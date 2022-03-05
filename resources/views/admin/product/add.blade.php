@extends('layouts.admin')

@section('content')
<div class="row">
     <!-- left column -->
     <div class="col-md-10 m-auto">
  <!-- general form elements -->
  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Products</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('insert-product')}}" method="POST" class="needs-validation" novalidate  enctype="multipart/form-data">
       @csrf
                <div class="card-body">
                <div class="form-group">
                 <select  class="form-control"name="cate_id">
                     <option value="">Select a Category</option>
                     @foreach ($category as $item)
                     <option value="{{$item->id}}">{{$item->name}}</option>
                     @endforeach
            </select>
                  </div>
               
                
                  <div class="form-group">
                  <lable for="">Name</lable>
               <input type="text" class="form-control" name="name" required>
               <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  
                  <div class="form-group">
                  <lable for=""> Description</lable>
            <textarea name="description"  cols="30" rows="3"class="form-control"required></textarea>
            <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                  <lable for="">Original Price</lable>
               <input type="number" class="form-control" name="original_price"required>
               <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  </div>
                  <div class="col-sm-6">
                  <div class="form-group">
                  <lable for="">Selling Price</lable>
               <input type="number" class="form-control" name="selling_price"required>
               <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  </div>
                  </div>

                  <div class="form-group">
                  <lable for="">Quantity </lable>
               <input type="number" class="form-control" name="qty"required>
               <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  

                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                      
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        <input type="file"name="image"class="custom-file-input" id="exampleInputFile">
                      </div>
                     
                    </div>
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