<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'title' => ['required', 'max:255'],
        'content' => ['required', 'string'],
      ]);

      $post = new Post();

      if ($request->hasFile('picture')) {
        $file = $request->file('picture');
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();
        $fileLocation = ('pictures/' . $filename);
        $storagePath = storage_path('app/public/pictures');
        $file->move($storagePath, $filename);
        $post->picture = $fileLocation;
    }

      $post->title = $request->input('title');
      $post->content = $request->input('content');
      $post->player_id = $request->input('player_id');
      $post->save();
    
      return redirect()->intended('/home')->with('success', 'Post created successfully');
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
        $post = Post::find($id);
        $comments = Comment::where('post_id', $id)->get();
        return view('posts.show', ['post' => $post, 'comments' => $comments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post = Post::find($id);
      return view('posts.edit', ['post' => $post]);
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
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
    
        $post = Post::find($id);

        if ($request->hasFile('picture')) {
          $file = $request->file('picture');
          $filename = uniqid() . '.' . $file->getClientOriginalExtension();
          $fileLocation = ('pictures/' . $filename);
          $storagePath = storage_path('app/public/pictures');
          $file->move($storagePath, $filename);
          $post->picture = $fileLocation;
      }
      
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
    
        return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
    }
}
