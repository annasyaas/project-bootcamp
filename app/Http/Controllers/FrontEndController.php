<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\PostCategory;
use App\Post;
use App\User;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $posts = Post::orderBy('created_at','desc')->paginate(4);
        $new_posts = Post::orderBy('created_at','desc')->first();
        $users = User::all()->first();

        return view('frontend.index', compact(
            'categories', 
            'posts',
            'users',
            'new_posts'
        ));
    }

    /**
     * Display a listing of the resource category.
     *
     * @return \Illuminate\Http\Response
     */
    public function category($id)
    {
        $categories = Category::all();
        $posts = Post::all();
        $new_posts = Post::orderBy('created_at','desc')->paginate(3);
        $search_ctg = Category::where('id', $id)->first();
        $search_posts = PostCategory::where('category_id',$id)->get();

        return view('frontend.category', compact(
            'categories', 
            'posts',
            'new_posts', 
            'search_ctg',
            'search_posts'
        ));
    }

    /**
     * Display a listing of the search resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $categories = Category::all();
        if($request == NULL){
            $posts = Post::all();
        } else {
            $search_posts = Post::where('title','like','%'.$request->title.'%')->get();
        }
        $new_posts = Post::orderBy('created_at','desc')->paginate(3);

        return view('frontend.search', compact('categories','new_posts', 'posts','search_posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::all();
        $new_posts = Post::orderBy('created_at','desc')->paginate(3);
        $posts = Post::all();
        $search_ctg = Category::where('id', $id)->first();
        $search_posts = Post::where('id',$id)->first();
        $temp = PostCategory::where('post_id',$id)->get();

        return view('frontend.detail', compact('temp','categories', 'new_posts','posts','search_posts','search_ctg'));        
    }
}
