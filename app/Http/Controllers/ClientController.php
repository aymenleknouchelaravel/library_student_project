<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home()
    {
        $books = Book::all();
        return view('client.home', compact("books"));
    }

    public function contact()
    {
        return view('client.contact');
    }
    public function downloadFile($id)
    {
        $book = Book::find($id);
        $file = public_path('storage/' . $book->file);
        if (file_exists($file)) {
            return response()->download($file);
        }

        abort(404, 'File not found');
    }

    public function search(Request $request)
    {

        $books = Book::where('name', 'LIKE', '%' . $request->name . '%')->get();

        return view('client.search', compact("books"));
    }


}