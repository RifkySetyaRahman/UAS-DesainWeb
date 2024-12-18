<?php

namespace App\Http\Controllers;

use App\Repositories\KaryawanRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    protected $karyawanRepository;

    public function __construct(KaryawanRepositoryInterface $karyawanRepository)
    {
        $this->karyawanRepository = $karyawanRepository;
    }

    public function index()
    {
        $karyawans = $this->karyawanRepository->all();
        return view('karyawan.index', ['karyawans' => $karyawans]);
    }

//     public function create()
//  {
//     $departemens = departemen::all(); // Ambil semua data departemen
//     $posisis = posisi::all(); // Ambil semua data posisi

//     return view('karyawan.create', compact('departemens', 'posisis'));
//  }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:karyawans,email',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'departemen_id' => 'required|exists:departemens,id',
            'posisi_id' => 'required|exists:posisis,id',
            'hire_date' => 'required|date',
        ]);

        $this->karyawanRepository->create($validatedData);
        return redirect()->route('karyawan.index')->with('success', 'Karyawan added successfully.');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:karyawans,email,' . $id,
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'departemen_id' => 'required|exists:departemens,id',
            'posisi_id' => 'required|exists:posisis,id',
            'hire_date' => 'required|date',
        ]);
        
        $this->karyawanRepository->update($id, $validatedData);

        return redirect()->route('karyawan.index')->with('success', 'Karyawan updated successfully.');
    }

    public function destroy($id)
    {
        $this->karyawanRepository->delete($id);

        return redirect()->route('karyawan.index')->with('success', 'Karyawan deleted successfully.');
    }

    public function getByDepartemen($departemenId)
    {
        $karyawans = $this->karyawanRepository->getKaryawansByDepartemens($departemenId);
        return view('karyawan.departemen', compact('karyawans'));
    }

    public function getByPosisi($posisiId)
    {
        $karyawans = $this->karyawanRepository->getKaryawansByPosisis($posisiId);
        return view('karyawan.posisi', compact('karyawans'));
    }
}
