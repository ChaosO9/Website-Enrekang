<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    protected $table = 'fasilitas';

    protected $fillable = ['id', 'nama', 'created_at', 'updated_at'];

    public function wisata()
    {
        return $this->belongsToMany(Wisata::class, 'fasilitas_lokasi', 'fasilitas', 'wisata');
    }
}