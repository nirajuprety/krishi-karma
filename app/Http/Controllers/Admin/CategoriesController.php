<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Category;
use Dotenv\Validator;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class CategoriesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {

    // return view('Backend.category.index');
    $data = Category::all();
    return view('Backend.category.index', ['categories' => $data]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('Backend.category.create');
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */

  public function store(Request $request)
  {
    $category = new Category;
    $category->name = $request->name;
    $category->tag = $request->tag;
    $category->type = $request->type;
    $category->field = $request->field;
    $category->save();

    return redirect(route('category.index'));
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
    // $data = Category::all();
    // return view('category.index', ['members' => $data]);
    // $data = Category::all();
    // dd($data);
    // return view('category.index', ['categories' => $data]);
  }


  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */


  public function edit($id, Request $request)
  {
    //
    // $data = Category::all();
    $category = Category::find($id);
    return view('Backend.category.edit', compact('category'));

    // return view('category/{{ $categories->id }}/edit', ['categories' => ]);
    // return redirect(route('category.index'));
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

    $categories = Category::find($id);
    $categories->name = $request->has('name') ? $request->input('name') : '';
    $categories->tag = $request->input('tag');
    $categories->type = $request->input('type');
    $categories->field = $request->input('field');
    $categories->update();
    return redirect('/category');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */

  public function destroy($id)
  {
    $category = Category::find($id);
    $category->delete();
    return redirect('/category')->with('success', 'Item Removed');
  }
}
