<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListNotebook extends Model
{
    use HasFactory;
    public $table;
    protected $guarded = [];

    public function images()
    {
        return $this->hasMany(NotebookImage::class, 'notebook_id', 'id');
    }
}
