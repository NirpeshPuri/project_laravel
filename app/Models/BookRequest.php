<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookRequest extends Model
{
    use HasFactory;
    protected $table = 'book_requests';
    protected $fillable = [
        'book_id',
        'full_name',
        'phone',
        'email',
        'status',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}

