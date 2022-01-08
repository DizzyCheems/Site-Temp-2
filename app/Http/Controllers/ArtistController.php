<?php

namespace App\Http\Controllers;

use App\Models\artist;
use App\Models\Song;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.client_musiclibrary');
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

    public function members()
    {
        //
        return view('pages.client_artistlisting');
    }


    public function genre_drumstep()
    {
        //
        return view('pages.filter.drumstep');
    }


    public function genre_orchestral()
    {
        //
        return view('pages.filter.orchestral');
    }


    public function genre_kawaii()
    {
        //
        return view('pages.filter.kawaii');
    }


         /**
     * Display the specified resource.
     *
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function showartistprofile(artist $artist , $id)
    {
        //
                //
                $data=artist::find($id);
                return view ('pages.admin_artist_PROFILE', ['artist'=>$data]);
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function play_song()
    {
        //
        return view('pages.client_songplayer');
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
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show_musiclist(Song $data)
    {
  
        //
        $data= Song::all();
         return view ('pages.client_musiclibrary', ['song'=>$data]);
    }


        /**
     * Display the specified resource.
     *
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show_artists(artist $artist)
    {
        //
        $data= artist::all();
         return view ('pages.client_artistlisting', ['artists'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit(artist $artist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, artist $artist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy(artist $artist)
    {
        //
    }
}
