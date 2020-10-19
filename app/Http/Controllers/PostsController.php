<?php

namespace App\Http\Controllers;

use App\Sezona;
use App\Epizoda;

use Illuminate\Http\Request;
use App\Post;
use App\Categories_post;
use App\User;
use Validator;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function __construct() {
        $this->middleware('admin')->except(['show','index']);
    }
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all()->sortByDesc('created_at');
        $users = User::all();
        $epizode= Epizoda::all();

    return view('posts.blog_grid' , compact("posts","users","epizode"));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Categories_post::all();
        return view('admin.ad_blog', compact('categories'));
        
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
        'body' => 'required',
        'cover_image' => 'mimes:mp4,mov,ogg,jpeg,png,jpg,svg'
    ]);

    if ($validator->fails()) {
        return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
    }
    

        // Handle File Upload
        if ($request->hasFile('cover_image')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            Image::make($request->file('cover_image'))->resize(500, null, function($constraint) {  $constraint->aspectRatio();}) ->save('assets/images/post_images/'.$fileNameToStore);

                } else {
            $fileNameToStore = 'noimage.jpg';
        }

        // Create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->cat_id = $request->input('cat_id');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;
    
        $post->save();
      return redirect('/admin/post/showUserBlogs/1')->withSuccess('Kreirali ste Blog objavu');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post = Post::findOrFail($post->id);
        $categories = Categories_post::all();
        $posts = Post::all();
        $sezone= Sezona::all();
        $epizode= Epizoda::all();

    return view('posts.blog_details', compact('post','categories','posts','sezone','epizode'));
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Categories_post::all();

        //Check if post exists before 
        if (!isset($post)) {
            return redirect('/')->with('error', 'No Post Found');
        }

        // Check for correct user
        if (auth()->user()->id !== $post->user_id) {
            return redirect('/')->with('error', 'Unauthorized Page');
        }

        return view('admin.edit_post',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
               
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'mimes:mp4,mov,ogg,jpeg,png,jpg,svg'
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        

        
        // Handle File Upload
        if ($request->hasFile('cover_image')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            Image::make($request->file('cover_image'))->resize(500, null, function($constraint) {  $constraint->aspectRatio();}) ->save('assets/images/post_images/'.$fileNameToStore);
            // Delete file if exists
            Storage::delete('images/post_images' . $post->cover_image);

        }else{
            $fileNameToStore = $post->cover_image;
        }

        // Update Post
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->cat_id = $request->input('cat_id');
        if ($request->hasFile('cover_image')) {
            $post->cover_image = $fileNameToStore;
        }
        $post->save();

        return redirect()->back()->withSuccess('Uspješno ste ažurirali Blog objavu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        if (!isset($post)) {
            return redirect('/post')->with('error', 'No Post Found');
        }

        if (auth()->user()->id !== $post->user_id) {
            return redirect('/post')->with('error', 'Unauthorized Page');
        }

        if ($post->cover_image != 'noimage.jpg') {
            Storage::delete('public/assets/images/post_images/' . $post->cover_image);
        }

        $post->delete();
        return redirect('/post')->with('success', 'Post Removed');
    }
    public function showUserBlogs($id)
    {
         $user = User::with('posts')->find($id);
         return view('admin.myblogs', ['posts' => $user->posts]);
        

    }
}
