<?php

namespace App\Http\Controllers;

use App\Repositories\KaryawanRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Requests\KaryawanRequest;
use App\Models\Karyawan;
use App\Services\KaryawanService;


class KaryawanController extends Controller
{
    protected $karyawanRepository;

    public function __construct(KaryawanRepositoryInterface $karyawanRepository)
    {
        $this->karyawanRepository = $karyawanRepository;
    }

    public function index()
    {
        $karyawan = $this->karyawanRepository->all();
        return view('front.karyawan', compact('karyawan'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:karyawans,email',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'departemens_id' => 'required|exists:departemens,id',
            'posisis_id' => 'required|exists:posisis,id',
            'hire_date' => 'required|date',
        ]);

        $this->karyawanRepository->create($validatedData);
        
        Karyawan::create($request->all());
        return redirect()->route('karyawan.index')->with('success', 'Karyawan added successfully.');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:karyawans,email,' . $id,
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'departemen_id' => 'required|exists:departemen,id',
            'posisi_id' => 'required|exists:posisi,id',
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
        $karyawans = $this->karyawanRepository->getKaryawanByDepartemen($departemenId);
        return view('karyawan.departemen', compact('karyawan'));
    }

    public function getByPosisi($posisisId)
    {
        $karyawans = $this->karyawanRepository->getKaryawanByPosisi($posisisId);
        return view('karyawan.posisi', compact('karyawan'));
    }
}

