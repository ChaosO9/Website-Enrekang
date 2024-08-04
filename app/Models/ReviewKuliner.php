<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Usamamuneerchaudhary\Commentify\Traits\Commentable;

class ReviewKuliner extends Model
{
    use HasFactory, Commentable;

    protected $table = 'review_kuliner';

    protected $fillable = ['id', 'kuliner', 'gambar', 'deskripsi', 'created_at', 'updated_at'];

    public function kuliner()
    {
        return $this->belongsTo(Kuliner::class, 'kuliner_id2');
    }
}