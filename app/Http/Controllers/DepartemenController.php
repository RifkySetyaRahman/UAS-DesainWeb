<?php

namespace App\Http\Controllers;

use App\Repositories\DepartemenRepositoryInterface;
use App\Repositories\KaryawanRepository;

class DepartemenController extends Controller
{
    protected $departemenRepository;

    public function __construct(DepartemenRepositoryInterface $departemenRepository)
    {
        $this->departemenRepository = $departemenRepository;
    }

    public function index()
    {
        $departemen = $this->departemenRepository->getDepartemenWithKaryawan();
        return view('departemen.index', compact('departemen'));
    }
}
