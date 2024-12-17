<?php

namespace App\Repositories;

interface DepartemenRepositoryInterface extends BaseRepositoryInterface
{
    public function getDepartemensWithKaryawans();
}
