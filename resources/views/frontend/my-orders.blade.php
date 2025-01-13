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



                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="li-product-remove">Date</th>
                                    <th class="cart-product-name">Customer</th>
                                    <th class="li-product-price">Order Notes</th>
                                    <th class="li-product-quantity">Quantity</th>
                                    <th class="li-product-subtotal">Total Amount</th>
                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($orders as $order)
                                    <tr>

                                        <td class="li-product-name"><a href="#">{{ $order->date }}</a>
                                        </td>
                                        <td class="li-product-name"><a href="#">{{ $order->customer_name }}</a>
                                        </td>
                                        <td class="li-product-name"><a href="#">{{ $order->order_notes }}</a>
                                        </td>
                                        <td class="li-product-name"><a href="#">{{ $order->total_quantity }}</a>
                                        </td>
                                        <td class="li-product-name"><a href="#">{{ $order->total_amount }}</a>
                                        </td>
                                        
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!--Shopping Cart Area End-->z
@endsection
