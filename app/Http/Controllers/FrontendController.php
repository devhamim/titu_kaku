<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Client;
use App\Models\Experience;
use App\Models\PrivacyPolicy;
use App\Models\Review;
use App\Models\Stores;
use App\Models\TermAndCondition;
use App\Models\Video;
use Illuminate\Http\Request;
use DB;

class FrontendController extends Controller
{
    //home
    function home(){
        $banners = Banner::where('status', 1)->get();
        $categorys = Category::where('status', 1)->get();
        $reviews = Review::where('status', 1)->get();
        $experience = Experience::first();
        $clients = Client::where('status', 1)->get();
        $stores = Stores::where('status', 1)->get();
        $videos = Video::where('status', 1)->first();
        $footer_image = Review::where('status', 1)->orderBy('id', 'DESC')->paginate(5);
        return view('frontend.index',[
            'banners'=>$banners,
            'categorys'=>$categorys,
            'reviews'=>$reviews,
            'experience'=>$experience,
            'clients'=>$clients,
            'stores'=>$stores,
            'videos'=>$videos,
            'footer_image'=>$footer_image,
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
