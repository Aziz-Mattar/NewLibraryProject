<?php

namespace App\Imports;

use App\Book;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class BooksImport implements ToModel,WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Book([
            'name' => $row['name'],
            'release_year' => $row['release_year'],
            'edition_number' => $row['edition_number'],
            'pages' => $row['pages'],
            'image' => $row['image'],
            'description' => $row['description'],
            'Language' => $row['language']
        ]);
    }
}
