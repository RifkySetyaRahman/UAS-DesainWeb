<?php

namespace App\Http\Controllers;

use App\Repositories\DepartemenRepositoryInterface;

class DepartemenController extends Controller
{
    protected $departemenRepository;

    public function __construct(DepartemenRepositoryInterface $departemenRepository)
    {
        $this->departemenRepository = $departemenRepository;
    }

    public function index()
    {
        $departemen = $this->departemenRepository->getDepartmentsWithKaryawans();
        return view('departemen.index', compact('departemen'));
    }
}
