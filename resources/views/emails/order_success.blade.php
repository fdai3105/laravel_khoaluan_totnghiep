@extends('layouts.master')

@section('content')
    <div class="max-w-lg mx-auto py-10 flex flex-col justify-center">
        <div class="justify-center text-center">
            <p class="text-xl font-bold text-gray-800">Thanks for your order</p>
            <p class="">You'll receive an email when your items are shipped. If you have any questions, Call us</p>
        </div>

        <div class="flex flex-row p-4 my-6 bg-gray-50 border border-gray-200">
            <div class="flex-1">
                <p class="font-bold">SUMMARY:</p>
                <P>Order id: {{ $order->id }}</P>
                <P>Order date: {{ \Carbon\Carbon::parse($order->created_at)->format('d-m-Y') }}</P>
                <P>Order total: {{ $order->total }}</P>
            </div>
            <div class="flex-1">
                <p class="font-bold">Shipping Address:</p>
                <P>{{ $order->address->city }}</P>
                <P>{{ $order->address->district }}</P>
                <P>{{ $order->address->ward }}</P>
            </div>
        </div>

        <table class="table-auto border border-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th>Items</th>
                <th>Name</th>
                <th>QTY</th>
                <th>Price</th>
            </tr>
            </thead>

            <tbody>
            @foreach($order->orderDetail as $item)
                <tr class="text-center">
                    <td class="p-3">
                        <img src="{{ $item->product->images->first() }}">
                    </td>
                    <td class="p-3">{{ $item->product->name }}</td>
                    <td class="p-3">{{ $item->quantity }}</td>
                    <td class="p-3">{{ $item->total }}</td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
@endsection
