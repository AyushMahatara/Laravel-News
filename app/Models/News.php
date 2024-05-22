<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Usamamuneerchaudhary\Commentify\Traits\Commentable;

class News extends Model
{
    use HasFactory, Commentable;
    protected $fillable = [
        'title',
        'category_id',
        'slug',
        'date',
        'description',
        'image'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
