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

    public function personal()
    {
        $diaries = Diary::all();
        return view('diaries.personal' , ['diaries' => $diaries]);
    }
}
