<?php

namespace App\Http\Controllers\Library;

use App\Imports\UsersImport;
use App\Author;
use App\Book;
use App\Category;
use App\Publisher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App;

class LibraryController extends Controller
{

    public function dashboard()
    {
        return view('layouts.main');
    }

    public function library()
    {
        $paginate = 24;
        $books = Book::with('book_authors')->with('book_authors.author')->with('book_categorys')->with('book_categorys.category')->with('book_publishers')->with('book_publishers.publisher')->paginate($paginate);
        foreach ($books as $book) {
            $img_link = Storage::url($book->image);
            $book->image = $img_link;
        }
        return view('library.showPage')->with('authors', $this->side() ['authors'])->with('categories', $this->side() ['categories'])->with('books', $books)->with('page', 'book')->with('publishers', $this->side() ['publishers']);
    }

    public function authors()
    {
        $paginate = 24;
        $books = Book::select()->paginate($paginate);
        $authors = Author::select()->paginate($paginate);
        foreach ($authors as $author) {
            $img_link = Storage::url($author->image);
            $author->image = $img_link;
        }
        return view('library.authors')->with('authors', $authors)->with('categories', $this->side() ['categories'])->with('books', $books)->with('publishers', $this->side() ['publishers']);
    }

    public function categories()
    {
        $paginate = 24;
        $books = Book::select()->paginate($paginate);
        return view('library.categories')->with('authors', $this->side() ['authors'])->with('categories', $this->side() ['categories'])->with('books', $books)->with('publishers', $this->side() ['publishers']);
    }

    public function publishers()
    {
        $paginate = 24;
        $books = Book::select()->paginate($paginate);
        return view('library.publishers')->with('authors', $this->side() ['authors'])->with('categories', $this->side() ['categories'])->with('books', $books)->with('publishers', $this->side() ['publishers']);
    }

    public function books($id)
    {
        $paginate = 24;
        $books = Book::select()->paginate($paginate);
        $book1 = Book::where('id', $id)->with('book_authors')->with('book_authors.author')->with('book_categorys')->with('book_categorys.category')->with('book_publishers')->with('book_publishers.publisher')->select()->get();
        $book1 = $book1[0];
        $img_link = Storage::url($book1->image);
        $book1->image = $img_link;
        return view('library.book')->with('authors', $this->side() ['authors'])->with('categories', $this->side() ['categories'])->with('books', $books)->with('book1', $book1)->with('publishers', $this->side() ['publishers']);
    }

    public function search(Request $request)
    {
        if ($request->has('search_for')) {
            $name = $request['search_for'];
            $bookss = Book::where('name', $name)->get();

            $books = Book::with('book_authors')
                ->with(['book_authors.author' => function ($query) use ($name) {
                    $query->where('name', $name)->select('id', 'name');
                }
                ])->
                with('book_publishers')->
                with(['book_publishers.publisher' => function ($query) use ($name) {
                    $query->where('name', $name)->select();
                }
                ])->
                with('book_categorys')->
                with(['book_categorys.category' => function ($query) use ($name) {
                    $query->where('name', $name)->select();
                }
                ])->get();
            foreach ($books as $book) {
                $img_link = Storage::url($book->image);
                $book->image = $img_link;
            }
            foreach ($bookss as $book) {
                $img_link = Storage::url($book->image);
                $book->image = $img_link;
            }
//            dd($books->toArray());
            return view('library.result')->
            with('authors', $this->side() ['authors'])->
            with('categories', $this->side() ['categories'])->
            with('publishers', $this->side() ['publishers'])->
            with('books', $books)->
            with('bookss', $bookss)->
            with('result', $name);
        }
    }

    public function search_publisher($name)
    {
        $books = Book::with('book_publishers')->with(['book_publishers.publisher' => function ($query) use ($name) {
            $query->where('name', $name)->select('id', 'name');
        }
        ])->get();
        foreach ($books as $book) {
            $img_link = Storage::url($book->image);
            $book->image = $img_link;
        }
        return view('library.showPage')->with('authors', $this->side() ['authors'])->with('categories', $this->side() ['categories'])->with('books', $books)->with('page', 'publisher')->with('publishers', $this->side() ['publishers']);
    }

    public function search_publisher2(Request $request)
    {
        $books = Book::with('book_publishers')->with(['book_publishers.publisher' => function ($query) use ($request) {
            $query->where('name', $request['search'])->select('id', 'name');
        }
        ])->get();
        foreach ($books as $book) {
            $img_link = Storage::url($book->image);
            $book->image = $img_link;
        }
        return view('library.showPage')->with('authors', $this->side() ['authors'])->with('categories', $this->side() ['categories'])->with('books', $books)->with('page', 'publisher')->with('publishers', $this->side() ['publishers']);
    }

