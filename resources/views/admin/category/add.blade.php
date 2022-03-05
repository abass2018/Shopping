@extends('layouts.admin')

@section('content')
<div class="row">
     <!-- left column -->
     <div class="col-md-10 m-auto">
  <!-- general form elements -->
  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Categories</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('insert-category')}}"class="needs-validation" novalidate method="POST" enctype="multipart/form-data">
       @csrf
                <div class="card-body">
                
                  <div class="form-group">
                  <lable for="">Name</lable>
               <input type="text" class="form-control"placeholder="Enter name" name="name"required>
           
      <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
               
                  
                  
          

            <div class="form-group">
                  <lable for=""> Description</lable>
                  <textarea name="description" placeholder="Enter description" required cols="30" rows="3"class="form-control"></textarea>
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
                  <button type="submit" class="btn btn-primary">Add Category</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</div>
</div>
@stop


