<ul>
    @foreach($products as $product)
        <li>{{$product->name}} - {{$product->brand->name}} - {{$product->category->name}}
            @foreach($product->ratings as $rating)
                - {{$rating->comment}} {{$rating->rating}} -
            @endforeach
        </li>
    @endforeach
</ul>
