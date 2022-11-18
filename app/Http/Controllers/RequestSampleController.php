<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestSampleController extends Controller
{
    public function form(){
        return view('form');
    }

    public function queryStrings(Request $request){
        $keyword = $request->keyword;
        return 'keyword is ['. $keyword. ']!!!!';
    }

    // show user id 
    public function profile($id){
        return 'ID:'. $id;
    }

    public function productsArchive(Request $request, $category, $year){
        return 'category: '. $category. '<br>year '. $year. '<br>page: '. $request->get('page', 1); 
    }
}
