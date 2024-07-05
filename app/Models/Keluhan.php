<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;
    protected $fillable = [
        'keluhan',
        'TKP',
        'saran',
        'Tanggal_Keluhan',
        'name_file',
    ];
}
