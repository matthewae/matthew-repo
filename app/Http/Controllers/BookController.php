<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('list', compact('books'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Title' => 'required',
            'description' => 'required',
            'Page_Count' => 'required|integer',
            'Author_Name' => 'required',
            'Author_Email' => 'required|email',
            'Published_Date' => 'required|date',
        ]);

        Book::create($request->all());
        return redirect()->route('books.create');
        // ->with('success', 'Book added successfully.');

    }
}
