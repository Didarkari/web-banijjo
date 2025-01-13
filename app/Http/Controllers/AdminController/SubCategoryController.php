<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AdminModel\Category;
use App\Models\AdminModel\SubCategory;

class SubCategoryController extends Controller
{
    public function category() {
        $sub_categories = SubCategory::orderBy("id", 'Desc')->paginate('5');
        return view('backend.sub-category.index', compact('sub_categories'));
    }
    public function create() {
        $categories = Category::orderBy('order', 'Desc')->where('status', 1)->get();
        // dd($categories);

        return view('backend.sub-category.create', compact('categories'));
    }

    public function store(Request $request) {
        

                $request->validate([
                    'name' => 'required',
                    'order' => 'required',
                    'status' => 'required',
                ],
            [
                    'name.required' => 'Fill up the name',
                    'order.required' => 'Enter the order quantity',
                    'status.required' => 'Select the status',
            ],
        
        
        );
        
                $category = new SubCategory();
        
                $category->name = $request->name;
                $category->category_id = $request->category;
                $category->order = $request->order;
                $category->status = $request->status;
                // dd($category);
                $data = $category->save();
                
                if($data) {
                    return redirect('/sub-category/index')->with('success', "Successfully created");
                }
                else {
                    return redirect('/sub-category/index')->with('danger', "Failed");
                }
        
        
                
            }

            public function edit($id) {
                $edit_subcategory = SubCategory::find($id);
                $categories = Category::orderBy('order', 'ASC')->where('status', 1)->get();
                
                return view('backend.sub-category.edit',compact("edit_subcategory", "categories"));
        
            }

            public function update(Request $request, $id) {

                $request->validate([
                    'name' => 'required',
                    'order' => 'required',
                    'status' => 'required',
                ],
            [
                    'name.required' => 'Fill up the name',
                    'order.required' => 'Enter the order quantity',
                    'status.required' => 'Select the status',
            ]);
        
                $category = SubCategory::find($id);
        
                $category->name = $request->name;
                $category->category_id = $request->category;
                $category->order = $request->order;
                $category->status = $request->status;
        
                $data = $category->save();
        
                if($data) {
                    return redirect('/sub-category/index')->with('success', "Updated successfully");
                }
                else {
                    return redirect('/sub-category/index')->with('danger', "Failed");
                }
        
        
                
            }

            public function delete($id) {
                $delete_item = SubCategory::destroy($id);
                
                if($delete_item) {
                    return redirect('/sub-category/index')->with('success', 'Data deleted successfully.');
            
                }else {
                    return redirect('/sub-category/index')->with('danger', 'Failed');
                }
                
        
            }
}
