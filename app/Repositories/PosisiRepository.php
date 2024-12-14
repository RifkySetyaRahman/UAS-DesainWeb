<?php

namespace App\Repositories;

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
    public function getPositionsWithKaryawans()
    {
        return $this->model->with('karyawans')->get();
    }
}
