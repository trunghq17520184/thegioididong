<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $guarded = [''];
    protected $status = [
        1 => [
            'name' => 'Đã tiếp nhận',
            'class' => 'label-secondary'
        ],
        0 => [
            'name' => 'Đã hủy',
            'class' => 'label-danger'
        ],
        2 => [
            'name' => 'Đã giao hàng',
            'class' => 'label-primary'
        ],
        3 => [
            'name' => 'Đã thanh toán',
            'class' => 'label-warning'
        ],
        4 => [
            'name' => 'Đã hoàn thành',
            'class' => 'label-success'
        ],
    ];
    public function getStatus()
    {
        return array_get($this->status, $this->tst_status, '[N/A]');
    }
}
