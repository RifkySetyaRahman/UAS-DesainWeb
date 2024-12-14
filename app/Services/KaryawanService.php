<?php

namespace App\Services;

use App\Repositories\KaryawanRepositoryInterface;

class KaryawanService
{
    protected $karyawanRepository;

    public function __construct(KaryawanRepositoryInterface $karyawanRepository)
    {
        $this->karyawanRepository = $karyawanRepository;
    }

    /**
     * Get all karyawan data.
     */
    public function getAllKaryawan()
    {
        return $this->karyawanRepository->all();
    }

    /**
     * Get karyawan by ID.
     */
    public function getKaryawanById($id)
    {
        return $this->karyawanRepository->find($id);
    }

    /**
     * Create a new karyawan.
     */
    public function createKaryawan(array $data)
    {
        return $this->karyawanRepository->create($data);
    }

    /**
     * Update karyawan data.
     */
    public function updateKaryawan($id, array $data)
    {
        return $this->karyawanRepository->update($id, $data);
    }

    /**
     * Delete karyawan by ID.
     */
    public function deleteKaryawan($id)
    {
        return $this->karyawanRepository->delete($id);
    }
}
