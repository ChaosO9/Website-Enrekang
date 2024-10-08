<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Usamamuneerchaudhary\Commentify\Traits\Commentable;

class ReviewEvent extends Model
{
    use HasFactory, Commentable;

    protected $table = 'review_event';

    protected $fillable = ['id', 'user_id', 'rating_bintang', 'event', 'gambar', 'komentar', 'created_at', 'updated_at'];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}