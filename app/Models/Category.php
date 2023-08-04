<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function book()
    {
        return $this->belongsToMany(Book::class,'book_categories','category_id','book_id' );
    }
}
