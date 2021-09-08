<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function store($id)
    {
        //ツイートをお気に入りに登録する
        \Auth::user()->favorite($id);
        return back();
    }
    
    public function destroy($id)
    {
        //お気に入り登録の解除
        \Auth::user()->unfavorite($id);
        return back();
    }
}
