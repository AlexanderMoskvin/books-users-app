<?php

namespace App\Http\Controllers\Api\Books;

use App\Http\Controllers\Api\Controller;
use Illuminate\Http\Request;

use App\Models\Book;

class BooksController extends Controller
{
    public function books() {

        return response()->json(Book::get(), 200);
    }

    public function booksById($id) {

        return response()->json(Book::find($id), 200);
    }

    public function booksEdit(Request $req, Book $book) {
        try {
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json(['error' => true, 'message' => $e->getMessage()], 401);
        }
        $book->update($req->all());
        return response()->json($book, 200);
    }

    public function booksDelete(Request $req, Book $book) {
        try {
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json(['error' => true, 'message' => $e->getMessage()], 401);
        }
        $book->delete();
        return response()->json('', 204);
    }
}
