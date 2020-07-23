<?php

namespace App\Http\Controllers;

use App\Sezona;
use App\Epizoda;
use Illuminate\Http\Request;
use Validator;
use DB;
use App\Post;


class SezonaController extends Controller
{
    public function __construct() {
        $this->middleware('admin')->except(['show','index','podcast']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sezone= Sezona::all();
        $epizode=Epizoda::orderBy('created_at', 'DESC')->get();
        $posts= Post::all();
        return view('site.index', compact('sezone','epizode','posts'));
    }
    public function podcast()
    {
        $sezone= Sezona::all();
        $epizode= Epizoda::all();

        return view('site.podcast', compact('sezone','epizode'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $sezone= Sezona::all();
         return view('admin.create_season', compact('sezone'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required'
           

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        
        // Create sezona
        $sezona = new Sezona;
        $sezona->title = $request->input('title');
        $sezona->description = $request->input('description');
        $sezona->user_id = auth()->user()->id;

        $sezona->save();

        return redirect()->back()->withSuccess('Kreirali ste novu sezonu');

         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sezona  $sezona
     * @return \Illuminate\Http\Response
     */
    public function show(Sezona $sezona)
    {
        $sezona= Sezona::findOrFail($sezona->id);
        $epizode =  DB::table('epizodas')->where('sezona_id', '=', $sezona->id)->get();

        return view('site.all_ep', compact('sezona','epizode'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sezona  $sezona
     * @return \Illuminate\Http\Response
     */
    public function edit(Sezona $sezona)
    {
        $sezona= Sezona::findOrFail($sezona->id);
        return view('admin.edit_season', compact('sezona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sezona  $sezona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sezona $sezona)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
     
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

   

        DB::table('sezonas')->where('id', $sezona->id)->update([
            'title' => $request->title,
            'description' => $request->description,
          
        ]);
        


        return redirect()->back()->withSuccess('Uspješno ste ažurirali sezonu');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sezona  $sezona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sezona $sezona)
    {
        $sezona = Sezona::find($sezona->id);
        $sezona->delete();
        return redirect()->back()->with('success', 'Brisanje uspješno');
    }
}
