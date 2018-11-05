<?php

namespace App\Http\Controllers;

use App\UserMessage;
use Illuminate\Http\Request;

class UserMessageController extends Controller
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
        
        $message = new UserMessage;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->contact = $request->contact;
        $message->message = $request->message;
        $message->save();

        return redirect('/contact-us')->with('success', 'Thank you for your Message. We will get back to you soon!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserMessage  $userMessage
     * @return \Illuminate\Http\Response
     */
    public function show(UserMessage $userMessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserMessage  $userMessage
     * @return \Illuminate\Http\Response
     */
    public function edit(UserMessage $userMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserMessage  $userMessage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserMessage $userMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserMessage  $userMessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserMessage $userMessage)
    {
        $userMessage->delete();
        return redirect(route('message'))->with('success', 'Message Deleted!');

    }
}
