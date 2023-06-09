<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body', 'price'];

    public function category()
    {
        return $this->belengsTo(Category::class);
    }

    public function user()
    {
       return $this->belongsTo(User::class); 
    }
}
