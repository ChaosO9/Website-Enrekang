<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarEvent extends Model
{
    use HasFactory;

    protected $table = 'gambar_event';

    protected $fillable = ['id', 'event', 'gambar', 'deskripsi', 'created_at', 'updated_at'];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
