<?php

namespace App\Services;

use App\Repositories\PosisiRepositoryInterface;

class PosisiService
{
    protected $posisiRepository;

    public function __construct(PosisiRepositoryInterface $posisiRepository)
    {
        $this->posisiRepository = $posisiRepository;
    }

    /**
     * Get all posisi data.
     */
    public function getAllPosisi()
    {
        return $this->posisiRepository->all();
    }

    /**
     * Get posisi with their karyawan count.
     */
    public function getPosisisWithKaryawanCount()
    {
        return $this->posisiRepository->getPosisisWithKaryawans();
    }

    /**
     * Create a new posisi.
     */
    public function createPosisi(array $data)
    {
        return $this->posisiRepository->create($data);
    }
}
