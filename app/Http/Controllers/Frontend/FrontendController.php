<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\verficationEmail;
use App\Models\AdminModel\Product;
use App\Models\AdminModel\Category;
use App\Http\Controllers\Controller;
use App\Models\ShoppingCart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class FrontendController extends Controller
{
    public function index()
    {

        $categories = Category::with('products')->withCount('products')->where('status', 1)->get();
        // dd($categories);
        return view('frontend.frontend', compact('categories'));
    }

    public function productDetails($id)
    {

        $product = Product::find($id);

        return view('frontend.product-details', compact('product'));
    }




    

    public function userLogin()
    {
        return view('frontend.auth.login');
    }


    public function userRegister(Request $request)
    {


        //     $request->validate([
        //     'name' => 'required',
        //     'mobile' => 'required',
        //     'email' => 'required',
        //     // 'password' => 'min:4','required','confirmed',
        //      'password' => 'min:4','confirmed',
        //     'password_confirmation' => 'required_with:password','same:password','min:4'
        //     // 'password' => 'min:4','required_with:confirm_password','same:confirm_password',
        // ]);

        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'password' => 'min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6'
        ]);






        $user = new User();

        $user->name = $request->name;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->user_type = 'customer';
        $user->otp = rand(2000000, 9000000);
        $user->password = Hash::make($request->password);

        $user->save();


        Mail::to($request->email)->send(new verficationEmail($user->otp));

        return back()->with('success', 'Registation successfully done');
    }



    public function otpVerification($otp)
    {
        $user = User::where('otp', $otp)->first();

        if ($user) {
            $user->email_verified_at = date('Y-m-d H:i:s');
            $user->save();
            return redirect('user-login')->with('success', 'Verification successfully done');
        } else {
            return redirect('user-login')->with('danger', 'Verification failed');
        }
    }


    public function userLoginPost(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        // dd($user->email_verified_at);


        if($user->email_verified_at == "") {
            return back()->with('danger', 'Verify your email');
        }


        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credetials)) {
            return redirect('/')->with('success', 'Login successfully done');
        }
        return back()->with('danger', 'Invalid Email or Password');
    }
}
