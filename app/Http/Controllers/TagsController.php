<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Http\Requests\TagUpdateRequest;
use Illuminate\Support\Facades\Redirect;

class TagsController extends Controller
{

   public function index(){
      $tags = Tag::All();
   	return view('tags.view',compact('tags'));
   }

   public function store(TagUpdateRequest $request){
      Tag::create([
         'name' => $request['name'],
         'slug' =>  str_slug($request['name'])
      ]);
      return Redirect::to('/Tags');
   }

   public function update($id, TagUpdateRequest $request){
      $tag = Tag::find($id);
      $tag->fill([
      'name' => $request['name']
      ]);
      $tag->save();
      return Redirect::to("/Tags");
   }

   public function destroy($id){
      $tag = Tag::find($id);
        Tag::destroy($id);
        return Redirect::to('/Tags');
   } 
}
