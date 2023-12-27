<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    // Mendefinisikan nama kolom yang boleh diisi
    // protected $fillable = ['title', 'excerpt', 'body'];

    // Kebalikan dari variabel $fillable
    // $guarded adalah nama kolom yang tidak boleh diisi, lainnya boleh
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['s'] ?? false, function ($query, $s) {
            return $query->where('title', 'like', '%' . $s . '%')->orWhere('body', 'like', '%' . $s . '%');
        });
        $query->when($filters['c'] ?? false, function ($query, $c) {
            return $query->whereHas('category', function ($query) use ($c) {
                $query->where('slug', $c);
            });
        });
        $query->when($filters['a'] ?? false, fn ($query, $a) => $query->where('username', $a));
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        // Parameter kedua menandakan memberikan nama alias
        // bahwa field author sama dengan kolom user_id di tabel database
        return $this->belongsTo(User::class, 'user_id');
    }
}
