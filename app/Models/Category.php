<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $guarded = [''];
    public function getProduct($id)
    {
        return Product::where([
            'pro_category_id' => $id,
            'pro_active' => Product::STATUS_PUBLIC,
        ])->limit(5)->get();
    }
}
