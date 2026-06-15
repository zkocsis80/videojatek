<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Game extends Model
{
    protected $fillable = ['title', 'release_year', 'price', 'category_id'];
    use HasFactory; 

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
