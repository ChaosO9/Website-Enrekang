<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuliner extends Model
{
    use HasFactory;

    protected $table = 'kuliner';

    protected $fillable = ['nama_kuliner','foto_kuliner','alamat_kuliner','harga_kuliner','deskripsi_kuliner'];
}
