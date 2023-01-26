<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard.dashboard');
    }

    public function settings() {
        return view('dashboard.setting');
    }

    public function add_post() {
        return view('ads.post_ad');
    }

    public function messages() {
        return view('dashboard.message');
    }

    public function my_ads() {
        return view('dashboard.my_ads');
    }

    public function fav_ads() {
        return view('dashboard.fav_ads');
    }

    public function my_searches() {
        return view('dashboard.my_searches');
    }
}
