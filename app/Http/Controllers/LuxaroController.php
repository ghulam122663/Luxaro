<?php

namespace App\Http\Controllers;

use App\Models\Category;
// use App\Models\Product;
use App\Models\Shop;
use App\Models\DeliveryOption;
use App\Models\Merchant;
use App\Models\Product;
use Illuminate\Http\Request;
use Cache;

use App\Models\CharterCategory;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\User;
use PhpOffice\PhpSpreadsheet\Calculation\Statistical\Counts;

class LuxaroController extends Controller
{
    public function index(Request $request)
    {
       $featured_categories = Cache::rememberForever('featured_categories', function () {
            return Category::where('featured', 1)->get();
        });

        $todays_deal_products = Cache::rememberForever('todays_deal_products', function () {
            return filter_products(Product::where('published', 1)->where('todays_deal', '1'))->get();
        });

        $newest_products = Cache::remember('newest_products', 3600, function () {
            return filter_products(Product::latest())->limit(12)->get();
        });

        return view('newfrontend.lauxaro', compact('featured_categories', 'todays_deal_products', 'newest_products'));
    }
    
    public function lauxaro_products(Request $request)
    {
        
        $products = Product::all();
        return view('newfrontend.products', compact('products'));
    }
    
    public function productDetail(Request $request)
    {
        $product_detail  = Product::where('id', $request->id)->first();
        return view('newfrontend.product_detail', compact('product_detail'));
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
  
    public function myProfile()
    {
        $user = User::where('id',auth()->user()->id)->first();
        $countries = Country::all();
        $states = State::all();
        $cities = City::all();
        return view('newfrontend.my_profile',compact('user','states','cities','countries'));
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

    public function login()
    {
        return view('newfrontend.login');
    }
    
     public function seller_shop($slug)
    {
        $shop  = Shop::where('slug', $slug)->first();
        if ($shop != null) {
            if ($shop->verification_status != 0) {
                return view('newfrontend.seller_shop', compact('shop'));
            } else {
                return view('newfrontend.seller_shop_without_verification', compact('shop'));
            }
        }
        abort(404);
        //  return view('newfrontend.seller_shop', compact('shop'));
    }
    public function filter_shop($slug, $type)
    {
        $shop  = Shop::where('slug', $slug)->first();
        if ($shop != null && $type != null) {
            return view('newfrontend.seller_shop', compact('shop', 'type'));
        }
        abort(404);
    }


  public function load_best_sellers_section()
    {
        return view('frontend.partials.best_sellers_section');
    }
}
