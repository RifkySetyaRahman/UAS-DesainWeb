<?php

namespace App\Repositories;

use App\Repositories\DepartemenRepositoryInterface;
use App\Models\Departemen;

class DepartemenRepository extends BaseRepository implements DepartemenRepositoryInterface
{
    public function __construct(Departemen $model)
    {
        parent::__construct($model);
    }

    /**
     * Mendapatkan departemen beserta karyawannya.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getDepartemenWithKaryawan()
    {
        return $this->model->with('karyawans')->get();
    }
}
