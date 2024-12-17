<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posisi extends Model
{
    use HasFactory;

    protected $table = 'posisis';

    protected $fillable = ['title', 'description', 'salary'];

    public function karyawans()
    {
        return $this->hasMany(Karyawan::class, 'posisis_id');
    }
}
