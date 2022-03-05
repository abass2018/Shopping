<?php

namespace App\Http\Controllers\Admin;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
   {
       $products=Product::all();
      return view ('admin.product.index', compact('products'));
   }
   public function add()
   {
    $category =Category::all();
    return view ('admin.product.add',compact('category'));  
   }

   public function insert(Request $request)
   {
    $products = new Product();
    
    if ($request->hasFile('image')){
        $path ='assets/uploads/product/'.$products->image;
        if(File::exists($path)){
            File::delete($path);
        }
        $file =$request->file('image');
        $ext=$file->getClientOriginalExtension();
        $filename=time().'.'.$ext;
        $file->move('assets/uploads/product/',$filename);
        $products->image=$filename;
        }
        $products->cate_id=$request->input('cate_id');
        $products->name=$request->input('name');
       	
        $products->description=$request->input('description');
        $products->original_price=$request->input('original_price'); 
        $products->selling_price=$request->input('selling_price'); 

        $products->qty=$request->input('qty'); 
       
        $products->save();
        return redirect('/products')->with('status','Product Aded Successfully');
   }
   public function edit($id)
   {
       $products=Product::find($id);
       $category =Category::all();
       return view ('admin.product.edit',compact('products','category'));
   }
   public function update(Request $request,$id)
   {
    $products=Product::find($id);
    if ($request->hasFile('image')){
        $path ='assets/uploads/product/'.$products->image;
        if(File::exists($path)){
            File::delete($path);
        }
        $file =$request->file('image');
        $ext=$file->getClientOriginalExtension();
        $filename=time().'.'.$ext;
        $file->move('assets/uploads/product/',$filename);
        $products->image=$filename;
        }
        $products->cate_id=$request->input('cate_id');
        $products->name=$request->input('name');
        $products->description=$request->input('description');
        $products->original_price=$request->input('original_price'); 
        $products->selling_price=$request->input('selling_price'); 
        $products->qty=$request->input('qty'); 
       
        $products->update();
        return redirect('/dashboard')->with('status','Product Update Successfully');
   }
   public function destroy($id)
   {
    $products=Product::find($id);  
    $path ='assets/uploads/product/'.$products->image;
    if(File::exists($path)){
        File::delete($path);
    } 
    $products->delete();
        return redirect('/dashboard')->with('status','Product Deleted Successfully');
   }
}
