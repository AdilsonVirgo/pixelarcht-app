<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function Photography()
    {
        return $this->hasOne(Photography::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tags::class);
    }


}
