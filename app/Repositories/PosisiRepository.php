<?php

namespace App\Repositories;

use App\Repositories\PosisiRepositoryInterface;
use App\Models\Posisi;

class PosisiRepository extends BaseRepository implements PosisiRepositoryInterface
{
    public function __construct(Posisi $model)
    {
        parent::__construct($model);
    }

    /**
     * Mendapatkan posisi beserta karyawannya.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getPosisisWithKaryawans()
    {
        return $this->model->with('karyawan')->get();
    }
}
