<?php

namespace App\Imports;

use App\books_authors;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class BooksAuthorsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new books_authors([
            'book_id'=> $row['book_id'],
            'author_id'=> $row['author_id']
        ]);
    }
}
