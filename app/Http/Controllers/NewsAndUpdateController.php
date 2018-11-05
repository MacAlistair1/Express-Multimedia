<?php

namespace App\Http\Controllers;

use DateTime;
use App\NewsAndUpdate;
use Illuminate\Http\Request;

class NewsAndUpdateController extends Controller
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
        $this->validate($request, [
            'title' => 'required',
            'detail' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

        $news = new NewsAndUpdate;

        
        if($request->hasFile('image')){
            $logo = $request->file('image');
            $logo_ext = $logo->getClientOriginalExtension();
            $new_logo_name = rand(123456,999999).".".$logo_ext;
            $destination_path = public_path('/assets/images/news');
            $logo->move($destination_path, $new_logo_name);
        }else{
            return back()->with('error', 'Please Choose an image!'); 
        }
        $news->image = $new_logo_name;
        $news->title = $request->title;
        $news->detail = $request->detail;
        $news->publish_date = new DateTime(date('Y-m-d'));
        $news->save();

        return redirect('/admin/add-news')->with('success', 'News Added!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewsAndUpdate  $newsAndUpdate
     * @return \Illuminate\Http\Response
     */
    public function show(NewsAndUpdate $newsAndUpdate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewsAndUpdate  $newsAndUpdate
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsAndUpdate $newsAndUpdate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewsAndUpdate  $newsAndUpdate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsAndUpdate $newsAndUpdate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewsAndUpdate  $newsAndUpdate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = NewsAndUpdate::where('id', $id)->first();
        
        unlink(public_path().'/assets/images/news/'.$news->image);
        $news->delete();
        return redirect('/admin/all-news')->with('success', 'News Deleted!');

    }
}
