<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BooksModel extends Model
{
    protected $table="Books";

    protected $fillable = [
        'Book_ID','Title','PID','Price'
    ];
}
