<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Usamamuneerchaudhary\Commentify\Scopes\HasLikes;
use Usamamuneerchaudhary\Commentify\Traits\Commentable;

class ReviewWisata extends Model
{
    use HasFactory, Commentable, HasLikes;

    protected $table = 'review_wisata';

    protected $fillable = ['id', 'user_id', 'rating_bintang', 'wisata', 'gambar', 'komentar', 'created_at', 'updated_at'];

    public function wisata()
    {
        return $this->belongsTo(Wisata::class, 'wisata_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}