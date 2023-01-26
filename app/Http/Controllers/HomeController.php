<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Divisions;
use App\Models\Roles;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $categories = Categories::get();
        return view('index', ['categories' => $categories]);
    }
}
