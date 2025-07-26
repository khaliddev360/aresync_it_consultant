<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str; 

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    

    public function store(Request $request)
    {  
        $comment = new Comment;
        $comment->blogid= $request->blogid;
        $comment->name = $request->name;
        $comment->comment = $request->comment;
        $comment->save();

       

        return redirect()->back();
    }

    public function show($blogid){
    dd();
        $comments = Comment::where('blogid','=','id')->get()->count();

        dd($comments);
        
    }
}