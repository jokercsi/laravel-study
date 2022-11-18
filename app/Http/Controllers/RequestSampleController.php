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

    public function routeLink(){
        $url = route('profile', ['id' => 1, 'photo'=>'yes']);
        return 'URL of profile page is '. $url;
    }

    public function loginForm(){
        return view('login');
    }

    // 로그인 
    public function login(Request $request)
    {
        if ($request->get('email') === 'user@example.com' && $request->get('password') === '12345678') {
            return 'ログイン成功';
        }
        return 'ログイン失敗';
    }
}
