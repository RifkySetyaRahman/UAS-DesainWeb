<?php

namespace App\Http\Controllers;

use App\Repositories\DepartemenRepositoryInterface;
use App\Repositories\KaryawanRepositoryInterface;
use App\Repositories\PosisiRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $departemenRepository;
    protected $karyawanRepository;
    protected $posisiRepository;

    public function __construct(
        DepartemenRepositoryInterface $departemenRepository,
        KaryawanRepositoryInterface $karyawanRepository,
        PosisiRepositoryInterface $posisiRepository
    ) {
        $this->departemenRepository = $departemenRepository;
        $this->karyawanRepository = $karyawanRepository;
        $this->posisiRepository = $posisiRepository;
    }

    public function index()
    {
        $totalKaryawans = $this->karyawanRepository->all()->count();
        $totalDepartemens = $this->departemenRepository->all()->count();
        $totalPosisis = $this->posisiRepository->all()->count();

        // Get additional statistics if needed
        $departemenStats = $this->departemenRepository->getDepartemensWithKaryawans();
        $posisiStats = $this->posisiRepository->getPosisisWithKaryawans();

        return view('beranda.index', compact(
            'totalKaryawans',
            'totalDepartemens',
            'totalPosisis',
            'departemenStats',
            'posisiStats'
        ));

        return view('beranda.index'); // Pastikan ini adalah halaman yang ingin Anda tampilkan
    }
}