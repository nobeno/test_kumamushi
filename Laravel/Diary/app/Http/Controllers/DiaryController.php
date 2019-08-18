<?php

namespace App\Http\Controllers;

use App\Diary; 
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function index()
    {
        //diariesテーブルのデータを全件取得
        //useしてるDiaryのallメソッドを実施
        //all()はテーブルのデータを全て取得するメソッド
        $diaries = Diary::all(); 

        return view('diaries.index',['diaries' => $diaries]);
    }

    public function create()
    {
        $diaries = Diary::all();
        return view('diaries.create' , ['diaries' => $diaries]);
    }

    public function store(Request $request)
    {
        $post = new Diary;
        $post->name = $request->name;
        $post->barth = $request->barth;
        $post->profile = $request->profile;
        $post->image_path = $request->img_path;
        $post->goal1 = $request->goal1;
        $post->goal2 = $request->goal2;
        $post->goal3 = $request->goal3;
        $post->deadline1 = $request->deadline1;
        $post->deadline2 = $request->deadline2;
        $post->deadline3 = $request->deadline3;
        $post->detail1 = $request->detail1;
        $post->detail2 = $request->detail2;
        $post->detail3 = $request->detail3;
        $post->save();

        return redirect('create');
    }
}
