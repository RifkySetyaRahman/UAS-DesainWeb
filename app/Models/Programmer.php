<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programmer extends Model
{
    use HasFactory;

    protected $table = 'programmers';

    protected $fillable = [
        'nama',
        'Tanggal_lahir',
        'deskripsi',
        'item_image_path',
    ];
}