<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use App\Http\Requests\PostCategoryRequest;

class PostCategoryController extends Controller
{
    public function index()
    {
        $categories = PostCategory::paginate(8);

        return view('postCategory.index', [
            'categories' => $categories
        ]);
    }

    public function show($id)
    {
        $category = PostCategory::with('posts')->find($id);

        return view('postCategory.show', [
            'category' => $category
        ]);
    }

    public function create()
    {
        return view('postCategory.create');
    }

    public function store(PostCategoryRequest $request)
    {
        $category = new PostCategory();

        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->status = $request->status;

        $category->save();

        return redirect()->route('admin.postcategory')->with('category-status', 'Category Created');
    }

    public function edit($id)
    {
        $category = PostCategory::find($id);

        return view('postCategory.edit', [
            'category' => $category
        ]);
    }

    public function update(PostCategoryRequest $request, $id)
    {
        $category = PostCategory::find($id);

        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->status = $request->status;

        $category->save();

        return redirect()->route('admin.postcategory')->with('category-status', 'Category Updated');
    }

    public function delete($id)
    {
        $category = PostCategory::find($id);

        $category->delete();

        return back()->with('category-status', 'Category Deleted');
    }
}
