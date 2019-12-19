<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Game extends Model
{
    protected $table = 'games';

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}
