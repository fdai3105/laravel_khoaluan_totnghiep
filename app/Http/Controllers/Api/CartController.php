<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CartRequest;
use App\Http\Resources\CartResource;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

/**
 *
 * @group Cart
 */
class CartController extends Controller {

    /**
     * @param Request $request
     * @return AnonymousResourceCollection
     */
    public function show(Request $request): AnonymousResourceCollection {
        $carts = Cart::where('user_id', '=', $request->user()->id);
        return CartResource::collection($carts);
    }

    /**
     * @param Request $request
     */
    public function addToCart(Request $request) {

    }

    /**
     * @param Request $request
     */
    public function checkout(Request $request) {
        $order = Order::create([
            'status' => 'Pending',
            'total' => 0,
            'note' => $request->input('note'),
            'address_id' => $request->input('address_id'),
        ]);

        $products = $request->input('products');
//        foreach ($products as $product) {
//            $orderDetail = OrderDetail::create([
//                'quantity',
//                'total' => $orderDetail->product->price * ,
//                'product_id' => $product,
//                'order_id' => $order->id,
//            ]);
//        }
    }
}
