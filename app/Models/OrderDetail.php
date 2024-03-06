<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cart;

class OrderDetail extends Model
{
    use HasFactory;
    private static $OrderDetail;
    public static function newOrderDetail($order)
    {
        foreach(cart::content() as $item){
            self::$OrderDetail = new OrderDetail();
            self::$OrderDetail->order_id = $order->id;
            self::$OrderDetail->product_id = $item->id;
            self::$OrderDetail->product_name = $item->name;
            self::$OrderDetail->product_code = $item->options->code;
            self::$OrderDetail->product_price = $item->price;
            self::$OrderDetail->product_qty = $item->qty;
            self::$OrderDetail->save();
            Cart::remove($item->rowId);
        }
    }
}
