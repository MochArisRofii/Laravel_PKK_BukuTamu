<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;


    protected $table = 'tamus';

    // protected $primaryKey = 'noktp';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'noktp',
        'nohp',
        'nama',
        'alamat',
        'keperluan'
    ];

}
