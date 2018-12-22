<?php

namespace App\Http\Controllers;

use App\Services\ArticleService;
use Illuminate\Http\Request;
use App\Models\ArticleModel;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feed = new ArticleService();

        return view('pages.home', [
            'feed' => ArticleModel::where('category', '=', 'uk')->orderByDesc('publishedAt')->distinct('title')->get(),
            'editorial' => ArticleModel::where('category', '=', 'editorial')->orderByDesc('publishedAt')->distinct('title')->get(),
            'event' => ArticleModel::where('category', '=', 'event')->orderByDesc('publishedAt')->distinct('title')->get(),
            'latest' => ArticleModel::where('category', '=', 'latest')->orderByDesc('publishedAt')->distinct('title')->get(),
            'world' => ArticleModel::where('category', '=', 'world')->orderByDesc('publishedAt')->distinct('title')->get(),
        ]);
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
        //
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
