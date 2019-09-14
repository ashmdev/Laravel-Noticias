<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function index(){
      $categories = Category::All();
   	return view('category.view',compact('categories'));
   }

   public function store(CategoryRequest $request){
      Category::create([
         'name' => $request['name'],
         'slug' =>  str_slug($request['name']),
         'body' => $request['body'],

      ]);
      return Redirect::to('/Category');
   }

   public function update($id, CategoryRequest $request){
      $categoria = Category::find($id);
      $categoria->fill([
      'name' => $request['name'],
      'slug' =>  str_slug($request['name']),
       'body' => $request['body'],
      ]);
      $categoria->save();
      return Redirect::to("/Category");
   }

   public function destroy($id){
      $categoria = Category::find($id);
        Category::destroy($id);
        return Redirect('Category');
   } }
