<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mehradsadeghi\FilterQueryString\FilterQueryString;
use Usamamuneerchaudhary\Commentify\Traits\Commentable;

class Wisata extends Model
{
    use HasFactory, FilterQueryString, Commentable;

    protected $table = 'wisata';

    protected $fillable = ['nama_wisata', 'foto_wisata', 'alamat_wisata', 'harga_tiket', 'id_kategori', 'latitude', 'longitude', 'fasilitas', 'deskripsi_wisata'];

    protected $filters = [
        'sort',
        'in',
        'greater_or_equal',
        'less_or_equal',
        'between',
        'like'
    ];

    public function fasilitas()
    {
        return $this->belongsToMany(Fasilitas::class, 'fasilitas_wisata', 'wisata', 'fasilitas');
    }

    public function review()
    {
        return $this->hasMany(ReviewWisata::class, 'wisata');
    }
}