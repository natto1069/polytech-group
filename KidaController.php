<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;

class KidaController extends Controller
{
    public function insert()
    {
        return view('book.insert');
    }

    public function insertComplete(Request $req)
    {
        $book = new book();

        $book->title = $req->title;
        $book->ISBN = $req->ISBN;
        $book->author = $req->author;
        $book->publisher = $req->publisher;
        $book->price = $req->price;
        $book->save();

        $data = [
            'title'=>$req->title,
            'ISBN'=>$req->ISBN,
            'author'=>$req->author,
            'publisher'=>$req->publisher,
            'price'=>$req->price
        ];

        return view('book.insertComplete', $data);
    }
}
