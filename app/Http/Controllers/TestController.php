<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Article;
use App\User;
use App\Country;

class TestController extends Controller
{
    // public function show(){
    // 	if (view()->exists('test')) {
    // 		$articles  = DB::select("SELECT * FROM `articles`");
    // 		// dump($articles);
    // 		// DB::insert("INSERT INTO `articles` (`name`, `text`, `img`) VALUES (?,?,?)", ['name blog', ' No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage fr', 'img.jpg']);
    // 		return view('test')->with('articles', $articles);
    // 	}
    // }

    public function getAticles(){
    	// $articles = DB::table('articles')->get();
    	// Article::create([    			
    	// 			'name'=>"name blog 1",
    	// 			'text'=>"text some 1",
    	// 			'img'=>"some.jpg"    			
    	// 	]);

    	$user = User::find('2');

    	// $country = Country::find('1');

    	// $articles = Article::all();

    	$article = Article::find('25');

    	// foreach ($articles as $article) {
    	// 	 echo $article->text . '<br>';
    	// }
    	dump($article->user->name);
    	// dump($country->user);
    	// dump($user->articles);
    	$articles = $user->articles;

    	return view('test')->with('articles', $articles);
    }

    public function addAticles(){
    	return view('create');
    }
}
