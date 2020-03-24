<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getlistProduct(Request $request)
    {
        $url = $request->segment(2);
        $url = preg_split('/(-)/i', $url);
        $id = array_pop($url);
        if ($id) {
            $category = Category::find($id);
            $products = Product::where([
                'pro_category_id' => $id,
                'pro_active' => Product::STATUS_PUBLIC,
            ])->orderBy('id', 'DESC')->paginate(12);
            $viewdata = [
                'products' => $products,
                'category' => $category
            ];
            return view('products.index', $viewdata);
        }
        return redirect('/');
    }
}
