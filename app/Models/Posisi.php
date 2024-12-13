<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posisi extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'salary'];

    public function karyawan()
    {
        return $this->hasMany(Karyawan::class, 'posisis_id');
    }
}
