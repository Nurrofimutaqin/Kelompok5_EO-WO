<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TablePaket extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'paket';
    protected $fillable = [
        'nama_paket',
        'logo',
    ];
}
