<?php

namespace App\Http\Controllers;

use App\Models\JobCategory;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $categories = JobCategory::with("Jobs")->get();
        return view("app.index", compact("categories"));
    }
}
