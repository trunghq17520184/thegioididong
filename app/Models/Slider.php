<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'sliders';
    protected $guarded = [''];

    protected $status = [
        1 => [
            'name' => 'Slider động',

        ],
        0 => [
            'name' => 'Slider tĩnh',
        ],
        2 => [
            'name' => 'Cả hai',
        ],
    ];
    public function getType()
    {
        return array_get($this->status, $this->type, '[N/A]');
    }
}
