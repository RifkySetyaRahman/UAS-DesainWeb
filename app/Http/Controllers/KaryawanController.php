<?php

namespace App\Http\Controllers;

use App\Repositories\KaryawanRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Requests\KaryawanRequest;
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
        $karyawans = $this->karyawanRepository->all();
        return view('karyawans.index', compact('karyawans'));
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

        return redirect()->route('karyawans.index')->with('success', 'Karyawan added successfully.');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:karyawans,email,' . $id,
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'departemens_id' => 'required|exists:departemens,id',
            'posisis_id' => 'required|exists:posisis,id',
            'hire_date' => 'required|date',
        ]);
        
        $this->karyawanRepository->update($id, $validatedData);

        return redirect()->route('karyawans.index')->with('success', 'Karyawan updated successfully.');
    }

    public function destroy($id)
    {
        $this->karyawanRepository->delete($id);

        return redirect()->route('karyawans.index')->with('success', 'Karyawan deleted successfully.');
    }

    public function getByDepartment($departemenId)
    {
        $karyawans = $this->karyawanRepository->getKaryawansByDepartment($departemenId);
        return view('karyawans.department', compact('karyawans'));
    }

    public function getByPosition($posisiId)
    {
        $karyawans = $this->karyawanRepository->getKaryawansByPosition($posisiId);
        return view('karyawans.position', compact('karyawans'));
    }
}
