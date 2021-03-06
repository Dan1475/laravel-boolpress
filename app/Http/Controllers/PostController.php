<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\requests\PostRequest;

use App\Post;
use App\Category;
use App\Author;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $authors = Author::all();
        $posts = Post::take(5)->latest()->get();

        return view('pages.home', compact( 'authors','categories','posts'));

          }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

          $categories= Category::all();

          return view('pages.create-post', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $post = $request-> validate([
          'title' => 'required',
          'content' => 'required'
        ]);

        $post  = Post::create($post);
        $post->categories()->attach($request['categories']);


      return redirect('/')
         ->with('success', 'New post was saved: ' . $post ->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $category = Category::all();
        return view('pages.show-post', compact('post', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('pages.edit-post', compact('post', 'categories'));
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
        // $validateData = $request->validated();
        // Post::whereId($id)->update($validateData);


       $post = $request-> validate([
           'title' => 'required',
           'content' => 'required'
         ]);
      // dd($request->all());
        Post::whereId($id)->update($post);
        Post::findOrFail($id)->categories()->sync($request['categories']);


        return redirect('/');
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


    function search(Request $request){

      $title = $request -> title;
      $content = $request -> content;
      $category = $request-> category;
      $author = $request-> author;

      $query = Post::query();
      if ($title) {
        $query = $query ->where('title', 'LIKE', '%' . $title . '%');
      }
      if ($content) {
        $query = $query ->where('content', 'LIKE', '%' . $content . '%');
      }
      if ($author) {
        $query = $query ->where('author_id', $author);
      }

      $posts = $query ->get();

      $categories = Category::all();
      $authors = Author::all();

      return view('pages.home', compact( 'authors','categories','posts'));


    }
}
