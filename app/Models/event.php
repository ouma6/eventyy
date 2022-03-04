<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $fillable = [
        'nomeE',
        'lieuxE',
        'program',
        'dateDebut',
        'dateFin',
        'heur'
    ];
}