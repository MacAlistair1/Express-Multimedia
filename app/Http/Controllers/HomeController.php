<?php

namespace App\Http\Controllers;

use Session;
use App\Project;
use App\Service;
use App\SiteInfo;
use App\NewsAndUpdate;

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
    } */

    public function infos(){
        $siteinfo = SiteInfo::first(); 

        Session::flash('name', $siteinfo->name);
        Session::flash('logo', $siteinfo->logo);
        Session::flash('address', $siteinfo->address);
        Session::flash('tel', $siteinfo->tel);
        Session::flash('email', $siteinfo->email);
        Session::flash('map', $siteinfo->map_url);
        Session::flash('fb', $siteinfo->fb_url);
        Session::flash('twitter', $siteinfo->twitter_url);
        Session::flash('insta', $siteinfo->insta_url);
        Session::flash('gplus', $siteinfo->gplus_url);
        Session::flash('about', $siteinfo->about_us);
        
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->infos();

        $title = "EM | Home";
        $services = Service::orderBy('id', 'asc')->get(); 
        $newsupdates = NewsAndUpdate::orderBy('id', 'asc')->get(); 
        return view('home')->with(['title' => $title,
                                   'services' => $services,
                                   'newsupdates' => $newsupdates
                                            ]);
    }

    public function contact()
    {
        $this->infos();

        $title = "EM | Contact Us";

        return view('pages.contact')->with('title', $title);
    }

    public function gallery()
    {
        $this->infos();

        $title = "EM | Gallery";
        $projects = Project::orderBy('p_date', 'asc')->get();
        return view('pages.gallery')->with(['title' => $title, 'projects' => $projects]);
    }

    public function about()
    {
        $this->infos();
        $title = "EM | About Us";

        return view('pages.about')->with('title' , $title);
    }

    public function service()
    {
        $this->infos();

        $title = "EM | Our Services";
        $services = Service::orderBy('id', 'asc')->get(); 
        return view('pages.services')->with(['title' => $title, 'services' => $services]);
    }
}
