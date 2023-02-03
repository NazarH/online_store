<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListMobilePhone extends Model
{
    use HasFactory;
    public $table;
    protected $guarded = [];

    public function images()
    {
        return $this->hasMany(MobileImage::class, 'mobile_id', 'id');
    }
}
