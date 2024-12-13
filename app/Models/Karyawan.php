<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'departemens_id',
        'posisis_id',
        'hire_date',
    ];

    public function departemens()
    {
        return $this->belongsTo(Departemen::class, 'departemens_id');
    }

    public function posisis()
    {
        return $this->belongsTo(Posisi::class, 'posisis_id');
    }
}
