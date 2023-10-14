<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model {
    use HasFactory;

    protected $fillable = [ 'name', 'biography', 'avatar', 'birth_date', 'death_date', 'birth_place', 'slug', 'gender', 'religion', 'status', ];
}
