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
        $posisis = $this->posisiRepository->getPositionsWithKaryawans();
        return view('posisi.index', compact('posisis'));
    }
}
