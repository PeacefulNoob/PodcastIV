<?php

namespace App\Http\Controllers;

use App\Epizoda;
use App\Sezona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use DB;
use Validator;
use Intervention\Image\Facades\Image;


class EpizodaController extends Controller
{
    public function __construct() {
        $this->middleware('admin')->except('show');
    }
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
        $sezone= Sezona::all();
        return view('admin.create_episode', compact('sezone'));
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
            'sezona_id' => 'required',
            'brojEpizode' => 'required',
            'sc_url' => 'required',
            'description' => 'required',
            'image' => 'mimes:mp4,mov,ogg,jpeg,png,jpg,svg'

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }


          $url = $request->input('yt_url');


       // Handle File Upload
        if ($request->hasFile('image')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
             Image::make($request->file('image'))->resize(500, null, function($constraint) {  $constraint->aspectRatio();}) ->save('assets/images/epizoda/'.$fileNameToStore);
                }  elseif(rurl) {
            $fileNameToStore = "https://img.youtube.com/vi/" . $url . "/maxresdefault.jpg";
                }else{
                    $fileNameToStore = "NemaSlike"; 
                }
        



        // Create ad
        $epizoda = new Epizoda;
        $epizoda->title = $request->input('title');
        $epizoda->sezona_id = $request->input('sezona_id');
        $epizoda->description = $request->input('description');
        $epizoda->yt_url = $url;
        $epizoda->sc_url = $request->input('sc_url');
        $epizoda->brojEpizode = $request->input('brojEpizode');
        $epizoda->guest1 = $request->input('gostEpizode');      
        $epizoda->image = $fileNameToStore;
        $epizoda->user_id = auth()->user()->id;
        $epizoda->save();


        return redirect()->back()->withSuccess('Kreirali ste novu epizodu');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Epizoda  $epizoda
     * @return \Illuminate\Http\Response
     */
    public function show(Epizoda $epizoda)
    {
        $epizode=Epizoda::orderBy('created_at', 'DESC')->get();

        $sezone= Sezona::all();
        $epizoda= Epizoda::findOrFail($epizoda->id);
        return view('site.podcast_info', compact('epizoda','sezone','epizode'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Epizoda  $epizoda
     * @return \Illuminate\Http\Response
     */
    public function edit(Epizoda $epizoda)
    {
        $sezone= Sezona::all();

        $epizoda= Epizoda::findOrFail($epizoda->id);
        return view('admin.edit_episode', compact('epizoda','sezone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Epizoda  $epizoda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Epizoda $epizoda)
    {
       
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'sc_url' => 'required',
            'description' => 'required',
            'sezona_id' => 'required',
            'image' => 'mimes:mp4,mov,ogg,jpeg,png,jpg,svg|max:1999'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        // Handle File Upload
        if ($request->hasFile('image')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            Image::make($request->file('image'))->resize(500, null, function($constraint) {  $constraint->aspectRatio();}) ->save('assets/images/epizoda/'.$fileNameToStore);

                } else {
            $fileNameToStore = $epizoda->image;
        }

        DB::table('epizodas')->where('id', $epizoda->id)->update([
            'title' => $request->title,
            'yt_url' => $request->yt_url,
            'sc_url' => $request->sc_url,
            'brojEpizode' => $request->brojEpizode,
            'guest1' => $request->gostEpizode,   
            'sezona_id' => $request->sezona_id,
            'description' => $request->description,
            'image' => $fileNameToStore,
        ]);
        


        return redirect()->back()->withSuccess('Uspješno ste ažurirali epizodu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Epizoda  $epizoda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Epizoda $epizoda)
    {
        $epizoda = Epizoda::find($epizoda->id);
        $epizoda->delete();
        return redirect()->back()->with('success', 'Brisanje uspješno');
    }
}
