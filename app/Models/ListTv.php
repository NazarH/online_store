<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListTv extends Model
{
    use HasFactory;
    public $table;
    protected $guarded = [];

    public function images()
    {
        return $this->hasMany(TvImage::class, 'tv_id', 'id');
    }
}
