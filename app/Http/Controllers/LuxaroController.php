<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class LuxaroController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();
        return view('newfrontend.products',compact('products'));
    }
    public function productDetail(Request $request)
    {
        $product_detail  = Product::where('id',$request->id)->first();
        return view('newfrontend.product_detail',compact('product_detail'));
    }
    public function merchantSuitManagement()
    {
        return view('newfrontend.suite_management');
    }
    public function merchantPaymentManagement()
    {
        return view('newfrontend.payment_management');
    }
    public function merchantSuits()
    {
        return view('newfrontend.merchant_suits');
    }
    public function charterDetail()
    {
        return view('newfrontend.charter_detail');
    }
    public function createAccount()
    {
        return view('newfrontend.create_account');
    }
    public function chats()
    {
        return view('newfrontend.chats');
    }
    public function goldEvine()
    {
        return view('newfrontend.goldevine_projects');
    }
    public function charters()
    {
        return view('newfrontend.charters');
    }
    public function myProfile()
    {
        return view('newfrontend.my_profile');
    }
    public function faqs()
    {
        return view('newfrontend.faqs');
    }
    public function contactUs()
    {
        return view('newfrontend.contact_us');
    }
    public function aboutUs()
    {
        return view('newfrontend.about_us');
    }
    public function merchantForm1()
    {
        return view('newfrontend.merchant_form1');
    }
    public function merchantForm2()
    {
        return view('newfrontend.merchant_form2');
    }
    public function login()
    {
        return view('newfrontend.login');
    }

}
