<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class NewShopController extends Controller
{
    public function index()
    {
        $publishedProducts = Product::all(); 
        return view('front-end.home.home', ['publishedProducts'=>$publishedProducts]);
    }

    public function categoryContent($id)
    {
        $publishedCategoryProducts = Product::where('categoryId', $id)
                                            ->where('publicationStatus', 1)
                                            ->get();


        $publishedCategories = Category::where('id', $id)
                                            ->where('publicationStatus', 1)
                                            ->get();


        return view ('front-end.category.category-content', ['publishedCategoryProducts'=>$publishedCategoryProducts, 'publishedCategories'=>$publishedCategories]);
    }
    public function productDetails($id)
    {
        $product = Product::find($id);
        return view('front-end.product.product-details',['product'=>$product]);
    }
}
