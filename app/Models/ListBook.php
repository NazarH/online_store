<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListBook extends Model
{
    use HasFactory;
    public $table;
    protected $guarded = [];

    public function images()
    {
        return $this->hasMany(BookImage::class, 'book_id', 'id');
    }
}
