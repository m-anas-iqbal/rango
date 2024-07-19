<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function singlePage($slug)
    {
        $page = Page::where('slug', $slug)->first();
        if(!is_null($page)) {
            $data['page'] = $page;
            $data['title'] = $page->en_title;
            $data['description'] = $page->en_title;
            $data['keywords'] = $page->en_title;
            return view('front.pages.page.index', $data);
        }
        return abort(404);
    }
    public function safety(){
        return view('front.pages.safety');
    }
    public function terms(){
        return view('front.pages.terms-and-conditions');
    }
    public function privacy(){
        return view('front.pages.privacy-policy');
    }
}
