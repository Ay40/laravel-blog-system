<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }


    public function create(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'article_id' => 'required',
        ]);

        $comment = new Comment;
        $comment->content = $request->content;
        $comment->article_id = $request->article_id;
        $comment->user_id = Auth::id();
        $comment->save();

        return back();
    }

    public function delete($id) 
    {
        $comment = Comment::find($id);
        
        if(Gate::allows('delete-comment', $comment)) {
            $comment->delete();
            return back();
        }
        return back()->with('info', 'Unauthorized action');
    }


}
