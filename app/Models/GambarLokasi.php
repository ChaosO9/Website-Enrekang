<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarLokasi extends Model
{
    use HasFactory;

    protected $table = 'gambar_lokasi';

    protected $fillable = ['id', 'wisata', 'gambar', 'deskripsi', 'created_at', 'updated_at'];

    public function wisata()
    {
        return $this->belongsTo(Wisata::class, 'wisata_id');
    }
}