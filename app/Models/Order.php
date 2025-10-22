<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'status',
        'total',
        'discount_total',
        'tax_total',
        'shipping_total',
        'grand_total',
        'created_at',
        'updated_at',
    ];

    // Una orden tiene muchos ítems
    public function items()
    {
        return $this->hasMany(OrderItem::class, 'order_id');
    }

    // Si tienes un modelo Customer
    public function customer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
