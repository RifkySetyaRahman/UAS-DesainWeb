<?php

namespace App\Repositories;

interface KaryawanRepositoryInterface extends BaseRepositoryInterface
{
    public function getKaryawansByDepartment($departemenId);
    public function getKaryawansByPosition($posisiId);
}
