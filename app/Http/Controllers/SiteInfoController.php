<?php

namespace App\Http\Controllers;

use App\SiteInfo;
use Illuminate\Http\Request;

class SiteInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SiteInfo  $siteInfo
     * @return \Illuminate\Http\Response
     */
    public function show(SiteInfo $siteInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SiteInfo  $siteInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteInfo $siteInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SiteInfo  $siteInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'site_name' => 'required',
            'address' => 'required',
            'email' => 'required',
            'tel' => 'required',
            'about_us' => 'required',
            'map_url' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg,bmp,svg|max:2000',
        ]);

        $site = SiteInfo::where('id', $id)->first();
        $site->site_name = $request->site_name;
        $site->address = $request->address;
        $site->email = $request->email;
        $site->tel = $request->tel;
        $site->about_us = $request->about_us;
        $site->map_url = $request->map_url;
        $site->fb_url = $request->fb_url;
        $site->twitter_url = $request->twitter_url;
        $site->insta_url = $request->insta_url;
        $site->gplus_url = $request->gplus_url;

        if($request->logo != null){
        
            if($site->logo != null){
                unlink(public_path().'/assets/images/'.$site->logo);
            }

        if($request->hasFile('logo')){
            $logo = $request->file('logo');
            $logo_ext = $logo->getClientOriginalExtension();
            $new_logo_name = rand(123456,999999).".".$logo_ext;
            $destination_path = public_path('/assets/images');
            $logo->move($destination_path, $new_logo_name);
        }else{
            return back()->with('error', 'Please Choose a Logo image!'); 
        }
        $site->logo = $new_logo_name;
    }

        $site->save();

        return redirect('/admin/update-site-info')->with('success', 'Site Info Changed!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SiteInfo  $siteInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteInfo $siteInfo)
    {
        //
    }
}
