<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function addCategory()
    {
        return view('categories.addCategory');
    }

    public function addCat(Request $request)
    {
        $request->validate([
            'category' => 'required|unique:categories',
            'logo' => 'required|image|mimes:jpeg,png,jpg,svg|dimensions:max_height=512,max_width=512'
        ]);
        $imgName = $request->category . '-' . time() . '.' . $request->logo->extension();
        $imgPath = $request->logo->move('images/categories', $imgName);

        Categories::create([
            'category' => $request->category,
            'img' => $imgPath
        ]);

        return to_route('home')->with('success', 'The category was successfully added.');
    }
}
