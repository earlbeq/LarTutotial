<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    public function index(){
    	//showing articles
    	// $articles = Article::all(); //To get all data
    	$articles = Article::paginate(2); // For Pagination of the data
    	return view('blog')->with('articles', $articles);
    }

    public function store(Request $request){
    	// $article = new Article;
    	// $article->title = $request->input('title');
    	// $article->content = $request->input('content');
    	// $article->save();

    	Article::create(['title' => $request->title, 'content' => $request->content]);

    	echo "Succesfully Added!";
    }

    public function create(){
    	return view('addform');
    }

    public function show($id){
    	$article = Article::find($id);

    	return view('show')->with("article", $article);
    }

    public function edit($id){
    	$article = Article::find($id);

    	return view('editform')->with("article", $article);
    }

    public function update(Request $request, $id){
    	$article = Article::find($id);
    	$article->title = $request->title;
    	$article->content = $request->content;
    	$article->save();

    	echo "Succesfully Updated!";
    }

    public function destroy($id){
    	
    	//OPtion1 tot delete
    	// Article::destroy($id);

    	// Opion2 to delete
    	$article = Article::find($id);
    	$article->delete();



    	echo "Succesfully Deleted!";
    }
}
