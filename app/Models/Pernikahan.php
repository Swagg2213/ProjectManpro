<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pernikahan extends Model
{
    protected $fillable = [
        'namaP',
        'alamatP',
        'gerejaP',
        'noHpP',
        'tempatLahirP',
        'tanggalLahirP',
        'menikahP',
        
        'namaL',
        'alamatL',
        'gerejaL',
        'noHpL',
        'tempatLahirL',
        'tanggalLahirL',
        'menikahL',

        'tanggalPernikahan',
        'createdAt',
        'updatedAt'
    ];

    protected $table= 'weddings';

    use HasFactory;
}
