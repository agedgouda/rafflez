<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Drawing extends Model
{
    use HasFactory, SoftDeletes;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function prize()
    {
        return $this->belongsTo(Prize::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
