<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;

    const HOT_ON = 1;
    const HOT_OFF = 0;

    protected $status = [
        1 => [
            'name' => 'Công khai',
            'class' => 'btn-primary'
        ],
        0 => [
            'name' => 'Riêng tư',
            'class' => 'btn-danger'
        ]
    ];
    protected $hot = [
        1 => [
            'name' => 'Nổi bật',
            'class' => 'btn-primary'
        ],
        0 => [
            'name' => 'Không',
            'class' => 'btn-danger'
        ]
    ];
    public function getStatus()
    {
        return array_get($this->status, $this->pro_active, '[N/A]');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'pro_category_id');
    }

    public function getSameProduct()
    {
        return Product::where([
            'pro_category_id' => $this->pro_category_id,
            'pro_active' => Product::STATUS_PUBLIC,
        ])->limit(10)->get();
    }
}
