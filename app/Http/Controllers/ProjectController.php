<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
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
            'name' => 'required',
            'p_date' => 'required',
            'detail' => 'required',
            'image' => 'image|max:2000|mimes:jpg,png,jpeg,bmp,svg',
            'client' => 'required',
            'location' => 'required',
            'value' => 'required',
        ]);

        $project = new Project;
        $project->name = $request->name;
        $project->p_date = $request->p_date;
        $project->detail = $request->detail;
        $project->client = $request->client;
        $project->location = $request->location;
        $project->value = $request->value;

        if($request->hasFile('image')){
            $logo = $request->file('image');
            $logo_ext = $logo->getClientOriginalExtension();
            $new_logo_name = rand(123456,999999).".".$logo_ext;
            $destination_path = public_path('/assets/images/our-project');
            $logo->move($destination_path, $new_logo_name);
        }else{
            return back()->with('error', 'Please Choose a Logo image!'); 
        }
        $project->image = $new_logo_name;

        $project->save();

        return redirect('/admin/add-project')->with('success', 'New Project Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::where('id', $id)->first();
        unlink(public_path().'/assets/images/our-project/'.$project->image);
        $project->delete();
        return redirect('/admin/all-project')->with('success', 'Project Deleted!');

    }
}
