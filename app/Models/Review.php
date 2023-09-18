<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(){
        return $this->hasMany(User::class,'id', 'user_id');
    }
    public function notebook(){
        return $this->hasMany(ListNotebook::class,'id', 'notebook_id');
    }
    public function book(){
        return $this->hasMany(ListBook::class,'id', 'book_id');
    }
    public function phone(){
        return $this->hasMany(ListMobilePhone::class,'id', 'phone_id');
    }
    public function tv(){
        return $this->hasMany(ListTv::class,'id', 'television_id');
    }
}
