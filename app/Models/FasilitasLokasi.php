<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasLokasi extends Model
{
    use HasFactory;

    protected $table = 'fasilitas_lokasi';

    protected $fillable = ['id', 'wisata', 'fasilitas', 'created_at', 'updated_at'];

    public function wisata()
    {
        return $this->belongsTo(Wisata::class);
    }

    public function fasilitas()
    {
        return $this->belongsTo(Fasilitas::class);
    }
}