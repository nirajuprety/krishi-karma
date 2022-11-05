<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data['packages'] = Package::all();
    return view('Backend.package.index', compact('data'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    // $data['categories'] = Category::pluck('name', 'id');
    $data['categories'] = Category::all();
    return view('Backend.package.create', compact('data'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $package = new Package;
    $this->validate($request, [
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($request->hasFile('image')) {
      $destination_path = 'public/images/packages';
      $image = $request->file('image');
      $image_name = $image->getClientOriginalName();
      $path = $request->file('image')->storeAs($destination_path, $image_name);
      $package->image = $image_name;
    }
    $package->title = $request->title;
    $package->description = $request->description;
    $package->created_date = $request->created_date;
    $package->expire_date = $request->expire_date;
    $package->type = $request->type;
    $package->tag = $request->tag;
    $package->category_id = $request->category_id;
    $package->save();
    return redirect('/package');
  }


  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id, Request $request)
  {
    $package = Package::find($id);
    // dd($package);
    // $category = Category::find($package->category_id);
    $data['categories'] = Category::all();
    return view('Backend.package.edit', compact('package', 'data'));
    // dd($data);
    // dd($category);

    // $category = Category::find($id);
    // dd($category);
    // $categories = Category::find($id);
    // $data['categories'] = Category::all();
    // return view('Backend.package.edit', compact('package', 'categories', 'data'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $packages = Package::find($id);
    $packages->title = $request->input('title');
    $packages->description = $request->input('description');
    // $packages->created_date = $request->input('created_date');
    $packages->expire_date = $request->input('expire_date');
    $packages->type = $request->input('type');
    $packages->tag = $request->input('tag');
    $packages->category_id = $request->input('category_id');
    $packages->update();
    return redirect('/package');
    // dd('hello');
    // $categories = Category::find($id);
    // $categories->name = $request->has('name') ? $request->input('name') : '';
    // $categories->tag = $request->input('tag');
    // $categories->type = $request->input('type');
    // $categories->field = $request->input('field');
    // $categories->update();
    // return redirect('/category');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $package = Package::find($id);
    $package->delete();
    return redirect('/package')->with('success', 'Item Removed');
  }
}
