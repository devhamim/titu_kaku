<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Attribute;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Inventory;
use App\Models\OrderProduct;
use App\Models\PrivacyPolicy;
use App\Models\Product;
use App\Models\Review;
use App\Models\TermAndCondition;
use Illuminate\Http\Request;
use DB;

class FrontendController extends Controller
{
    //home
    function home(){
        $banners = Banner::where('status', 1)->get();
        $categorys = Category::where('status', 1)->get();
        $products = Product::where('status', 1)->get();
        $reviews = Review::where('status', 1)->get();

        $topSellingProducts = Product::join('order_products', 'products.id', '=', 'order_products.product_id')
    ->take(20)
    ->get();
        return view('frontend.index',[
            'banners'=>$banners,
            'categorys'=>$categorys,
            'products'=>$products,
            'reviews'=>$reviews,
            'topSellingProducts'=>$topSellingProducts,
        ]);
    }

    // gallery
    function gallery(){
        return view('frontend.gallery');
    }
    // contect
    function contect(){
        return view('frontend.contect');
    }

    // blogs
    function blogs(){
        return view('frontend.blog');
    }
   

   //about_us
   function about_us(){
    $abouts = About::where('status', 1)->first();
    return view('frontend.about',[
        'abouts'=>$abouts,
    ]);
}

//privacy_policy
function privacy_policy(){
    $privacypolicy = PrivacyPolicy::first();
    return view('frontend.privacy_policy',[
        'privacypolicy'=>$privacypolicy,
    ]);
}

//terms_condition
function terms_condition(){
    $termscondition = TermAndCondition::first();
    return view('frontend.termandcondition',[
        'termscondition'=>$termscondition,
    ]);
}
}
