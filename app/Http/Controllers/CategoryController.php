<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;

class CategoryController extends Controller
{
    public function createCategory()
    {
    	return view('admin.category.createCategory');
    }
    public function storeCategory(Request $request)
    {
    	$this->validate($request,[
    		'categoryName' => 'required',
    		'categoryDescription' => 'required',
            'publicationStatus' => 'required'
    	]);
    	// return $request->all();
    	// $category = new category();
    	// $category->categoryName = $request->categoryName;
    	// $category->categoryDescription = $request->categoryDescription;
    	// $category->publicationStatus = $request->publicationStatus;
    	// $category->save();
    	// return "Successfully Added Category-Info";

    	// Category::create($request->all());
    	// return "dsfsf";

    	DB::table('categories')->insert([
    		'categoryName' =>$request->categoryName,
    		'categoryDescription' =>$request->categoryDescription,
    		'publicationStatus' =>$request->publicationStatus
    	]);
    	return redirect('/category/add')->with('message', 'Successfully Added Category-Info');
    }

    public function manageCategory()
    {
    	$categories = Category::all();
    	return view('admin.category.manageCategory', ['categories'=>$categories]);
    }
    public function editCategory($id)
    {
    	$categoryById = Category::where('id', $id)->first();
    	return view('admin.category.editCategory', ['categoryById'=>$categoryById]);
    }

    public function updateCategory(Request $request)
    {
    	// dd( $request->all() );
    	$category = Category::find($request->id);

    	$category->categoryName = $request->categoryName;
    	$category->categoryDescription = $request->categoryDescription;
    	$category->publicationStatus = $request->publicationStatus;
    	$category->save();
    	return redirect('/category/manage')->with('message', 'Successfully Updated Category Info');
    }
    public function deleteCategory($id)
    {
    	$category = Category::find($id);
    	$category->delete();
    	return redirect('/category/manage')->with('message', 'Successfully Deleted Category Info');
    }


}
