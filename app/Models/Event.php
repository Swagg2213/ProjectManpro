<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'id',
        'title',
        'image',
        'date',
        'startTime',
        'endTime',
        'theme',
        'speaker',
        'detail'
        ];
    
        protected $table= 'jemaats';
        protected $guarded =['id'];

    use HasFactory;
}
