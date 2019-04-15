@component('mail::message')
## Xin chào, {{ $order->customer->full_name }}


### XÁC NHẬN ĐƠN ĐẶT HÀNG

Email này để xác bạn bạn đã đặt hàng, Dưới đây là thông tin đặt hàng của bạn

@component('mail::panel')
    ### Thông tin giao hàng
    Tên người nhận: {{ $order->shipping_full_name }}
    Email người nhận: {{ $order->shipping_femail }}
    SĐT người nhận: {{ $order->shipping_phone }}
    Địa chỉ: {{ $order->getShippingAddress() }}
@endcomponent

@component('mail::panel')
    ### Hình thức giao hàng
    Hình thức: {{ $order->shipping_title }}
    Phí shipping: {{ $order->shipping_amount }}
@endcomponent

@component('mail::panel')
    ### Hình thức thanh toán
    {{ $order->payment_title }}
    {{ $order->payment_description }}
@endcomponent

### Thông tin đơn hàng

Tổng cộng: <span style="color:red">{{ number_format($order->total) }} đ</span>

@component('mail::table')
    | Sản phẩm      | Số lượng         | Đơn giá  | Thành tiền
    | ------------- |:-------------:| --------:| --------:|
    @foreach( $order->items as $item )
    | <a href="{{ $item->product->getUrl() }}">{{ $item->product_title }}</a> | {{ $item->qty_ordered }} | {{ number_format($item->price) }}đ |{{ number_format($item->total) }}đ|
    @endforeach
@endcomponent

Thanks,<br>
{{ config('app.name') }}

@endcomponent










