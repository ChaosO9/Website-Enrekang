<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Usamamuneerchaudhary\Commentify\Traits\Commentable;

class ReviewPenginapan extends Model
{
    use HasFactory, Commentable;

    protected $table = 'review_penginapan';

    protected $fillable = ['id', 'penginapan', 'gambar', 'deskripsi', 'created_at', 'updated_at'];

    public function penginapan()
    {
        return $this->belongsTo(Penginapan::class, 'penginapan_id2');
    }
}