    public function search_author($name)
    {
        $books = Book::with('book_authors')->with(['book_authors.author' => function ($query) use ($name) {
            $query->where('name', $name)->select('id', 'name');
        }
        ])->get();
        foreach ($books as $book) {
            $img_link = Storage::url($book->image);
            $book->image = $img_link;
        }
        return view('library.showPage')->with('authors', $this->side() ['authors'])->with('categories', $this->side() ['categories'])->with('books', $books)->with('page', 'author')->with('publishers', $this->side() ['publishers']);
    }

    public function search_author2(Request $request)
    {
        $books = Book::with('book_authors')->with(['book_authors.author' => function ($query) use ($request) {
            $query->where('name', $request['search'])->select('id', 'name');
        }
        ])->get();
        foreach ($books as $book) {
            $img_link = Storage::url($book->image);
            $book->image = $img_link;
        }
        return view('library.showPage')->with('authors', $this->side() ['authors'])->with('categories', $this->side() ['categories'])->with('books', $books)->with('page', 'author')->with('publishers', $this->side() ['publishers']);
    }

    public function search_category($name)
    {
        $books = Book::with('book_authors')->with('book_authors.author')->with('book_categorys')->with(['book_categorys.category' => function ($query) use ($name) {
            $query->where('name', $name)->select('id', 'name');
        }
        ])->get();
        foreach ($books as $book) {
            $img_link = Storage::url($book->image);
            $book->image = $img_link;
        }
        return view('library.showPage')->with('authors', $this->side() ['authors'])->with('categories', $this->side() ['categories'])->with('books', $books)->with('page', 'category')->with('publishers', $this->side() ['publishers']);
    }

    public function search_category2(Request $request)
    {
        $books = Book::with('book_authors')->
        with('book_authors.author')->
        with('book_categorys')->
        with(['book_categorys.category' =>
            function ($query) use ($request) {
                $query->where('name', $request['search'])->select('id', 'name');
            }
        ])->get();
        foreach ($books as $book) {
            $img_link = Storage::url($book->image);
            $book->image = $img_link;
        }
        return view('library.showPage')->
        with('authors', $this->side() ['authors'])->
        with('categories', $this->side() ['categories'])->
        with('books', $books)->
        with('page', 'category')->
        with('publishers', $this->side() ['publishers']);
    }

    public function side()
    {
        $authors = Author::select()->limit(15)->get();
        $categories = Category::select()->limit(15)->get();
        $publishers = Publisher::select()->limit(15)->get();
        return ['authors' => $authors, 'categories' => $categories, 'publishers' => $publishers];
    }

    public function book_authors()
    {
        $books = $this->getBooks();
        $stack[] = null;
        foreach ($books as $book) {
            if (!empty($book->book_authors)) {
                foreach ($book->book_authors as $book_author) {
                    if (!empty($book_author->author)) {
                        array_push($stack, $book_author->author->name);
                    }
                }
            }
        }
        $authorss = array_unique($stack);
        unset($authorss[0]);
        return view('library.showPage')->with('authors', $this->side() ['authors'])->with('categories', $this->side() ['categories'])->with('books', $books)->with('page', 'authors')->with('publishers', $this->side() ['publishers'])->with('authorss', $authorss);
    }

    public function book_categories()
    {
        $books = $this->getBooks();
        $stack[] = null;
        foreach ($books as $book) {
            if (!empty($book->book_categorys)) {
                foreach ($book->book_categorys as $book_category) {
                    if (!empty($book_category->category)) {
                        array_push($stack, $book_category->category->name);
                    }
                }
            }
        }
        $categoriess = array_unique($stack);
        unset($categoriess[0]);
        return view('library.showPage')->with('authors', $this->side() ['authors'])->with('categories', $this->side() ['categories'])->with('books', $books)->with('page', 'categories')->with('publishers', $this->side() ['publishers'])->with('categoriess', $categoriess);
    }

    public function book_publishers()
    {
        $books = $this->getBooks();

        $stack[] = null;
        foreach ($books as $book) {
            if (!empty($book->book_publishers)) {
                foreach ($book->book_publishers as $book_publisher) {
                    if (!empty($book_publisher->publisher)) {
                        array_push($stack, $book_publisher->publisher->name);
                    }
                }
            }
        }
        $publisherss = array_unique($stack);
        unset($publisherss[0]);
        return view('library.showPage')->with('authors', $this->side() ['authors'])->with('categories', $this->side() ['categories'])->with('books', $books)->with('page', 'publishers')->with('publishers', $this->side() ['publishers'])->with('publisherss', $publisherss);
    }

    public function getBooks()
    {
        $books = Book::with('book_authors')->with('book_authors.author')->with('book_categorys')->with('book_categorys.category')->with('book_publishers')->with('book_publishers.publisher')->get();
        foreach ($books as $book) {
            $img_link = Storage::url($book->image);
            $book->image = $img_link;
        }
        return $books;
    }

    public function download(Request $request, $file)
    {
        return response()->download(public_path('assets/' . $file));
    }

    public function view($id)
    {
        $book = Book::find($id);
        return view('library.book_pdf')->with('book',$book);
    }
}
