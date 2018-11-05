<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Project;
use App\SiteInfo;
use App\UserMessage;
use App\NewsAndUpdate;

class AdminPanelController extends Controller
{
    public function index(){
        return view('adminpanel');
    }
    public function dashboard(){
        $title = "EM | Dashboard";
        return view('admin-pages.dashboard')->with('title', $title);
    }

    public function message(){
        $title = "EM | Messages";
        $messages = UserMessage::orderBy('created_at', 'asc')->get();
        return view('admin-pages.usermessage')->with(['title' => $title, 'messages' => $messages]);
    }

    public function siteinfo(){
        $title = "EM | Site Details";
        $site = SiteInfo::first();
        return view('admin-pages.updatesite')->with(['title' => $title, 'site' => $site]);
    }

    public function addnews(){
        $title = "EM | News & Update";
        return view('admin-pages.add-news')->with('title', $title);
    }

    public function allnews(){
        $title = "EM | News & Update";
        $news = NewsAndUpdate::orderBy('publish_date', 'asc')->paginate(5);
        return view('admin-pages.manage-news')->with(['title' => $title, 'news' => $news]);
    }

    
    public function addproject(){
        $title = "EM | New Project";
        return view('admin-pages.add-project')->with('title', $title);
    }

    public function allproject(){
        $title = "EM | All Projects";
        $projects = Project::orderBy('p_date', 'asc')->paginate(5);
        return view('admin-pages.manage-project')->with(['title' => $title, 'projects' => $projects]);
    }

}
