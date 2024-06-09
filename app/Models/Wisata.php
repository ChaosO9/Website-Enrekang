<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mehradsadeghi\FilterQueryString\FilterQueryString;

class Wisata extends Model
{
    use HasFactory, FilterQueryString;

    protected $table = 'wisata';

    protected $fillable = ['nama_wisata', 'foto_wisata', 'alamat_wisata', 'harga_tiket', 'id_kategori', 'fasilitas', 'deskripsi_wisata', 'maps', 'tanggal_upload'];

    protected $filters = [
        'sort',
        'between',
        'in',
        'greater_or_equal',
        'less_or_equal',
        'between',
        'like'
    ];

    public function fasilitas()
    {
        return $this->belongsToMany(Fasilitas::class, 'fasilitas_lokasi', 'wisata', 'fasilitas');
    }

    public function gambar()
    {
        return $this->hasMany(GambarLokasi::class, 'wisata');
    }
}