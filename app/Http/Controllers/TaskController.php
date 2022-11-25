<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class TaskController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function register(Request $req)
    {

        $article=new Article;
        $article->name=$req->name;
        $article->email=$req->email;
        $article->password=$req->password;
        $article->save();



        //echo "<pre>";
        //print_r($req->all());
    }
}
