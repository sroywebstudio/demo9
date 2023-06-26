<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::with('postCategory')->paginate(8);
        
        return view('post.index', [
            'posts' => $posts
        ]);
    }


    public function create()
    {
        $categories = PostCategory::where('status', 1)->get();

        return view('post.create', [
            'categories' => $categories
        ]);
    }


    public function store(PostRequest $request)
    {
        $imageName = time(). '.' .$request->image->extension();
        $request->image->move('storage/post', $imageName);

        $post = new Post();

        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->post_category_id = $request->category;
        $post->status = $request->status;
        $post->image = 'post/'.$imageName;

        $post->save();
        return redirect()->route('admin.post.index')->with('post-status', 'Post Created');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
