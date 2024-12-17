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
    public function getDepartemensWithKaryawanCount()
    {
        return $this->departemenRepository->getDepartemensWithKaryawans();
    }

    /**
     * Create a new departemen.
     */
    public function createDepartemen(array $data)
    {
        return $this->departemenRepository->create($data);
    }
}
