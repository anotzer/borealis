<?php

namespace App\Http\Controllers;

use App\Category;
use App\Category_Product;
use App\Product;
use Illuminate\Http\Request;

class ListViewController extends Controller
{
    public function list_view () {
        $products = Product::orderBy('created_at', 'DESC')->paginate(6);
        $categories = Category::all();
        return view('listv.list-tasks', compact('products'),compact('categories'));
    }


    public function category_list_view ($id) {
        $category_products = Category_Product::where('category_id', $id)->orderBy('created_at', 'DESC')->get();
        return view('listv.category-list-view',compact('category_products'));
    }
}
