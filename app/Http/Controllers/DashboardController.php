<?php

namespace App\Http\Controllers;

use App\Repositories\DepartemenRepositoryInterface;
use App\Repositories\KaryawanRepositoryInterface;
use App\Repositories\PosisiRepositoryInterface;
use App\Services\DepartemenService;
use App\Services\KaryawanService;
use App\Services\PosisiService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $departemenRepository;
    protected $karyawanRepository;
    protected $posisiRepository;
    protected $departemenService;
    protected $karyawanService;
    protected $posisiService;

    public function __construct(
        DepartemenRepositoryInterface $departemenRepository,
        KaryawanRepositoryInterface $karyawanRepository,
        PosisiRepositoryInterface $posisiRepository,
        DepartemenService $departemenService,
        KaryawanService $karyawanService,
        PosisiService $posisiService
    ) {
        $this->departemenRepository = $departemenRepository;
        $this->karyawanRepository = $karyawanRepository;
        $this->posisiRepository = $posisiRepository;
        $this->departemenService = $departemenService;
        $this->karyawanService = $karyawanService;
        $this->posisiService = $posisiService;
    }

    /**
     * Display the dashboard view with summary data.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // Get total counts
        $totalKaryawan = $this->karyawanRepository->all()->count();
        $totalDepartemen = $this->departemenRepository->all()->count();
        $totalPosisi = $this->posisiRepository->all()->count();

        // Get additional statistics if needed
        $departemenStats = $this->departemenRepository->getDepartemenWithKaryawan();
        $posisiStats = $this->posisiRepository->getPosisiWithKaryawan();

        $totalKaryawan = $this->karyawanService->getAllKaryawan()->count();
        $departemenStats = $this->departemenService->getDepartemenWithKaryawanCount();
        $posisiStats = $this->posisiService->getPosisiWithKaryawanCount();

        $validated = $request->validate([
            'search' => 'nullable|string|max:255',
            'date' => 'nullable|date',
        ]);

        $search = $validated['search'] ?? null;
        $date = $validated['date'] ?? null;

        return view('dashboard.index', compact(
            'totalKaryawan',
            'totalDepartemen',
            'totalPosisi',
            'departemenStats',
            'posisiStats',
            'data',
            'search',
            'date'
        ));
    }
}
