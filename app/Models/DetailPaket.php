<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPaket extends Model
{
    use HasFactory;
    protected $table = 'paket_detail';
    protected $fillable = [

        'id_paket',
        'nama_paketDetail',
        'deskripsi',
        'harga',
        'foto',
    ];

    public function Paket()
    {
        return $this->belongsTo(TablePaket::class, 'id_paket', 'id');
    }
}
