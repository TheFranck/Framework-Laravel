<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book as Book;

class ListeController extends Controller
{
    public function index()
    {
      $books = Book::all();
      $value = array();
      foreach ($books as $book) {
        array_push($value, [
          "title" => $book->title,
          "author" => $book->author,
          "id" => $book->id,
        ]
      );
    };

      return view('liste', ["books" => $value]);
    }

    public function addBook()
    {
      return view('addBook');
    }

    public function insertBook(Request $request)
    {
      $book = new Book;
      $book->title = $request->title;
      $book->author = $request->author;
      $book->save();
      return redirect ('/liste');
    }
}
