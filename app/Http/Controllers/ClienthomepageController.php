<?php

namespace App\Http\Controllers;

use App\Models\clienthomepage;
use App\Models\concerns;
use App\Models\contacts;
use Illuminate\Http\Request;

class ClienthomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view ('pages.client_landingpage');
    }


        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function info()
    {
        //
        return view ('pages.client_aboutuspage');
    }

           /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        //
        return view ('pages.client_contact');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function prospect(Request $request)
    {
        //
        //
        $message=[
            'required' => 'This credential field is required!'
        ];
        $request->validate([
            'name'=>'required',
            'num'=>'required',
            'mail'=>'required|email',
            'subject'=>'required',
            'message'=>'required'

        ],$message);
        concerns::create($request->all());
        return redirect()->route('client_contactinfo')
                        ->with('success', 'Your Message has been sent.');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',
            'number'=>'required',
            'email'=> 'required|mail',
            'message'=>'required'

        ]);
        if ($this->isOnline()){
            $mail_data = [
                'recipient'=>'spiralsmoke903@gmail.com',
                'fromEmail'=> $request->email,
                'fromName'=>$request->name,
                'phonenumber'=>$request->number,
                'subject'=>$request->subject,
                'body'=>$request->message
            ];
            \Mail::send('emails.welcome', $mail_data, function($message) use ($mail_data){
                $message->to($mail_data['recipient'])
                        ->from($mail_data['fromEmail'], $mail_data['fromName'])
                        ->subject($mail_data['subject']);

        });
        return redirect()-> back()->with('success', 'Email Sent!');
    }
        else{
            return redirect()->back()->withInput()->with('error', 'Check your internet connection');
        }

    }

    public function isOnline($site = "http://127.0.0.1:8000/Tentacit/Home")
{
    if (@fopen($site, "r")){
        return true;
    }else{
        return false;
    }
}
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clienthomepage  $clienthomepage
     * @return \Illuminate\Http\Response
     */
    public function show(clienthomepage $clienthomepage)
    {
        //  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clienthomepage  $clienthomepage
     * @return \Illuminate\Http\Response
     */
    public function edit(clienthomepage $clienthomepage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clienthomepage  $clienthomepage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clienthomepage $clienthomepage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clienthomepage  $clienthomepage
     * @return \Illuminate\Http\Response
     */
    public function destroy(clienthomepage $clienthomepage)
    {
        //
    }
}
