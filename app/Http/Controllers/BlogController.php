<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\DB;


class BlogController extends Controller
{
  public function blogDetails()
  {
    $allBlogs = Blog::all();
    $allCategory = BlogCategory::all();

    return view('blogs', [
      'blogDetails' => $allBlogs,
      'allCategory' => $allCategory
    ]);
  }

  public function blogPage(int $id)
  {
    $blogDetails = Blog::where('id', $id)->get();
    return view('blogDetails', [
      'singlePageDetails' => $blogDetails
    ]);
  }

  public function fetchAllBlogsAndCategories() {
    $allBlogs = Blog::select('blog_categories.*', 'blogs.*')
                ->join('blog_categories', 'blog_categories.id', '=', 'blogs.blog-category-id')
                ->paginate(2);
                // ->get();

    return response()->json([
      'allBlogs' => $allBlogs
    ]);
  }

  public function fetchAllCategories() {
    $allCategories = BlogCategory::all();

    return response()->json([
      'allCategories' => $allCategories
    ]);
  }

  public function fetchBlogsByCategory(int $id) {
    $blogsByCategory = Blog::select('blog_categories.*', 'blogs.*')
                        ->join('blog_categories', 'blog_categories.id', '=', 'blogs.blog-category-id')
                        ->where('blog_categories.id','=', $id)
                        ->get();

    return response()->json([
      'blogsByCategory' => $blogsByCategory
    ]);
  }
}
