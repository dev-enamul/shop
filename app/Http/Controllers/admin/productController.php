<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Product::all();
        return view('admin.product.list',compact('datas'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Category::all();
        return view('admin.product.create',compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product; 

        if($request->hasFile('image')){
            $file           = $request->file('image');
            $ext            = $file->getClientOriginalExtension();
            $name           = time().'.'.$ext;
            $file->move(public_path('upload/product'),$name);
            $product->image = $name;
        } 
       $product->name = $request->name;
       $product->slug = $request->slug;
       $product->cate_id = $request->category;
       $product->small_description = $request->small_description;
       $product->description = $request->description;
       $product->original_price = $request->original_price;
       $product->selling_price = $request->selling_price;
       $product->qty = $request->qty;
       $product->tax = $request->tax;
       $product->meta_title = $request->meta_title;
       $product->meta_keyword = $request->meta_keyword;
       $product->meta_description = $request->meta_description;
       $product->save();

       return redirect()->route('product')->with('massage','Product Create Success');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorys = Category::all();
        $product = Product::find($id);
        return view('admin.product.edit',compact('categorys','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id); 

        if($request->hasFile('image')){ 
            @unlink('upload/product/'.$product->image);

            $file           = $request->file('image');
            $ext            = $file->getClientOriginalExtension();
            $name           = time().'.'.$ext; 
            $file->move(public_path('upload/product'),$name);
            $product->image = $name;
        } 
       $product->name = $request->name;
       $product->slug = $request->slug;
       $product->cate_id = $request->category;
       $product->small_description = $request->small_description;
       $product->description = $request->description;
       $product->original_price = $request->original_price;
       $product->selling_price = $request->selling_price;
       $product->qty = $request->qty;
       $product->tax = $request->tax;
       $product->meta_title = $request->meta_title;
       $product->meta_keyword = $request->meta_keyword;
       $product->meta_description = $request->meta_description;
       $product->save();

       return redirect()->route('product')->with('massage','Product Create Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $image = public_path('upload/product/').$product->image;
        if(file_exists($image)){
            @unlink($image);
        }

        $product->delete();
        return redirect()->route('product');

    }
}
