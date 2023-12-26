<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $posts = Post::orderBy('created_at', 'asc')->take(9)->get();
        $posts = Post::latest()->paginate(9);
       return view('admin.index', compact('posts'));
    }
}
