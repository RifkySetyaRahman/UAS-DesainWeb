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
    public function getKaryawansByDepartemens($departemenId)
    {
        return $this->model->where('departemen_id', $departemenId)->get();
    }

    /**
     * Mendapatkan karyawan berdasarkan posisi.
     *
     * @param int $posisiId
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getKaryawansByPosisis($posisiId)
    {
        return $this->model->where('posisi_id', $posisiId)->get();
    }
}
    