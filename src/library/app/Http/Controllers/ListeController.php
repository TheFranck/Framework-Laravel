<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book as Book;
use App\Author as Author;

class ListeController extends Controller
{
    public function index()
    {
      $books = Book::all();
      $value = array();
      $i=0;
      foreach ($books as $book) {
        array_push($value, [
          "title" => $book->title,
          "author" => array(),
          "id" => $book->id,
          "cover" =>$book->cover,
        ]
      );
      foreach ($book->authors as $author)
      {
        array_push($value[$i]["author"], $author->name);
      };
      $i ++;
    };

      return view('liste', ["books" => $value]);
    }

    public function addBook()
    {
      $authors= Author::all();
      $authorsList = array();
      foreach ($authors as $author)
      {
        $authorsList[$author->id] = $author->name;
      }
      return view('addBook', ['authors' => $authorsList ]);
    }

    public function insertBook(Request $request)
    {
      $store = $request->cover->store('public/img');
      $store = str_replace("public", "storage", $store); // On remplace public par storage
      $book = new Book;
      $book->title = $request->title;
      //$book->author = $request->author;
      //$book->save();
      $book->cover = $store;
      $book->save();
      $book->authors()->attach($request->author);
      return redirect ('/liste');
    }


    public function deleteBook(Request $request)
    {
      $book = Book::find($request->id);
      $book->authors()->detach();
      $book->delete();
      return redirect ('/liste');
    }

    public function updateBook(Request $request)
    {
      $book = Book::find($request->id);
      $authors= Author::all();
      $authorsList = array();
      foreach ($authors as $author)
        {
          $authorsList[$author->id] = $author->name;
        }
      return view('updateBook', ['title' => $book->title, 'authors' => $authorsList, 'id' =>$book->id]);
    }

    public function updateBookAction(Request $request)
    {
      $book = Book::find($request->id);
      $book->title = $request->title;
      // $book->author = $request->author;
      $book->save();
      $book->authors()->detach();
      $book->authors()->attach($request->author);
      return redirect ('/liste');
    }
}
