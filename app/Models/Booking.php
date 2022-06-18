<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $fillable = [
        'id_paketDetail',
        'id_user',
        'tgl_booking',
        'status',
        'bukti_bayar',
        'tgl_bayar',
    ];
}
