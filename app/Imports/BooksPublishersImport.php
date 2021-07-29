<?php

namespace App\Imports;

use App\books_publishers;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class BooksPublishersImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new books_publishers([
            'book_id'=> $row['book_id'],
            'publisher_id' => $row['publisher_id']
        ]);
    }
}
