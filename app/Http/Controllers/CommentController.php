<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        if (!Auth::check()) {
            // Użytkownik nie jest zalogowany, obsłuż odpowiednio (np. przekierowanie do strony logowania)
            return redirect()->route('login')->with('error', 'You must be logged in to add a comment or rating.');
        }

        $request->validate([
            'message' => 'required',
            'product_id' => 'required|exists:products,id',
        ]);

        $comment = new Comment();
        $comment->user_id = Auth::id();
        $comment->product_id = $request->product_id;
        $comment->message = $request->message;
        $comment->save();

        return back()->with('success', 'Comment added successfully!');
    }
}
