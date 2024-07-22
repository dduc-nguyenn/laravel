<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class HomeController extends Controller
{
    public function index()
    {
        $format_date = DB::raw("DATE_FORMAT(created_at, '%d %b, %Y') as format_created_at");

        $queryPost = Post::query()->select('*', $format_date)->latest('id');

        $editors = $queryPost->paginate(1);

        $trending = $queryPost->paginate(3);

        $popular = Post::query()->select('*', $format_date)->latest('view')->paginate(1);

        $recent = $queryPost->paginate(5);

        $categories = Category::query()->paginate();

        return view('client.' . __FUNCTION__, compact('editors', 'trending', 'popular', 'recent', 'categories'));
    }

    public function posts()
    {
        $format_date = DB::raw("DATE_FORMAT(created_at, '%d %b, %Y') as format_created_at");

        $posts = Post::query()->select('*', $format_date)->latest('id')->paginate(10);

        return view('client.' . __FUNCTION__, compact('posts')) ;
    }

    public function post_detail($id)
    {
        $format_date = DB::raw("DATE_FORMAT(created_at, '%d %b, %Y') as format_created_at");

        $post = Post::query()->select('*', $format_date)->findOrFail($id);

        return view('client.' . __FUNCTION__, compact('post'));
    }

    public function category($id)
    {
        $format_date = DB::raw("DATE_FORMAT(created_at, '%d %b, %Y') as format_created_at");

        $category = Category::query()->findOrFail($id);

        $posts = Post::query()->select('*', $format_date)->where('category_id', $id)->get();

        return view('client.' . __FUNCTION__, compact('category', 'posts'));
    }
    public function search_post(Request $request)
    {
        $format_date = DB::raw("DATE_FORMAT(created_at, '%d %b, %Y') as format_created_at");

        $search = $request->input('search');

        $posts = Post::query()->select('*', $format_date)
                    ->where('title', 'LIKE', "%{$search}%")
                    ->get();

        return view('client.' . __FUNCTION__, compact('posts', 'search'));
    }
}
