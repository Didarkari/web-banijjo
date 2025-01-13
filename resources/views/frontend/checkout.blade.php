@extends('frontend.master')

@section('title_name')
    Checkout page
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
                    <li class="active">Checkout</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!--Checkout Area Strat-->
    <div class="checkout-area pt-60 pb-30">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-12">
                    <form 

                            role="form" 

                            action="{{ route('order.store') }}" 

                            method="post" 

                            class="require-validation"

                            data-cc-on-file="false"

                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"

                            id="payment-form">

                            @csrf


                        <div class="checkbox-form">
                            <h3>Shipping Info</h3>

                            <div class="different-address">

                                <div id="ship-box-info" class="row" style="display: block;">

                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Name <span class="required">*</span></label>
                                            <input placeholder="" type="text" name="customer_name">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Company Name</label>
                                            <input placeholder="" type="text" name="company_name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Address <span class="required">*</span></label>
                                            <input placeholder="Street address" type="text" name="address">
                                        </div>
                                    </div>


                                    < <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Mobile <span class="required">*</span></label>
                                            <input type="text" name="mobile">
                                        </div>
                                </div>
                            </div>
                            <div class="order-notes">
                                <div class="checkout-form-list">
                                    <label>Order Notes</label>
                                    <textarea id="checkout-mess" cols="30" rows="10" name="order_notes"
                                        placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                        </div>
                </div>
               
            </div>
            <div class="col-lg-6 col-12">
                <div class="your-order">
                    <h3>Your order</h3>
                    <div class="your-order-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="cart-product-name">Product</th>
                                    <th class="cart-product-total">Total</th>
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
                                            ($product->product->price / 100) * $product->product->discount;

                                        $discount += ($product->product->price / 100) * $product->product->discount;

                                        $sub_total += $product->quantity * $product->product->price;

                                        $total += $product->quantity * $discount_price;

                                        // $sub_total += $total + $discount;
                                        // $total += $product->quantity * $discount_price;
                                        // @dd($discount_price, $discount, $sub_total, $total)

                                    @endphp


                                    <tr class="cart_item">
                                        <td class="cart-product-name"> {{ $product->product->name }}t<strong
                                                class="product-quantity"> × {{ $product->quantity }}</strong></td>
                                        <td class="cart-product-total"><span
                                                class="amount">${{ number_format($discount_price, 2) }}</span></td>
                                    </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr class="cart-subtotal">
                                    <th>Cart Subtotal</th>
                                    <td><span class="amount">${{ $sub_total }}</span></td>
                                </tr>
                                <tr class="cart-subtotal">
                                    <th>Discount</th>
                                    <td><span class="amount">${{ number_format($discount, 2) }}</span></td>
                                </tr>
                                <tr class="order-total">
                                    <th>Order Total</th>
                                    <td><strong><span class="amount">${{ $total }}</span></strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="payment-method">
                        <div class="payment-accordion">
                            <div class='form-row row'>

                            <div class='col-xs-12 form-group required'>

                                <label class='control-label'>Name on Card</label> <input

                                    class='form-control' size='4' type='text'>

                            </div>

                        </div>

    
                        <input type="hidden" name="total_amount" value="{{ $total }}">
                        
                        <div class='form-row row'>

                            <div class='col-xs-12 form-group card required'>

                                <label class='control-label'>Card Number</label> <input

                                    autocomplete='off' class='form-control card-number' size='20'

                                    type='text'>

                            </div>

                        </div>

    

                        <div class='form-row row'>

                            <div class='col-xs-12 col-md-4 form-group cvc required'>

                                <label class='control-label'>CVC</label> <input autocomplete='off'

                                    class='form-control card-cvc' placeholder='ex. 311' size='4'

                                    type='text'>

                            </div>

                            <div class='col-xs-12 col-md-4 form-group expiration required'>

                                <label class='control-label'>Expiration Month</label> <input

                                    class='form-control card-expiry-month' placeholder='MM' size='2'

                                    type='text'>

                            </div>

                            <div class='col-xs-12 col-md-4 form-group expiration required'>

                                <label class='control-label'>Expiration Year</label> <input

                                    class='form-control card-expiry-year' placeholder='YYYY' size='4'

                                    type='text'>

                            </div>

                        </div>

    

                        <div class='form-row row'>

                            <div class='col-md-12 error form-group hide'>

                                <div class='alert-danger alert'>Please correct the errors and try

                                    again.</div>

                            </div>

                        </div>
                            <div class="order-button-payment">
                                <input value="Place order" type="submit">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </div>
    <!--Checkout Area End-->
@endsection

@push('script')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    

<script type="text/javascript">

  

$(function() {

  

    /*------------------------------------------

    --------------------------------------------

    Stripe Payment Code

    --------------------------------------------

    --------------------------------------------*/

    

    var $form = $(".require-validation");

     

    $('form.require-validation').bind('submit', function(e) {

        var $form = $(".require-validation"),

        inputSelector = ['input[type=email]', 'input[type=password]',

                         'input[type=text]', 'input[type=file]',

                         'textarea'].join(', '),

        $inputs = $form.find('.required').find(inputSelector),

        $errorMessage = $form.find('div.error'),

        valid = true;

        $errorMessage.addClass('hide');

    

        $('.has-error').removeClass('has-error');

        $inputs.each(function(i, el) {

          var $input = $(el);

          if ($input.val() === '') {

            $input.parent().addClass('has-error');

            $errorMessage.removeClass('hide');

            e.preventDefault();

          }

        });

     

        if (!$form.data('cc-on-file')) {

          e.preventDefault();

          Stripe.setPublishableKey($form.data('stripe-publishable-key'));

          Stripe.createToken({

            number: $('.card-number').val(),

            cvc: $('.card-cvc').val(),

            exp_month: $('.card-expiry-month').val(),

            exp_year: $('.card-expiry-year').val()

          }, stripeResponseHandler);

        }

    

    });

      

    /*------------------------------------------

    --------------------------------------------

    Stripe Response Handler

    --------------------------------------------

    --------------------------------------------*/

    function stripeResponseHandler(status, response) {

        if (response.error) {

            $('.error')

                .removeClass('hide')

                .find('.alert')

                .text(response.error.message);

        } else {

            /* token contains id, last4, and card type */

            var token = response['id'];

                 

            $form.find('input[type=text]').empty();

            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");

            $form.get(0).submit();

        }

    }

     

});

</script>
@endpush
