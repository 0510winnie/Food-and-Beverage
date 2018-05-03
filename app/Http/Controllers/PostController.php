<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id','desc')->paginate(5);
        return view('manage.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.posts.create');
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
          'cover_image'=> [
            'required',
            'mimes:jpeg,bmp,png',
            'max:1999',
          ],
          'title' => 'required|max:255',
          'slug'=>'required|alpha_dash|min:5|max:255|unique:posts,slug',
          'content'=> 'required|min:10',
        ]);

        // Handle File Name
        $originalFileName = $request->file('cover_image')->getClientOriginalName();
        $extentsion = $request->file('cover_image')->getClientOriginalExtension();
        $fileNameToStore = $originalFileName.'_'.time().$extentsion;
        // Upload Image
        $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        // file will be uploaded in storage/public folder which is inaccessible through browser
        // so we cannot upload image, thus we need to create symbolic link (php artisan 
        // storage:link) so it will create a storage folder in public folder 
        // and browser can find img in public/storage since whatever we put in storage it will show up
        // in public as well

        // Create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->content = $request->input('content');
        $post->cover_image = $fileNameToStore;
        $post->save();

        return redirect('/manage/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('manage.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
