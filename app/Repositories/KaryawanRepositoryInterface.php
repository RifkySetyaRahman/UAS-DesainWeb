<?php

namespace App\Repositories;

interface KaryawanRepositoryInterface extends BaseRepositoryInterface
{
    public function getKaryawanByDepartemen($departemenId);
    public function getKaryawanByPosisi($posisiId);
}
