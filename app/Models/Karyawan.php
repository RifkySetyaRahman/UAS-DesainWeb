<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawans';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'departemen_id',
        'posisi_id',
        'hire_date',
    ];

    public function departemens() {
        return $this->belongsTo(Departemen::class, 'departemen_id');
    }
    
    public function posisis() {
        return $this->belongsTo(Posisi::class, 'posisi_id');
    }
    
}
