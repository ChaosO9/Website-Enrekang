<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Usamamuneerchaudhary\Commentify\Traits\Commentable;

class ReviewKuliner extends Model
{
    use HasFactory, Commentable;

    protected $table = 'review_kuliner';

    protected $fillable = ['id', 'user_id', 'rating_bintang', 'kuliner', 'gambar', 'komentar', 'created_at', 'updated_at'];

    public function kuliner()
    {
        return $this->belongsTo(Kuliner::class, 'kuliner_id2');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
