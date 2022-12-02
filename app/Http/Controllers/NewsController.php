<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\User;

class NewsController extends Controller
{
    public function index()
    {
        return view('index', [
            "title"=>"HOME",
            "News"=>News::all()
        ]);
    }

    public function show(News $news)
    {
        return view('info', [
            "title"=>"TIMELINE $news->slug",
            "news"=>$news
        ]);
    }

    public function full()
    {
        return view('full-info', [
            "title"=>"TIMELINE",
            "news"=>News::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'email:dns|unique:users'
        ]);

        User::create($validatedData);

        $request->session()->flash('succsess', 'Your Account is Now Subscribed to our Newsletter');
        return redirect('/');
    }
}
