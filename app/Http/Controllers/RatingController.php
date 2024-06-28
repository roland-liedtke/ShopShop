<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function store(Request $request)
    {
        if (!Auth::check()) {
            // Użytkownik nie jest zalogowany, obsłuż odpowiednio (np. przekierowanie do strony logowania)
            return redirect()->route('login')->with('error', 'You must be logged in to add a comment or rating.');
        }

        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'product_id' => 'required|exists:products,id',
        ]);

        $rating = new Rating();
        $rating->user_id = Auth::id();
        $rating->product_id = $request->product_id;
        $rating->rating = $request->rating;
        $rating->save();

        return back()->with('success', 'Rating added successfully!');
    }
}
