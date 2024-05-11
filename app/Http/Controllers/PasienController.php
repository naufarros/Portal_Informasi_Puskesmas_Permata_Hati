<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::paginate(4);

        return view('pasien', ['pasiens' => $pasiens]);
    }

    public function create()
    {
        return view('pasien.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'nik' => 'required|unique:pasien_ugdinap,nik',
                'nama_lengkap' => 'required',
                'umur' => 'required|numeric',
                'jenis_kelamin' => 'required',
                'alamat' => 'required',
                'nomor_telepon' => 'required',
                'instalasi' => 'required',
                'penyakit' => 'required',
            ]);
    
            Pasien::create($request->all());
    
            return redirect()->route('pasien.index')
                            ->with('success','Pasien created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()
                             ->withInput()
                             ->withErrors(['error' => $e->getMessage()]);
        }
    }
    

    public function edit($nik)
    {
        $pasien = Pasien::find($nik);
        return view('pasien.edit',compact('pasien'));
    }

    public function update(Request $request, $nik)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'umur' => 'required|numeric',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'instalasi' => 'required',
            'penyakit' => 'required',
        ]);

        $pasien = Pasien::find($nik);
        $pasien->update($request->all());

        return redirect()->route('pasien.index')
                        ->with('success','Pasien updated successfully');
    }

    public function destroy($nik)
    {
        Pasien::find($nik)->delete();

        return redirect()->route('pasien.index')
                        ->with('success','Pasien deleted successfully');
    }

}