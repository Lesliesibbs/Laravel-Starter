<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use Tracker;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }

    public function show(){

        $users = Tracker::onlineUsers(); // defaults to 3 minutes

        $users = Tracker::users(60 * 24);

        $pageViews = Tracker::pageViews(60 * 24 * 120);

        $pageViewsPerCountry = Tracker::pageViewsByCountry(60 * 24 * 120);

        $allData = [$pageViews,$pageViewsPerCountry, $users];

        return view('index', compact('crumbs','allData','selected_period'));
    }

}
