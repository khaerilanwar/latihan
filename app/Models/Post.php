<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Mendefinisikan nama kolom yang boleh diisi
    // protected $fillable = ['title', 'excerpt', 'body'];

    // Kebalikan dari variabel $fillable
    // $guarded adalah nama kolom yang tidak boleh diisi, lainnya boleh
    protected $guarded = ['id'];
}
