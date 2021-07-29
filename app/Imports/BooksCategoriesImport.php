<?php

namespace App\Imports;

use App\books_categories;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class BooksCategoriesImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new books_categories([
            'book_id'=> $row['book_id'],
            'category_id'=>$row['category_id']
        ]);
    }
}
