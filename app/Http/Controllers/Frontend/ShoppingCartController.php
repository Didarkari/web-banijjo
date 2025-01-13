<?php

namespace App\Http\Controllers\Frontend;

use Stripe\Charge;
use Stripe\Stripe;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class ShoppingCartController extends Controller
{

    public function addToCart(Request $request)
    {

        if (!Auth::check()) {
            return redirect('user-login');
        }

        $cart = new ShoppingCart();
        $cart->user_id = Auth::user()->id;
        $cart->product_id = $request->product;
        $cart->quantity = $request->quantity;

        $cart->save();

        return redirect()->back()->with('success', "Successfully added");
    }

    public function cartUpdate(Request $request)
    {

        foreach ($request->carts as $cart_id) {

            $cart = Shoppingcart::find($cart_id);

            $cart->quantity = $request->quantity[$cart_id];

            $cart->save();
        }

        // $cart = ShoppingCart::find();
        // $cart->user_id =Auth::user()->id;
        // $cart->product_id = $request->product;
        // $cart->quantity = $request->quantity;

        // $cart->save();

        return redirect()->back()->with('success', "Successfully Updated");
    }

    public function viewCarts()
    {
        $cart_products = ShoppingCart::where('user_id', Auth::user()->id)->get();

        // @dd($cart_products);
        return view('frontend.carts', compact('cart_products'));
    }


    public function userOrders()
    {
        $orders = Order::where('customer_id', Auth::user()->id)->get();


        // @dd($cart_products);
        return view('frontend.my-orders', compact('orders'));
    }


    public function checkout()
    {
        $cart_products = ShoppingCart::where('user_id', Auth::user()->id)->get();

        // @dd($cart_products);
        return view('frontend.checkout', compact('cart_products'));
    }


    public function orderStore(Request $request)
    {
        DB::beginTransaction();

        try {

            Stripe::setApiKey(env('STRIPE_SECRET'));



        Charge::create([

            "amount" => (int) round($request->total_amount * 100),

            "currency" => "usd",

            "source" => $request->stripeToken,

            "description" => "Test payment from itsolutionstuff.com."

        ]);

        $order = new Order();

        $order->date = date('Y-m-d');
        $order->customer_id = auth::user()->id;
        $order->customer_name = $request->customer_name;
        $order->company_name = $request->company_name;
        $order->address = $request->address;
        $order->mobile = $request->mobile;
        $order->order_notes = $request->order_notes;
        $order->total_quantity = 0;
        $order->total_amount = 0;


        $order->save();




        $cart_products = ShoppingCart::where('user_id', Auth::user()->id)->get();

        $qty = 0;
        $sub_total = 0;
        $discount = 0;
        $total = 0;


        foreach ($cart_products as $product) {


            $discount_price =
                $product->product->price -
                ($product->product->price / 100 * $product->product->discount);

            $qty += $product->quantity;
            $discount +=
                ($product->product->price / 100 *
                    $product->product->discount);

            $sub_total += $product->quantity * $product->product->price;

            $total += $product->quantity * $discount_price;

            // $sub_total += $total + $discount;
            // $total += $product->quantity * $discount_price;
            // @dd($discount_price, $discount, $sub_total, $total)

            $order_detail = new OrderDetail();
            $order_detail->order_id = $order->id;
            $order_detail->product_id = $product->product->id;
            $order_detail->quantity = $product->quantity;
            $order_detail->amount = $total;
            $order_detail->save();
        }

        $order->total_quantity = $qty;
        $order->total_amount = $total;
        $order->save();


        DB::commit();

        ShoppingCart::where('user_id', Auth::user()->id)->delete();

        return redirect()->back()->with('success', "Successfully ordered!");


        } catch (\Exception $e) {
            DB::rollBack();

            dd($e);

            return redirect()->back()->with('danger', "Order couldn't complete!");
        }

    
    }



}
