<?php

namespace App\Http\Controllers\AdminController;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\AdminModel\Upload;
use App\Models\AdminModel\product;
use Illuminate\Support\Facades\DB;
use App\Models\AdminModel\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\AdminModel\SubCategory;

class ProductController extends Controller
{
  public function category()
  {
    $products = product::orderByDesc('id')->with('images')->paginate(5);
    return view('backend.product.index', compact('products'));
  }

  public function create()
  {
    $categories = Category::orderByDesc("id")->where('status', 1)->get();

    return view('backend.product.create', compact('categories'));
  }
  public function store(Request $request)
  {


    //         $request->validate([
    //             'name' => 'required',
    //             'order' => 'required',
    //             'status' => 'required',
    //         ],
    //     [
    //             'name.required' => 'Fill up the name',
    //             'order.required' => 'Enter the order quantity',
    //             'status.required' => 'Select the status',
    //     ],


    // );
        DB::beginTransaction();

        try {

          $product = new product();

              $product->name = $request->name;
              $product->order = $request->order;
              $product->price = $request->price;
              $product->quantity = $request->quantity;
              $product->status = $request->status;
              $product->discount = $request->discount;
              $product->short_description = $request->short_description;
              $product->description = $request->description;
              $product->product_details = $request->product_details;
              $product->delivery_policy = $request->delivery_policy;
              $product->product_details = $request->product_details;
              $product->return_policy = $request->return_policy;
              $product->category_id = $request->category;
              $product->sub_category_id = $request->sub_category;
              $product->save();

          $images = $request->file('images');
          if ($request->hasFile('images')) {

            foreach ($images as $item) {
              $var = date_create();
              $time = date_format($var, 'YmdHis');

              $imageName = $time . '-' . $item->getClientOriginalName();
              $item->move(public_path() . '/uploads/file/', $imageName);

              $upload = new Upload();

              $upload->path = '/uploads/file/' . $imageName;
              $upload->product_id = $product->id;
              $upload->save();
            }
          }

          DB::commit();
          return redirect('/product/index')->with('success', "Successfully created");
        } 
        catch (\Exception $e) 
        {
          DB::rollback();
          return redirect()->back()->with('danger', "Failed");
        }
      }






  public function edit($id)
  {
    $category = product::find($id);

    $categories = Category::orderByDesc("id")->where('status', 1)->get();
    $sub_categories = SubCategory::orderByDesc("id")->where('status', 1)->where('category_id', $category->category_id)->get();

    return view('backend.product.edit', compact("category","categories", "sub_categories"));
  }

  public function update(Request $request, $id)
  {

    //     $request->validate([
    //         'name' => 'required',
    //         'order' => 'required',
    //         'status' => 'required',
    //     ],
    // [
    //         'name.required' => 'Fill up the name',
    //         'order.required' => 'Enter the order quantity',
    //         'status.required' => 'Select the status',
    // ]);


    DB::beginTransaction();

        try {

          $product = product::find($id);

              $product->name = $request->name;
              $product->order = $request->order;
              $product->price = $request->price;
              $product->quantity = $request->quantity;
              $product->status = $request->status;
              $product->discount = $request->discount;
              $product->short_description = $request->short_description;
              $product->description = $request->description;
              $product->product_details = $request->product_details;
              $product->delivery_policy = $request->delivery_policy;
              $product->product_details = $request->product_details;
              $product->return_policy = $request->return_policy;
              $product->category_id = $request->category;
              $product->sub_category_id = $request->sub_category;
              $product->save();



          $images = $request->file('images');
          if ($request->hasFile('images')) {

            foreach ($product->images as $item) {
              $upload = Upload::find($item->id);

              unlink(public_path() . $upload->path);

              $upload->delete();


            }

            foreach ($images as $item) {
              $var = date_create();
              $time = date_format($var, 'YmdHis');

              $imageName = $time . '-' . $item->getClientOriginalName();
              $item->move(public_path() . '/uploads/file/', $imageName);

              $upload = new Upload();

              $upload->path = '/uploads/file/' . $imageName;
              $upload->product_id = $product->id;
              $upload->save();
            }
          }

          DB::commit();
          return redirect('/product/index')->with('success', "Successfully created");
        } 
        catch (\Exception $e)
         
        
        {dd($e);
          DB::rollback();
          return redirect()->back()->with('danger', "Failed");
        }
  }

  public function delete($id)
  {
    $delete_item = Product::find($id);

    foreach ($delete_item->images as $item) {

      unlink(public_path() . $item->path);

      $delete_item->delete();


    }

    if ($delete_item) {
      return redirect('/product/index')->with('success', 'Data deleted successfully.');
    } else {
      return redirect('/product/index')->with('danger', 'Failed');
    }
  }


  public function subCategories(Request $request)
  {

    $sub_categories = SubCategory::where('category_id', $request->category_id)->where('status', 1)->get();

    return response()->json(['sub_categories' => $sub_categories]);
  }


  public function adminOrders()
  {
      $orders = Order::paginate(10);


      // @dd($cart_products);
      return view('backend.admin-orders', compact('orders'));
  }
}
