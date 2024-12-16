<?php

namespace app\Services;

use app\Repositories\DepartemenRepositoryInterface;
use app\Repositories\KaryawanRepositoryInterface;
use app\Repositories\PosisiRepositoryInterface;
use app\Repositories\BaseRepositoryInterface;

class FrontService 
{
    protected $departemenRepository;
    protected $karyawanRepository;
    protected $posisiRepository;
    protected $baseRepository;

    public function __construct(DepartemenRepositoryInterface $departemenRepository, 
    KaryawanRepositoryInterface $karyawanRepository, PosisiRepositoryInterface $posisiRepository, 
    BaseRepositoryInterface $baseRepository)
    {
        $this->departemenRepository = $departemenRepository;
        //$this->karyawanRepository = $karyawanRepository;
        //$this->posisiRepository = $posisiRepository;
        //$this->baseRepository = $baseRepository;   
    }



    public function getFrontPageData()
    {
        $departemen = $this->$departemenRepository->getDepartemenWithKaryawan();
        //$karyawan = $this->$karyawanRepository->getAllKaryawan();
        //$posisi = $this->$posisiRepository->getAllPosisi();
        //$base = $this->$baseRepository->getAllBase();

        return compact('')
    }
}