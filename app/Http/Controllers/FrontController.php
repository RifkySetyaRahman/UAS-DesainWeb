<?php
namespace App\Http\Controllers;

use App\Repositories\DepartemenRepositoryInterface;
use App\Repositories\KaryawanRepositoryInterface;
use App\Repositories\PosisiRepositoryInterface;
use App\Services\KaryawanService;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    protected $departemenRepository;
    protected $karyawanRepository;
    protected $posisiRepository;
    protected $karyawanService;

    public function __construct(
        DepartemenRepositoryInterface $departemenRepository,
        KaryawanRepositoryInterface $karyawanRepository,
        PosisiRepositoryInterface $posisiRepository,
        KaryawanService $karyawanService
    ) {
        $this->departemenRepository = $departemenRepository;
        $this->karyawanRepository = $karyawanRepository;
        $this->posisiRepository = $posisiRepository;
        $this->karyawanService = $karyawanService;
    }

    /**
     * Display the dashboard view with summary data.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'search' => 'nullable|string|max:255',
            'date' => 'nullable|date',
        ]);

        // Get total counts
        $totalKaryawan = $this->karyawanRepository->all()->count();
        $totalDepartemen = $this->departemenRepository->all()->count();
        $totalPosisi = $this->posisiRepository->all()->count();

        // Get additional statistics
        $departemenStats = $this->departemenRepository->getDepartemenWithKaryawan();
        $posisiStats = $this->posisiRepository->getPosisiWithKaryawan();

        // Extract search and date from validated input
        $search = $validated['search'] ?? null;
        $date = $validated['date'] ?? null;

        return view('front.index', compact(
            'totalKaryawan',
            'totalDepartemen',
            'totalPosisi',
            'departemenStats',
            'posisiStats',
            'search',
            'date'
        ));
    }
}