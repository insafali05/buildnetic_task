<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class User extends Model
{
    use HasApiTokens, HasFactory;


    protected $fillable = ['name', 'email', 'password', 'role'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
