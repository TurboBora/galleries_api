<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    public function user()
    {
        $this->belongsTo(User::class);
    }
    
    public function images()
    {
        $this->hasMany(Image::class);
    }

}
