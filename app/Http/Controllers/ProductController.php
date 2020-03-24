<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    } 
    public function getdetailProduct(Request $request)
    {
        $url = $request->segment(2);
        $url = preg_split('/(-)/i', $url);
        $id = array_pop($url);
        if ($id) {
            $product = Product::find($id);
            $viewdata = [
                'product' => $product,
            ];
            return view('products.detail', $viewdata);
        }
        return redirect('/');
    }
}
