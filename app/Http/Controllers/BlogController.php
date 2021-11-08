<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;


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
}
