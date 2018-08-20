<?php

namespace App\Http\Controllers;

use App\Model\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Http\Resources\Article\ArticleCollection;
use App\Http\Resources\Article\ArticleResource;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api')->except('index','show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return Article::all();
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
    public function store(ArticleRequest $request)
    {
        $article = new Article;
        $article->name=$request->name;
        $article->description=$request->description;
        $article->price=$request->price;
        $article->save();
        return response([
            'date'=>new ArticleResource($article)
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return "something";
        return new ArticleResource($article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
