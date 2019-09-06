<?php

namespace App\Http\Controllers;

use Request;
use POST;
use App\Food;

class FoodController extends Controller
{
    //

    public function index(Request $Request)
    {
        $food = food::all();

        //$food = food::tagFilter(request('id'))
             //->get();

             // 検索するテキスト取得
        $search1 = Request::get('food');
        $search2 = Request::get('pre');


        $query = food::query();
        // 検索するテキストが入力されている場合のみ

            $query->where('atmosphere', 'like', '%'.$search1.'%');
            $query->where('prefecture',$search2);

        
        $data = $query->get();
        return view('foodlist', compact('data','food'));

        //return view('foodlist', compact('food'));

}
}
