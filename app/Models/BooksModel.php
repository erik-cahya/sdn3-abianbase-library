<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BooksModel extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
}
