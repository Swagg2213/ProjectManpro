<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renungan extends Model
{
    protected $table= 'renungans';
    protected $guarded =['id'];
    use HasFactory;
}
