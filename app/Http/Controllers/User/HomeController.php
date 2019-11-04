<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Model\user\category;
use App\Model\user\tag;
use App\Model\user\post;
use App\Http\Controllers\Controller;
use Theme;

class HomeController extends Controller
{
    //
    public function index()
    {
    	//$posts = post::where('status',1)->get();
    	$posts = post::where('status',1)->orderBy('created_at','DESC')->paginate(5);
    	return Theme::view('blog',compact('posts'));
    }

    //for tag anchor
    public function tag(tag $tag)
    {
    	$posts = $tag->posts();
    	return Theme::view('blog',compact('posts'));
    }

    //category anchor
    public function category(category $category)
    {
    	$posts = $category->posts();
    	return Theme::view('blog',compact('posts'));
    }
}
