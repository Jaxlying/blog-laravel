<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;

class CommentController extends Controller
{
    //
    public function store(Request $request){

        Comment::create($request->all());
        return redirect()->back();

    }
}
