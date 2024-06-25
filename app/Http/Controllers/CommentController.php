<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonies;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'rating' => 'required|integer|between:1,5',
            'comment' => 'required|string',
        ]);

        Testimonies::create([
            'nama' => $request->input('nama'),
            'rating' => $request->input('rating'),
            'comment' => $request->input('comment')
        ]);

        return redirect()->back()->with('success', 'Comment posted successfully');
    }
}
