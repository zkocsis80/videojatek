<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Game;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
 use HasFactory;
    protected $fillable = ['rating', 'comment', 'game_id'];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    
}
