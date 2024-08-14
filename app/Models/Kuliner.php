<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mehradsadeghi\FilterQueryString\FilterQueryString;

class Kuliner extends Model
{
    use HasFactory, FilterQueryString;

    protected $table = 'kuliner';

    protected $fillable = ['nama_kuliner', 'foto_kuliner', 'alamat_kuliner', 'harga_kuliner', 'deskripsi_kuliner'];

    protected $filters = [
        'sort',
        'greater_or_equal',
        'less_or_equal',
        'between',
        'like'
    ];

    public function review()
    {
        return $this->hasMany(ReviewKuliner::class, 'kuliner');
    }
}
