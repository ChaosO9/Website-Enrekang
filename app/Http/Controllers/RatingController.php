<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;

class RatingController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'item_id' => 'required',
            'rating_value' => 'required|numeric|min:1|max:5',
        ]);

        Rating::create($validatedData);

        return response()->json(['message' => 'Rating has been submitted successfully']);
    }
}
