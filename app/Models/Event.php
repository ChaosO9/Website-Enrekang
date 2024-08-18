<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mehradsadeghi\FilterQueryString\FilterQueryString;

class Event extends Model
{
    use HasFactory, FilterQueryString;

    protected $table = 'event';

    protected $fillable = ['nama_event', 'tempat_event', 'tanggal_pelaksanaan', 'tanggal_selesai', 'deskripsi_event', 'foto_event', 'latitude', 'longitude'];

    protected $filters = [
        'sort',
        'like',
        'between',
        'greater',
        'less',
        'less_or_equal',
        'greater_or_equal'
    ];

    public function review()
    {
        return $this->hasMany(ReviewEvent::class, 'event');
    }
}
