<?php

namespace App\Http\Controllers\Admin;
use App\Models\Product;
use App\Models\Order_Details;
use App\Http\Controllers\Controller;
use App\Models\Order_Items;
use Illuminate\Http\Request;

class Order_ItemsController extends Controller
{
    //
    public function index()
   {
       $order_items=Order_Items::all();
      return view ('admin.order_item.index', compact('order_items'));
   }
   public function add()
   {
    $order_details=Order_Details::all();
    $products =Product::all();
    return view ('admin.order_item.add',compact('products','order_details'));  
   }

   public function insert(Request $request)
   {
       $order_items = new Order_Items();
       $order_items->order_id=$request->input('order_id');
       $order_items->product_id=$request->input('product_id');
        $order_items->save();
        return redirect('/order_item')->with('status','Order Aded Successfully');
   }

   public function edit($id){
       $order_items=Order_Items::find($id);
       $order_details = Order_Details::all();
       $product = Product::all();
       return view('admin.order_item.edit', compact('order_item','order_details','product')); 

   }
   public function update(Request $request ,$id){
       $order_items=Order_Items::find($id);
       $order_items->order_details=$request->input('order_id');
       $order_items->product=$request->input('product_id');
       
        $order_items->update();
        return redirect('/order_item')->with('status','Order Update Successfully');

   }
   public function destroy( $id )
   {
       $orders_items=Order_Items::find($id);
       $orders_items->delete();
       return redirect('/order_item')->with('status','Order Deleted Successfully');
   }

}
