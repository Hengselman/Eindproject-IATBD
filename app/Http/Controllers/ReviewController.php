<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Huisdier;
use App\Models\Review;

class ReviewController extends Controller
{
    public function store(Request $request, Huisdier $huisdier)
    {
        $request->validate([
            'reviewer_name' => 'required',
            'review_text' => 'required',
            'huisdier_id' => 'required',
        ]);

        $review = new Review();
        $review->reviewer_name = $request->input('reviewer_name');
        $review->review_text = $request->input('review_text');
        $review->huisdier_id = $request->input('huisdier_id');

        $review->save();

        return redirect()->back()->with('success', 'Review added successfully.');
    }
}
