<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestProduct;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $products = Product::with('category:id,c_name')->paginate(10);
        $categories = Category::paginate(10);
        $viewdata = [
            'products' => $products,
            'categories' => $categories

        ];
        return view('admin::product.index', $viewdata);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $categories = $this->getCategories();
        $viewdata = [
            'categories' => $categories
        ];
        return view('admin::product.create', $viewdata);
    }

    public function insert(RequestProduct $requestProduct)
    {
        $this->insertOrUpdate($requestProduct);
        return redirect()->back();
    }
    public function update(RequestProduct $requestProduct, $id)
    {
        $this->insertOrUpdate($requestProduct, $id);
        return redirect()->back();
    }
    public function insertOrUpdate(RequestProduct $requestProduct, $id = '')
    {
        $product = new Product;
        if ($id != '') {
            $product = Product::find($id);
        }
        $product->pro_name = $requestProduct->pro_name;
        $product->pro_code = $requestProduct->pro_code;

        $product->pro_content = $requestProduct->pro_content;
        $product->pro_meta_content = $requestProduct->pro_meta_content;
        $product->pro_slug = $requestProduct->pro_slug;
        $product->pro_active = $requestProduct->pro_active;
        $product->pro_stock = $requestProduct->pro_stock ? $requestProduct->pro_stock : 0;
        $product->pro_price = $requestProduct->pro_price ? $requestProduct->pro_price : 0;
        $product->pro_price_discount = $requestProduct->pro_price_discount ? $requestProduct->pro_price_discount : 0;
        $product->pro_hot = $requestProduct->pro_hot == 'on' ? 1 : 0;
        $product->pro_keyword_seo = $requestProduct->pro_keyword_seo;
        $product->pro_category_id = $requestProduct->pro_category_id;
        $product->pro_title_seo = $requestProduct->pro_title_seo;
        $product->pro_description_seo = $requestProduct->pro_description_seo;
        if ($requestProduct->hasFile('pro_avatar')) {
            $file = upload_image('pro_avatar');
            if (isset($file['name'])) {
                $product->pro_avatar = $file['name'];
            }
        }

        $product->save();
    }
    public function action(Request $request, $action, $id)
    {
        $product = Product::find($id);
        switch ($action) {
            case 'delete':
                $product->delete();
                break;
            case 'edit':
                $categories = $this->getCategories();
                $viewdata = [
                    'categories' => $categories,
                    'product' => $product
                ];
                return view('admin::product.create', $viewdata);
            case 'active':
                $product->pro_active = $product->pro_active ? 0 : 1;
                $product->save();
                break;
        }
        return redirect()->back();
    }
    public function getCategories()
    {
        return Category::all();
    }
}
