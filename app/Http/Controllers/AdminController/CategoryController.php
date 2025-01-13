<?php

namespace App\Http\Controllers\AdminController;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\AdminModel\Category;
use App\Http\Controllers\Controller;
use function Laravel\Prompts\select;
use App\Http\Requests\Category\CategorytRequest;
use App\Http\Requests\Category\CreateCategorytRequest;
use App\Http\Requests\Category\UpdateCategorytRequest;

class CategoryController extends Controller
{
    public function category() {
        $categories = Category::orderByDesc("id")->paginate(5);
        return view('backend.category.index', compact('categories'));
    }

    public function create() {
        return view('backend.category.create');
    }
    public function store(CreateCategorytRequest $request) {
        

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

        $category = new Category();

        $category->name = $request->name;
        $category->order = $request->order;
        $category->status = $request->status;

        $data = $category->save();

        if($data) {
            return redirect('/category/index')->with('success', "Successfully created");
        }
        else {
            return redirect('/category/index')->with('danger', "Failed");
        }


        
    }


    public function edit($id) {
        $category = Category::find($id);
        
        return view('backend.category.edit',compact("category"));

    }

    public function update(UpdateCategorytRequest $request, $id) {

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

        $category = Category::find($id);

        $category->name = $request->name;
        $category->order = $request->order;
        $category->status = $request->status;

        $data = $category->save();

        if($data) {
            return redirect('/category/index')->with('success', "Updated successfully");
        }
        else {
            return redirect('/category/index')->with('danger', "Failed");
        }


        
    }

    public function delete($id) {
        $delete_item = Category::destroy($id);

        if($delete_item) {
            return redirect('/category/index')->with('success', 'Data deleted successfully.');
    
        }else {
            return redirect('/category/index')->with('danger', 'Failed');
        }
        

    }
}
