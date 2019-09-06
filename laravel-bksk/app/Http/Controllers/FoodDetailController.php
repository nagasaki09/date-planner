<?php

namespace App\Http\Controllers;

use Request;
use POST;
use App\Food;

class FoodDetailController extends Controller
{
    //

    public function index(Request $request, $id)
    {
        //$food = food::all();

        //$food = food::tagFilter(request('id'))
             //->get();

             // 検索するテキスト取得
        //$value = $request::all();

        $query = food::query();
        // 検索するテキストが入力されている場合のみ

            $query->where('id', 'like', '%'.$id.'%');


        $data = $query->get();
        return view('detail', compact('data'));

        //return view('foodlist', compact('food'));

}
}
