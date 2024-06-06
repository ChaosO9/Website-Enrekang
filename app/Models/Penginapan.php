<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penginapan extends Model
{
    use HasFactory;

    protected $table = 'penginapan';

    protected $fillable = ['nama_penginapan','foto_penginapan','alamat_penginapan','harga_penginapan','deskripsi_penginapan','maps'];
}
