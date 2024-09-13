<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Advertise;
use App\Models\Admin\Blog;
use App\Models\Admin\Brand;
use App\Models\Admin\CompanyStory;
use App\Models\Admin\ImageGallery;
use App\Models\Admin\Product;
use App\Models\Admin\Slider;
use App\Models\Admin\Testimonial;
use App\Models\Banner;
use App\Models\Currency;
use App\Models\Language;
use App\Models\SeoSetting;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    public  function index()
    {
        if (file_exists(storage_path('installed'))) {
            if (!Session::has('currency')) {
                Session::put('currency', Setting::where('slug', 'default_currency')->first()->value ?? 'CAD');
            }
            $data['sliders'] = Slider::latest()->get();
            $data['banner'] = Banner::first();
            $data['promotion'] = Advertise::latest()->get();
            $data['blogs'] = Blog::with('tags')->latest()->get();
            $data['brands'] = Brand::latest()->get();
            $data['story'] = CompanyStory::latest()->get();
            $all_products = Product::with('category')->latest();
            $data['products'] = $all_products->where('Status', ACTIVE)->limit(allsetting('home_products_page'))->get();
            // dd($data['products']);
            $data['new_arrivals'] = Product::with('category')->where('New_Arrival', ACTIVE)->where('Status', ACTIVE)->get();
            $data['best_sellings'] = Product::with('category')->where('Best_Selling', ACTIVE)->where('Status', ACTIVE)->get();
            $data['on_sales'] = Product::with('category')->where('On_Sale', ACTIVE)->where('Status', ACTIVE)->get();
            $data['featured_products'] =Product::with('category')->where('Featured_Product', ACTIVE)->where('Status', ACTIVE)->get();
            $data['testimonial'] = Testimonial::get();
            $seo = SeoSetting::where('slug', 'home')->first();
            $data['title'] = $seo->title;
            $data['description'] = $seo->description;
            $data['keywords'] = $seo->keywords;
            return view('front.index', $data);
        } else {
            return redirect()->to('/install');
        }
    }
    public function theme_set(Request $request)
    {
        if (env('APP_DEMO') == true) {
            session(['theme' => $request->theme]);
        }
        return redirect()->route('front');
    }
    public function localeSwitch($locale)
    {
        $lang = Language::where('locale', $locale)->first();
        session(['APP_LOCALE' => $locale, 'lang_dir' => $lang->direction]);
        return redirect()->back();
    }
    public function currencySwitch($currency)
    {
        Session::put('currency', $currency);
        return redirect()->back();
    }
    public function sale(){
        $data['on_sales'] = Product::with('category')->where('On_Sale', ACTIVE)->where('Status', ACTIVE)->get();
        // @dd($data);
        return view('front.pages.sale' , $data);
    }
}
