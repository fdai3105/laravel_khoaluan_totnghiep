<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderDetailResource;
use App\Http\Resources\OrderResource;
use App\Mail\OrderMail;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller {
    /**
     * Get orders
     * @param Request $request
     * @return AnonymousResourceCollection
     */
    public function orders(Request $request): AnonymousResourceCollection {
        $order = Order::where('user_id', $request->user()->id)->get();
        return OrderResource::collection($order);
    }

    /** Get order detail
     * @param $id
     * @return AnonymousResourceCollection
     */
    public function getOrder($id): AnonymousResourceCollection {
        $order = Order::findOrFail($id);
        return OrderDetailResource::collection($order->orderDetail);
    }

    /**
     * Checkout
     *
     * @param Request $request
     * @return false|JsonResponse
     */
    public function checkout(Request $request) {
        $products_id = $request->input('products');
        $products_quantity = $request->input('products_quantity');

        if (count($products_id) != count($products_quantity)) return false;

        try {
            $order = Order::create([
                'status' => 'Pending',
                'total' => 0,
                'note' => $request->input('note'),
                'address_id' => $request->input('address_id'),
                'user_id' => $request->user()->id,
            ]);

            $total = 0;
            foreach ($products_id as $key => $id) {
                $product = Product::find($id);
                $totalPerItem = $product->price * $products_quantity[$key];
                $product->stock--;
                $product->save();
                $total = +$totalPerItem;
                OrderDetail::create([
                    'quantity' => $products_quantity[$key],
                    'total' => $totalPerItem,
                    'product_id' => $id,
                    'order_id' => $order->id,
                ]);
            }
            $order->update([
                'total' => $total
            ]);

            Mail::to($request->user()->email)->send(new OrderMail($order));

            return response()->json(['message' => 'checkout success']);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 409);
        }
    }
}
