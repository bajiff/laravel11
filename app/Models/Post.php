<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $with = ['author','category'];
    protected $fillable = [
        'title', 'slug', 'author', 'body', 
    ];

    public function author(): BelongsTo 
    {
        return $this->belongsTo(User::class, 'author_id');
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    // public function user(){
    //     return $this->belongsTo(User::class, 'author_id');
    // }
    // public function category(){
    //     return $this->belongsTo(Category::class, 'author_id');
    // }
}
