<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasPenginapan extends Model
{
    use HasFactory;

    protected $table = 'fasilitas_penginapan';

    protected $fillable = ['id', 'penginapan', 'fasilitas', 'created_at', 'updated_at'];

    public function penginapan()
    {
        return $this->belongsTo(Penginapan::class);
    }

    public function fasilitas()
    {
        return $this->belongsTo(Fasilitas::class);
    }
}
