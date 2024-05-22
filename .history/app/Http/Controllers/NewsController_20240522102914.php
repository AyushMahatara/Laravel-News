<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.news.create',  compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($request->category_id);
        $path = $request->file('image')->store('public/images');
        $url = Storage::url($path);
        $data['image'] = $url;
        $data['slug'] = Str::slug($request->title, '-');
        // $data['category_id'] = $request->category_id;
        News::create($data);
        return to_route('admin.news.index')->with('message', 'Category Created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        $categories = Category::all();

        return view('admin.news.edit', compact('news', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $data = $request->all();
        // dd($data);
        if ($request->file('image')) {
            $path = $request->file('image')->store('public/images');
            $url = Storage::url($path);
            $data['image'] = $url;
        }
        $data['slug'] = Str::slug($request->title, '-');
        $news->update($data);
        return to_route('admin.news.index')->with('message', 'News Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }
}
