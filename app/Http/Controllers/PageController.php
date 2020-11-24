<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Package;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $packages = Package::get();
        
        View::share('packages', $packages);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.index');
    }
    
    public function about()
    {
        return view('frontend.about');
    }
    
    public function packages()
    {
        return view('frontend.packages');
    }
    
    public function faq()
    {
        return view('frontend.faq');
    }
    
    
    public function contact()
    {
        return view('frontend.contact');
    }
}
