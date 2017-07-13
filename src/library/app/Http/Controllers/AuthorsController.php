<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author as Author;

class AuthorsController extends Controller
{
    public function addAuthor()
    {
      $authors = Author::all();
      $return = array();
      foreach ($authors as $author) {
        array_push($return, $author->name);
      }
      return view('addAuthor', ['authors' => $return]);
    }

    public function insertAuthor(Request $request)
    {
      $author = new Author;
      $author->name =$request->name;
      $author->save();
      return redirect('/add/author');
    }

    

}
