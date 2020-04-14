<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestOrder;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShoppingCartController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $shoppingcart  = Cart::content();
        $viewdata = [
            'shoppingcart' => $shoppingcart,
        ];
        return view('shoppingcart.index', $viewdata);
    }
    public function order(RequestOrder $request)
    {
        $data = $request->except('_token');

        if (isset(Auth::user()->id)) {
            $data['tst_user_id'] = Auth::user()->id;
        }
        $data['tst_total_money'] = str_replace(',', '', Cart::total(0));
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();
        $transactionID = Transaction::insertGetId($data);
        if ($transactionID) {
            $shoppingcart  = Cart::content();
            foreach ($shoppingcart as $item) {
                Order::insert([
                    'od_transaction_id' => $transactionID,
                    'od_product_id' => $item->id,
                    'od_price' => $item->options->price_old,
                    'od_sale' => $item->price,
                    'od_qty' => $item->qty,
                ]);
            }
        }
        Cart::destroy();
        return redirect()->to('/');
    }
    public function add($id)
    {
        $product = Product::find($id);
        Cart::add([
            'id' => $product->id,
            'name' => $product->pro_name,
            'qty' => 1,
            'price' => $product->pro_price_discount,
            'weight' => 1,
            'options' => [
                'price_old' => $product->pro_price,
                'percent_discount' => $product->pro_discount_percent,
                'image' => $product->pro_avatar,
                'slug' => $product->pro_slug,
            ],
        ]);
        Cart::setGlobalTax(10);
        return redirect()->back();
    }
    public function delete($rowID)
    {
        Cart::remove($rowID);
        return redirect()->back();
    }
}
