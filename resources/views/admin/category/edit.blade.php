@extends('layouts.admin')

@section('content')
<div class="row">
     <!-- left column -->
     <div class="col-md-10 m-auto">
 <div class="card card-success">
   <div class="card-header">
   <h3 class="card-title">Edit Categories</h3>
        </div>
     <div class="card-body">
       <form action="{{url('update-category/'.$category->id)}}"  class="needs-validation" novalidate   method="POST" enctype="multipart/form-data">
       @csrf
       @method('PUT')
       <div class="form-group">
               <lable for="">Name</lable>
               <input type="text" value="{{ $category->name}}" class="form-control" name="name"required>
               <div class="invalid-feedback">Please fill out this field.</div>
            </div>
           
            <div class="form-group">
            <lable for=""> Description</lable>
            <textarea name="description"   cols="30" rows="5"class="form-control"required>{{ $category->description}}</textarea>
            <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            
                @if( $category->image)
                <img src="{{ asset ('assets/uploads/category/'.$category->image)}}" width="50%" alt="image">
                @endif
                <div class="form-group">
                
                    <input type="file"name="image"class="form-control">
                </div>

              
                  <button type="submit" class="btn btn-success">Edit Category</button>
              
       
       </form>
</div>
</div>
</div>
</div>
@stop