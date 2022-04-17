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
   <form action="{{url('product/store')}}" method="post" enctype="multipart/form-data">
       @csrf
       <div class="row">
           <div class="col-md-6">
               <div class="form-group">
                   <label for="name">Product Name</label>
                   <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control" required>
               </div>
           </div>
           <div class="col-md-6">
               <div class="form-group">
                   <label for="slug">Product Slug</label>
                   <input type="text" name="slug" id="slug" placeholder="Enter Slug" class="form-control" required>
               </div>
           </div>
           <div class="col-md-12">
               <div class="form-group">
                   <label for="category">Select Category</label>
                   <select class="form-control" name="category" id="category">
                        
                       @foreach($categorys as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                       @endforeach
                   </select>
               </div>
           </div>
           <div class="col-md-12">
               <div class="form-group">
                   <label for="small_description">Small Description</label>
                   <textarea name="small_description" class="form-control" id="small_description"  rows="4" placeholder="Enter Small Description" required></textarea>
               </div>
           </div>

           <div class="col-md-12">
               <div class="form-group">
                   <label for="description">Product Description</label>
                   <textarea name="description" class="form-control" id="description"  rows="4" placeholder="Enter Description"></textarea>
               </div>
           </div>

           <div class="col-md-6">
               <div class="form-group">
                   <label for="original_price">Original Price</label>
                   <input type="number" name="original_price" id="original_price" placeholder="Original Price" class="form-control" required>
               </div>
           </div>

           <div class="col-md-6">
               <div class="form-group">
                   <label for="selling_price">Selling Price</label>
                   <input type="number" name="selling_price" id="selling_price" placeholder="Selling Price" class="form-control" required>
               </div>
           </div>

           <div class="col-md-6">
               <div class="form-group">
                   <label for="qty">Qty</label>
                   <input type="number" name="qty" id="qty" placeholder="Enter Quantity" class="form-control" required>
               </div>
           </div> 

           <div class="col-md-6">
               <div class="form-group">
                   <label for="tax">Tax</label>
                   <input type="number" name="tax" id="tax" placeholder="Enter tax" class="form-control" required>
               </div>
           </div>

           <div class="col-md-12">
               <div class="form-group">
                   <label for="meta_title">Meta Title</label>
                   <input type="text" name="meta_title" id="meta_title" placeholder="Enter Meta Title" class="form-control" required>
               </div>
           </div>

           <div class="col-md-12">
               <div class="form-group">
                   <label for="meta_descrip">Meta Description</label>
                   <textarea name="meta_description" class="form-control" id="meta_descrip"  rows="4" placeholder="Enter Meta Description"></textarea>
               </div>
           </div>

           <div class="col-md-12">
               <div class="form-group">
                   <label for="meta_keyword">Meta Keyword</label>
                   <textarea name="meta_keyword" class="form-control" id="meta_keyword"  rows="4" placeholder="Enter Meta Keyword"></textarea>
               </div>
           </div> 

           <div class="col-md-12">
               <div class="form-group">
                   <label for="meta_keyword">Image</label>
                   <input type="file" name="image" id="image" class="form-control" reequired>
               </div>
           </div> 
       </div>
       <button type="submit" class="btn btn-success">Submit</button>
   </form>
</div>
@endsection