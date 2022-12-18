<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Page;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::orderBy('id', 'desc')->with(['categories', 'tags'])->get();

        return view('pages.index', compact('pages'));
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

        return view('pages.create', compact(['categories', 'tags']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required',
            'categories' => 'required',
            'tags' => 'required',
        ]);

        $page = Page::create([
            'title' => $request->title,
            'slug' => str()->slug($request->title),
            'body' => $request->body,
            'user_id' => Auth::user()->id,
        ]);

        $page->categories()->attach($request->categories);
        $page->tags()->attach($request->tags);

        return redirect()->route('pages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = Page::findOrFail($id);

        return view('pages.show', compact(['page']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('pages.edit', compact(['page' ,'categories', 'tags']));
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
        $request->validate([
            'title' => 'required|string|max:255',
            // 'slug' => 'required|string|max:255',
            'body' => 'required',
            'categories' => 'required',
            'tags' => 'required',
        ]);

        $page = Page::findOrFail($id);
        $page->update([
            'title' => $request->title,
            'slug' => str()->slug($request->title),
            'body' => $request->body,
        ]);

        $page->categories()->sync($request->categories);
        $page->tags()->sync($request->tags);

        return redirect()->route('pages.index');
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
