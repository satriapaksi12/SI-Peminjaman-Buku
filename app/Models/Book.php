<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function user()
    {
        return $this->belongsToMany(User::class,'rent_logs','book_id','user_id' );
    }

    public function category()
    {
        return $this->belongsToMany(Category::class,'book_categories','book_id','category_id');
    }
}
