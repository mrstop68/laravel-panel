<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sliders;
use App\Blogs;
use App\Pages;
use App\Corparate;
use App\Gallerys;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\DB;

class defaultController extends Controller
{
    //
    public function index()
    {
        $data['blog'] = Blogs::all()->where('status', 1)->sortBy('must')->take(3);
        $data['slider'] = Sliders::all()->where('status', 1)->sortBy('must');
        $data['count'] = Sliders::all()->where('status', 1)->count();
        $corparate = Corparate::all()->where('status', 1)->first();
        //dd($data);
        return view('website.default.index', compact('data', 'corparate'));
    }
    public function blog()
    {
        $blogs = Blogs::where('status', '1')->orderBy('must')->paginate(6);

        // $blogs = Blogs::simplePaginate(6)->where('status', 1)->sortBy('must');
        return view('website.blog.blog', compact('blogs'));
    }
    public function detail($detail)
    {
        $data = Blogs::where('slug', $detail)->first();
        $lastBlog = Blogs::all()->where('status', 1)->sortBy('must')->take(6);
        //dd($data);
        return view('website.blog.detail', compact('data', 'lastBlog'));
    }
    public function page($page)
    {

        $data = Pages::where('slug', $page)->first();
        $imagesPage = Gallerys::where('page', $data->slug)->get()->sortBy('must');
        //dd($imagesPage);
        return view('website.pages.page', compact('data', 'imagesPage'));
    }
}
