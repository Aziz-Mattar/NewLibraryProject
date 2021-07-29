<?php

namespace App\Http\Controllers\Book;
use App;

use App\Book;
use App\Author;
use App\books_authors;
use App\books_categories;
use App\books_publishers;
use App\Category;
use App\Http\Requests\BookRequest;
use App\Imports\BooksImport;
use App\Publisher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class BookController extends Controller
{
    public function import()
    {
        Excel::import(new BooksImport(), 'books.xlsx');
        return redirect('/');
    }

    public function create()
    {
        $authors = Author::select()->get();
        $categories = Category::select()->get();
        $publishers = Publisher::select()->get();

        return view('control_panel.book.create')
            ->with('authors', $authors)->with('categories', $categories)->with('publishers', $publishers)->with('ac', true);
    }

    public function store(BookRequest $request)
    {
        $image = $request->file('image');
        $path = 'uploads/images/books/';
        $name = time() + rand(1, 10000000000) . '.' . $image->getClientOriginalExtension();
        Storage::disk('local')
            ->put($path . $name, file_get_contents($image));

        $status = Storage::disk('local')->exists($path . $name);

        $pdf = $request->file('pdf');
        $pdf_path = 'uploads/pdf/books/';
        $pdf_name = time() + rand(1, 10000000000) . '.' . $pdf->getClientOriginalExtension();
        $request->pdf->move('assets',$pdf_name);

        $book = new Book();
        $book->name = $request['name'];
        $book->description = $request['description'];
        $book->Language = $request['Language'];
        $book->release_year = $request['release_year'];
        $book->edition_number = $request['edition_number'];
        $book->pages = $request['pages'];
        $book->image = $path . $name;
        $book->pdf = $pdf_name;

        $book_id = Book::where('name', $request['name'])->where('release_year', $request['release_year'])->where('edition_number', $request['edition_number'])->select('id')
            ->first();
        $result = false;
        if (is_null($book_id)) {

            $result = $book->save();
            $book_id = Book::all()->last()->id;
            foreach ($request['category'] as $category) {
                $books_categories = new books_categories();

                $books_categories->book_id = $book_id;
                $books_categories->category_id = $category;
                $books_categories->save();
            }

            foreach ($request['publisher'] as $publisher) {
                $books_publishers = new books_publishers();
                $books_publishers->book_id = $book_id;
                $books_publishers->publisher_id = $publisher;
                $books_publishers->save();
            }

            foreach ($request['author'] as $author) {
                $books_authors = new books_authors();
                $books_authors->book_id = $book_id;
                $books_authors->author_id = $author;
                $books_authors->save();
            }
        }else{
            return redirect()
                ->back()
                ->with('add_status', $result);
        }

        return redirect()
            ->back()
            ->with('add_status', $result);
    }

    public function index()
    {
        $paginate = 10;
        $books = Book::with('book_authors')->with('book_authors.author')
            ->with('book_categorys')
            ->with('book_categorys.category')
            ->with('book_publishers')
            ->with('book_publishers.publisher')
            ->select()
            ->paginate($paginate);
        return view('control_panel.book.index')->with('books', $books);
    }

    public function edit($lang, $id)
    {
        $authors = Author::select()->get();
        $categories = Category::select()->get();
        $publishers = Publisher::select()->get();

        $book = Book::where('id', $id)->with('book_authors')
            ->with('book_authors.author')
            ->with('book_categorys')
            ->with('book_categorys.category')
            ->with('book_publishers')
            ->with('book_publishers.publisher')
            ->get();

//        dd($book);

        $book = $book[0];
        return view('control_panel.book.edit')->with('book', $book)->with('authors', $authors)->with('categories', $categories)->with('publishers', $publishers)->with('ac', false);
    }

    public function update(BookRequest $request, $id)
    {
        $image = $request->file('image');
        $path = 'uploads/images/books/';
        $name = time() + rand(1, 10000000000) . '.' . $image->getClientOriginalExtension();
        Storage::disk('local')
            ->put($path . $name, file_get_contents($image));
        $status = Storage::disk('local')->exists($path . $name);

        $book = Book::where('id', $id)->first();
        $book->name = $request['name'];
        $book->description = $request['description'];
        $book->Language = $request['Language'];
        $book->release_year = $request['release_year'];
        $book->edition_number = $request['edition_number'];
        $book->pages = $request['pages'];
        $book->image = $path . $name;

        books_categories::where('book_id', $id)->delete();
        books_publishers::where('book_id', $id)->delete();
        books_authors::where('book_id', $id)->delete();

        foreach ($request['category'] as $category) {
            $books_categories = new books_categories();
            $books_categories->book_id = $id;
            $books_categories->category_id = $category;
            $books_categories->save();
        }

        foreach ($request['publisher'] as $publisher) {
            $books_publishers = new books_publishers();
            $books_publishers->book_id = $id;
            $books_publishers->publisher_id = $publisher;
            $books_publishers->save();
        }

        foreach ($request['author'] as $author) {
            $books_authors = new books_authors();
            $books_authors->book_id = $id;
            $books_authors->author_id = $author;
            $books_authors->save();
        }
        $result = $book->save();
        return redirect()
            ->back()->with('update_status', $result);
    }

    public function destroy($id)
    {
        $result = Book::where('id', $id)->delete();
        books_authors::where('book_id', $id)->delete();
        books_categories::where('book_id', $id)->delete();
        books_publishers::where('book_id', $id)->delete();

        return redirect()
            ->back()->with('delete_status', $result);
    }

}

