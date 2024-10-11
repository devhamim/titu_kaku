<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Album;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Client;
use App\Models\ContectMessage;
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
        $categorys = Category::where('status', 1)->get();
        return view('frontend.gallery',[
            'categorys'=>$categorys,
        ]);
    }
    // contect
    function contect(){
        return view('frontend.contect');
    }

    // blogs
    function blogs(){
        $stores = Stores::where('status', 1)->get();
        return view('frontend.blog',[
            'stores'=>$stores,
        ]);
    }
    // stories_details
    function stories_details($slug){
        $stores = Stores::where('slug',$slug)->first();
        $galleryImages = json_decode($stores->gallery, true);
        return view('frontend.blog_details',[
            'stores'=>$stores,
            'galleryImages'=>$galleryImages,
        ]);
    }

    // our_videos
    function our_videos(){
        $videos = Video::where('status', 1)->latest()->get();
        return view('frontend.videos',[
            'videos'=>$videos,
        ]);
    }
    // albums
    function albums(Request $request){
        $category = $request->input('category');
        if ($category) {
            $albums = Album::where('category', $category)->paginate(20);
            $albums_count = Album::where('category', $category)->where('status', 1)->count();
        } else {
            $albums = Album::where('status', 1)->paginate(20);
            $albums_count = Album::where('status', 1)->count();
        }
    
        $categories = Album::select('category')->distinct()->get();
        
        return view('frontend.album',[
            'albums'=>$albums,
            'albums_count'=>$albums_count,
            'categories'=>$categories,
        ]);
    }
    // albums_details
    function albums_details($slug){
        $albums = Album::where('slug',$slug)->first();
        $galleryImages = json_decode($albums->gallery, true);
        return view('frontend.albumdtails',[
            'albums'=>$albums,
            'galleryImages'=>$galleryImages,
        ]);
    }
    // message_store
    function message_store(Request $request){
        $rules = [
            'name'=>'required|max:225',
            'email'=>'required|max:225',
            'number'=>'required|max:225',
            'subject'=>'required|max:225',
            'address'=>'required|max:225',
            'message'=>'required|max:1000',
        ];
        $validatesData = $request->validate($rules);

        $contectMessage = ContectMessage::create($validatesData);
        if($contectMessage){
            return back()->with('success', 'Create successfully.');
        }
        else{
            return back()->with('error', 'Failed to create.');
        }
    }
   

   //about_us
   function about_us(){
    $abouts = About::where('status', 1)->first();
    $clients = Client::where('status', 1)->get();
    $videos = Video::where('status', 1)->first();
    $experience = Experience::first();
    return view('frontend.about',[
        'abouts'=>$abouts,
        'clients'=>$clients,
        'videos'=>$videos,
        'experience'=>$experience,
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
