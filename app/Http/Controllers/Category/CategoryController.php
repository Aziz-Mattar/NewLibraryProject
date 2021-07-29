<?php

namespace App\Http\Controllers\Category;

use App\Category;
use App\Http\Requests\CategoryRequest;
use App\Imports\BooksCategoriesImport;
use App\Imports\CategoriesImport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App;
class CategoryController extends Controller
{
    public function import()
    {
        Excel::import(new CategoriesImport(), 'categories.xlsx');
        return redirect('/');
    }

    public function import2()
    {
        Excel::import(new BooksCategoriesImport(), 'books_categories.xlsx');
        return redirect('/');
    }

    public function create()
    {
        return view('control_panel.category.create')->with('ac', true);
    }

    public function store(CategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request['name'];
        $result = $category->save();
        return redirect()
            ->back()
            ->with('add_status', $result);
    }

    public function index()
    {
        $paginate = 10;
        $categories = Category::select()->paginate($paginate);
        return view('control_panel.category.index')->with('categories', $categories);
    }

    public function edit($lang, $id)
    {
        $category = Category::where('id', $id)->get();
        $category = $category[0];
        return view('control_panel.category.edit')->with('category', $category)->with('ac', false);
    }

    public function update(CategoryRequest $request, $id)
    {
        $category = Category::where('id', $id)->first();
        $category->name = $request['name'];
        $result = $category->save();
        return redirect()
            ->back()->with('update_status', $result);
    }

    public function destroy($id)
    {
        $result = Category::where('id', $id)->delete();
        return redirect()
            ->back()->with('delete_status', $result);
    }

}

