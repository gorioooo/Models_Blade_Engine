<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function testDatabaseConnection()
    {
        try {
            DB::connection()->getPdo();
            return "Connected successfully to database.";
        } catch (\Exception $e) {
            return "Could not connect to the database. Error: " . $e->getMessage();
        }
    }
}
