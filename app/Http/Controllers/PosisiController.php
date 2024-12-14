<?php

namespace App\Http\Controllers;

use App\Repositories\PosisiRepositoryInterface;

class PosisiController extends Controller
{
    protected $posisiRepository;

    public function __construct(PosisiRepositoryInterface $posisiRepository)
    {
        $this->posisiRepository = $posisiRepository;
    }

    public function index()
    {
        $posisi = $this->posisiRepository->getPosisiWithKaryawan();
        return view('posisi.index', compact('posisi'));
    }
}
