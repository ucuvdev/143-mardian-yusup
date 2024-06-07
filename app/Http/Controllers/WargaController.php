<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Warga::All();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return view('warga.aksi')->with('data', $data);
                })
                ->make();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('warga.tambah')->header('Content-Type', 'text/html');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'nama_kk' => 'required|string',
            'jml_jiwa' => 'required',
            'alamat' => 'required'
        ];

        $error_message = [
            'nama_kk.required' => 'Kolom isian nama kepala keluarga wajib di isi',
            'nama_kk.string' => 'Format nama kepala keluarga hanya boleh diisi dengan huruf',
            'jml_jiwa.required' => 'Kolom isian jumlah jiwa wajib di isi',
            'alamat.required' => 'Kolom isian alamat wajib di isi',
        ];

        $validasi = Validator::make($request->all(), $rules, $error_message);

        if ($validasi->fails()) {
            return response()->json(['errors' => $validasi->errors()]);
        } else {
            $data = [
                'nama_kk' => $request->nama_kk,
                'jml_jiwa' => $request->jml_jiwa,
                'alamat' => $request->alamat,
            ];

            Warga::create($data);
            return response()->json(['success' => 'Data warga berhasil disimpan']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Warga::where('id', $id)->first();
        return response()->view('warga.edit', ['data' => $data])->header('Content-Type', 'text/html');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'nama_kk' => 'required|string',
            'jml_jiwa' => 'required',
            'alamat' => 'required'
        ];

        $error_message = [
            'nama_kk.required' => 'Kolom isian nama kepala keluarga wajib di isi',
            'nama_kk.string' => 'Format nama kepala keluarga hanya boleh diisi dengan huruf',
            'jml_jiwa.required' => 'Kolom isian jumlah jiwa wajib di isi',
            'alamat.required' => 'Kolom isian alamat wajib di isi',
        ];

        $validasi = Validator::make($request->all(), $rules, $error_message);

        if ($validasi->fails()) {
            return response()->json(['errors' => $validasi->errors()]);
        } else {
            $data = [
                'nama_kk' => $request->nama_kk,
                'jml_jiwa' => $request->jml_jiwa,
                'alamat' => $request->alamat,
            ];

            Warga::where('id', $id)->update($data);
            return response()->json(['success' => 'Data warga berhasil diupdate']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Warga::where('id', $id)->delete();
        return response()->json(['success' => 'Data warga telah dihapus']);
    }
}
