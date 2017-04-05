<?php

namespace App\Http\Controllers\admin;

use App\Feature;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Article;
use App\Interview;
use App\Theme;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $themes = Theme::all()->count();
        $articles = Article::all()->count();
        $interviews = Interview::all()->count(); 
        
        return view('admin/dashboard')->with(compact('themes', 'articles', 'interviews'));
    }
}