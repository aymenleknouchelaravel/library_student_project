<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Language;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        $books = count(Book::all());
        $categories = count(Category::all());
        $languages = count(Language::all());
        return view('admin.home', compact("books", "categories", "languages"));
    }

    public function addbook()
    {
        $categories = Category::all();
        $languages = Language::all();

        return view('admin.addbook', compact("categories", "languages"));
    }

    public function addcategory()
    {
        return view('admin.addcategory');
    }

    public function addlanguage()
    {
        return view('admin.addlanguage');
    }

    public function adduser()
    {
        return view('admin.adduser');
    }

    public function addbookform(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'author' => 'required',
            'category_id' => 'required',
            'language_id' => 'required',
            'cover' => 'required',
            'nbr_pages' => 'required',
            'file' => 'required',
        ]);

        $book = new Book();
        $book->name = $request->name;
        $book->description = $request->description;
        $book->author = $request->author;
        $book->category_id = $request->category_id;
        $book->language_id = $request->language_id;
        $path = $request->file('cover')->store('images', ['disk' => 'public']);
        $book->cover = $path;
        $path2 = $request->file('file')->store('files', ['disk' => 'public']);
        $book->file = $path2;
        $book->nbr_pages = $request->nbr_pages;
        $book->save();

        return redirect()->route("admin.addbook");
    }

    public function addcategoryform(Request $request)
    {
        $request->validate([
            'name' => 'required',

        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return redirect()->route("admin.addcategory");
    }
    public function addlanguageform(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $language = new Language();
        $language->name = $request->name;
        $language->save();

        return redirect()->route("admin.addlanguage");
    }

    public function books()
    {
        $books = Book::all();
        return view('admin.books', compact("books"));
    }
    public function categories()
    {
        $categories = Category::all();
        return view('admin.categories', compact("categories"));
    }
    public function languages()
    {
        $languages = Language::all();
        return view('admin.languages', compact("languages"));
    }
    public function users()
    {
        $users = User::all();
        return view('admin.users', compact("users"));
    }
    public function book_delete($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route("admin.books");
    }
    public function category_delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route("admin.categories");
    }
    public function language_delete($id)
    {
        $language = Language::find($id);
        $language->delete();
        return redirect()->route("admin.languages");
    }
    public function user_delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route("admin.users");
    }

}