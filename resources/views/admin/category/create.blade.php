@extends('admin.layout.app')
@section('style')
<style>
   .form-control{
    border: 1px solid #d2d6da; 
    padding:10px;
    margin-bottom:15px;

   } 
</style>
@endsection
@section('content')
<div class="container-fluid py-4">
   <form action="{{url('category/store')}}" method="post">
       @csrf
       <div class="row">
           <div class="col-md-6">
               <div class="form-group">
                   <label for="name">Category Name</label>
                   <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control" required>
               </div>
           </div>
           <div class="col-md-6">
               <div class="form-group">
                   <label for="slug">Category Slug</label>
                   <input type="text" name="slug" id="slug" placeholder="Enter Slug" class="form-control" required>
               </div>
           </div>
           <div class="col-md-12">
               <div class="form-group">
                   <label for="description">Category Description</label>
                   <textarea name="description" class="form-control" id="description"  rows="4" placeholder="Enter Description"></textarea>
               </div>
           </div>

           <div class="col-md-12">
               <div class="form-group">
                   <label for="meta_title">Meta Title</label>
                   <input type="text" name="meta_title" id="meta_title" placeholder="Meta Title" class="form-control" required>
               </div>
           </div>

           <div class="col-md-12">
               <div class="form-group">
                   <label for="meta_descrip">Meta Description</label>
                   <textarea name="meta_descrip" class="form-control" id="meta_descrip"  rows="4" placeholder="Enter Meta Description"></textarea>
               </div>
           </div>

           <div class="col-md-12">
               <div class="form-group">
                   <label for="meta_keyword">Meta Keyword</label>
                   <textarea name="meta_keyword" class="form-control" id="meta_keyword"  rows="4" placeholder="Enter Meta Keyword"></textarea>
               </div>
           </div> 
       </div>
       <button type="submit" class="btn btn-success">Submit</button>
   </form>
</div>
@endsection