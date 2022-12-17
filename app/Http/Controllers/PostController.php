<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tag = Tag::first();

        // $posts = Post::first();
        // $posts = Post::with('tags')->first();

        // $posts->tags()->attach([2, 3, 4]);

        // dd($post);

        $posts = Post::with(['categories', 'tags'])->get();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('posts.create', compact(['categories', 'tags']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'body' => 'required'
        ]);

        $post = Post::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
        ]);

        $post->categories()->attach($request->categories);
        $post->tags()->attach($request->tags);

        return redirect()->route('posts.index');
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
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('posts.edit', compact(['post' ,'categories', 'tags']));
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
        dd($request);

        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'body' => 'required'
        ]);

        $post = Post::findOrFail($id);
        $post->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
        ]);

        $post->categories()->sync($request->categories);
        $post->tags()->sync($request->tags);

        return redirect()->route('posts.index');
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
