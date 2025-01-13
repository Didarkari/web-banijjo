@extends('frontend.master')

@section('title_name')
    Carts page
@endsection


@section('maniContaint')
    <!-- Begin Li's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">

            @if (Session::has('success'))
                <p class="alert alert-success">{{ Session::get('success') }}</p>
            @elseif(Session::has('danger'))
                <p class="alert alert-danger">{{ Session::get('danger') }} </p><!-- here to 'withWarning()' -->
            @endif

            <div class="breadcrumb-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!--Shopping Cart Area Strat-->
    <div class="Shopping-cart-area pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <form action="{{ route('cart.update') }}" method="POST">
                        @csrf

                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="li-product-remove">remove</th>
                                        <th class="cart-product-name">Product</th>
                                        <th class="li-product-price">Unit Price</th>
                                        <th class="li-product-quantity">Quantity</th>
                                        <th class="li-product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php

                                        $sub_total = 0;
                                        $discount = 0;
                                        $total = 0;

                                    @endphp

                                    @foreach ($cart_products as $product)
                                        @php

                                            $discount_price =
                                                $product->product->price -
                                                ($product->product->price / 100 * $product->product->discount);

                                                $discount +=
                                                    ($product->product->price / 100 *
                                                    $product->product->discount);
                                                    
                                                    $sub_total += $product->quantity * $product->product->price;

                                            $total += $product->quantity * $discount_price;

                                            // $sub_total += $total + $discount;
                                            // $total += $product->quantity * $discount_price;
                                            // @dd($discount_price, $discount, $sub_total, $total)

                                        @endphp


                                        <input type="hidden" name="carts[{{ $product->id }}]" value="{{ $product->id }}">
                                        <tr>
                                            <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a>
                                            </td>

                                            <td class="li-product-name"><a href="#">{{ $product->product->name }}</a>
                                            </td>
                                            <td class="li-product-price"><span
                                                    class="amount">{{ number_format($discount_price, 2) }}</span></td>
                                            <td class="quantity">
                                                <label>Quantity</label>
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" name="quantity[{{ $product->id }}]"
                                                        value="{{ $product->quantity }}" type="text">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                            </td>
                                            <td class="product-subtotal"><span
                                                    class="amount">${{ number_format($discount_price, 2) * $product->quantity }}</span>
                                            </td>

                                            {{-- @php

                                                $total += $product->quantity * $discount_price;
                                            @endphp --}}
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="coupon-all">

                                    <div class="coupon2">
                                        <input class="button" name="update_cart" value="Update cart" type="submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <ul>
                                    {{-- @php

                                    $discount +=
                                    ($product->product->price / 100) * ($product->product->discount *
                                    $product->quantity);
                                    
                                    // $total += $sub_total - $discount;
                                    $sub_total += $product->quantity * $product->product->price;
                                    // $total += $product->quantity * $discount_price;
                                @endphp --}}

                                    <li>Subtotal <span>${{ number_format($sub_total, 2) }}</span></li>
                                    <li>Discount <span>${{ number_format($discount, 2) }}</span></li>
                                    <li>Total <span>${{ number_format($total, 2) }}</span></li>
                                </ul>

                                <a href="{{ route('checkout') }}">Proceed to checkout</a>
                            </div>

                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Shopping Cart Area End-->z
@endsection
