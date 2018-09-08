<?php

namespace App\Http\Controllers;

use App\Post;
use App\Service;
use Illuminate\Http\Request;
use Spatie\Sitemap\SitemapGenerator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user/home');
    }

    public function home() {
        $posts = Post::orderBy('created_at','desc')->take(10)->get();
        $services = Service::all();

        //SitemapGenerator::create('http://alhamdmovers.com')->writeToFile(public_path('sitemap.xml'));
        return view('user/home', compact('posts', 'services'));
    }
}
