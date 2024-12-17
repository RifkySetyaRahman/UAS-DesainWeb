<?php

namespace App\Repositories;

interface KaryawanRepositoryInterface extends BaseRepositoryInterface
{
    public function getKaryawansByDepartemens($departemensId);
    public function getKaryawansByPosisis($posisisId);
}
