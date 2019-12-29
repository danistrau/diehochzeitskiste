<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::with('user')->paginate(10);

      
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = new Blog;

        return view('blogs.create', compact('blog'));
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

            'title' => 'required|string|min:3|max:192',
            'text' => 'required|string|between:2,140',
            
        ]);

        $blog = new Blog();
        $blog->fill($request->all());
        $blog->is_published = $request->has('is_published');
        $blog->user_id = auth()->id();
        $blog->save();

        return redirect()->route('blogs.show', $blog->id)->with('success', 'Blog created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)

    {


        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {

        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $this->validate($request, [

            'title' => 'required|string|min:3|max:192',
            'text' => 'required|string|between:2,140',
        ]);

        $blog->fill($request->all());
        $blog->is_published = $request->has('is_published');
        $blog->save();

        return redirect()->route('blogs.show', $blog->id)->with('success', 'Blog updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
       
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted!');
    }
}
