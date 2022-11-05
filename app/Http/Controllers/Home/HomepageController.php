<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Package;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
  //
  public function index()
  {
    $data['categories'] = Category::all();
    return view('Frontend.index', compact('data'));
  }

  public function showpackages()
  {
    $data['packages'] = Package::all();
    return view('Frontend.packages', compact('data'));
  }
}
