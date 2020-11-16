<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    const PENDING = 'Đang xử lý đơn hàng';

    protected $fillable = [
        'order_status',
        'shipping_address',
        'phoneReceiver',
        'nameReceiver',
        'shipping_fee'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function books()
    {
        return $this->belongsToMany('App\Models\Book', 'order_details');
    }
}
