<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Review extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(): HasMany
    {
        return $this->hasMany(User::class,'id', 'user_id');
    }

    public function notebook(): HasMany
    {
        return $this->hasMany(ListNotebook::class,'id', 'notebook_id');
    }

    public function book(): HasMany
    {
        return $this->hasMany(ListBook::class,'id', 'book_id');
    }

    public function phone(): HasMany
    {
        return $this->hasMany(ListMobilePhone::class,'id', 'phone_id');
    }

    public function tv(): HasMany
    {
        return $this->hasMany(ListTv::class,'id', 'television_id');
    }
}
