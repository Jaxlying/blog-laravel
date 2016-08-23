<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    //

    public function index(){
        return view('admin/comment')->withComments(Comment::all());
    }
    public function destroy($id){
        $comment = Comment::find($id);
        $comment->delete();
        return redirect('admin/comment');
    }
}
