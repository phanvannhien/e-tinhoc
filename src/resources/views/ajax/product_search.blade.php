<ul>
    @foreach( $products as $product )
    <li>
        <a href="{{ $product->getUrl() }}">
            {{$product->title}}
        </a>
    </li>
    @endforeach
</ul>