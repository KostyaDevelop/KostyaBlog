<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;

class DashboardController extends Controller
{
 public function  Dashboard()
 {
     return view("admin.dashboard", ['articles'=>Article::paginate()]);
 }
}
