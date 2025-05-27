<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PonudaMjeseca extends Model
{
    protected $table = 'ponuda_mjeseca';
    public $timestamps = false;

    protected $fillable = ['naziv', 'opis', 'cijena'];
}
