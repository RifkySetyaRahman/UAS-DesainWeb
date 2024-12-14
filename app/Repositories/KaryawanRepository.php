<?php

namespace App\Repositories;

use App\Models\Karyawan;

class KaryawanRepository extends BaseRepository implements KaryawanRepositoryInterface
{
    public function __construct(Karyawan $model)
    {
        parent::__construct($model);
    }

    /**
     * Mendapatkan karyawan berdasarkan departemen.
     *
     * @param int $departemenId
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getKaryawansByDepartment($departemenId)
    {
        return $this->model->where('departemens_id', $departemenId)->get();
    }

    /**
     * Mendapatkan karyawan berdasarkan posisi.
     *
     * @param int $posisiId
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getKaryawansByPosition($posisiId)
    {
        return $this->model->where('posisis_id', $posisiId)->get();
    }
}
