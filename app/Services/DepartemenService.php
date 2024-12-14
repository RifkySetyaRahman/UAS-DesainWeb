<?php

namespace App\Services;

use App\Repositories\DepartemenRepositoryInterface;

class DepartemenService
{
    protected $departemenRepository;

    public function __construct(DepartemenRepositoryInterface $departemenRepository)
    {
        $this->departemenRepository = $departemenRepository;
    }

    /**
     * Get all departemen data.
     */
    public function getAllDepartemen()
    {
        return $this->departemenRepository->all();
    }

    /**
     * Get departemen with their karyawan count.
     */
    public function getDepartmentsWithKaryawanCount()
    {
        return $this->departemenRepository->getDepartmentsWithKaryawans();
    }

    /**
     * Create a new departemen.
     */
    public function createDepartemen(array $data)
    {
        return $this->departemenRepository->create($data);
    }
}
