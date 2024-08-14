<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mehradsadeghi\FilterQueryString\FilterQueryString;

class Penginapan extends Model
{
    use HasFactory, FilterQueryString;

    protected $table = 'penginapan';

    protected $fillable = ['nama_penginapan', 'foto_penginapan', 'alamat_penginapan', 'harga_penginapan', 'deskripsi_penginapan', 'maps'];

    protected $filters = [
        'sort',
        'between',
        'greater_or_equal',
        'less_or_equal',
        'between',
        'like'
    ];

    public function fasilitas()
    {
        return $this->belongsToMany(Fasilitas::class, 'fasilitas_penginapan', 'penginapan', 'fasilitas');
    }

    public function review()
    {
        return $this->hasMany(ReviewPenginapan::class, 'penginapan');
    }
}
