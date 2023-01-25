<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mdlPembayaran extends Model
{
    use HasFactory;

    use HasFactory;
    protected $table = 'data_pembayaran';
    protected $primaryKey = 'id';

    protected $fillable = [
        
             'nama',
            'alamat',
            'noTelp',
            'jenisKelamin',
            'jumlah',
           


        
    ];

    public $timestamps = false;
}
