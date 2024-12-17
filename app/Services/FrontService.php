<?php

namespace app\Services;
use App\Repositories\BaseRepository;
use App\Repositories\DepartemenRepository;
use App\Repositories\KaryawanRepository;
use App\Repositories\PosisiRepository;
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
        $this->karyawanRepository = $karyawanRepository;
        $this->posisiRepository = $posisiRepository;
        $this->baseRepository = $baseRepository;
    }



    public function getFrontPageData()
    {
        $departemen = $this->departemenRepository->getDepartemensWithKaryawans();
$karyawan = $this->karyawanRepository->All();
$posisi = $this->posisiRepository->All();
$base = $this->baseRepository->All();

return compact('departemen', 'karyawan', 'posisi', 'base');

    }
}