<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asnaf;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class AsnafController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Asnaf::All();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return view('asnaf.aksi')->with('data', $data);
                })
                ->make();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'nm_asnaf' => 'required|string',
            'persentase_penyaluran' => 'required'
        ];

        $error_message = [
            'nm_asnaf.required' => 'Kolom isian asnaf wajib diisi',
            'nm_asnaf.alpha' => 'Format nama asnaf hanya boleh diisi dengan huruf',
            'persentase_penyaluran.required' => 'Kolom isian persentase penyaluran wajib diisi',
        ];
        $validasi = Validator::make($request->all(), $rules, $error_message);

        if ($validasi->fails()) {
            return response()->json(['errors' => $validasi->errors()]);
        } else {
            $data = [
                'nm_asnaf' => $request->nm_asnaf,
                'persentase_penyaluran' => $request->persentase_penyaluran
            ];

            Asnaf::create($data);
            return response()->json(['success' => 'Data asnaf berhasil disimpan']);
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
        $data = Asnaf::where('id', $id)->first();
        return response()->view('asnaf.edit', ['data' => $data])->header('Content-Type', 'text/html');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'nm_asnaf' => 'required|string',
            'persentase_penyaluran' => 'required'
        ];

        $error_message = [
            'nm_asnaf.required' => 'Kolom isian asnaf wajib diisi',
            'nm_asnaf.alpha' => 'Format nama asnaf hanya boleh diisi dengan huruf',
            'persentase_penyaluran.required' => 'Kolom isian persentase penyaluran wajib diisi',
        ];
        $validasi = Validator::make($request->all(), $rules, $error_message);

        if ($validasi->fails()) {
            return response()->json(['errors' => $validasi->errors()]);
        } else {
            $data = [
                'nm_asnaf' => $request->nm_asnaf,
                'persentase_penyaluran' => $request->persentase_penyaluran
            ];

            Asnaf::where('id', $id)->update($data);
            return response()->json(['success' => 'Data asnaf berhasil diupdate']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): JsonResponse
    // public function destroy($id)
    {
        Asnaf::where('id', $id)->delete();
        // Asnaf::find($id)->delete();

        return response()->json(['success' => 'Data asnaf telah dihapus']);
    }
}
