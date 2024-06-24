<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;


class FormController extends Controller
{
    public function addForm(Request $request)
    {
        $validasi_data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Form::create($validasi_data);

        return back()->with('success');
    }
}
