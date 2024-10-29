<?php
namespace App\Http\Controllers;

use App\Models\Pencatatan_Kalkulasi;
use Illuminate\Http\Request;

class PencatatanKalkulasiController extends Controller
{
    public function index()
    {
        return Pencatatan_Kalkulasi::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'harga_sawit' => 'required|numeric',
            'hasil_panen' => 'required|numeric',
            'tanggal_panen' => 'required|date',
            'pengeluaran_panen' => 'required|numeric',
        ]);

        $record = Pencatatan_Kalkulasi::create($validated);

        return response()->json($record, 201);
    }

    public function show($id)
    {
        $record = Pencatatan_Kalkulasi::find($id);
        return response()->json($record);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'harga_sawit' => 'numeric',
            'hasil_panen' => 'numeric',
            'tanggal_panen' => 'date',
            'pengeluaran_panen' => 'numeric',
        ]);

        $record = Pencatatan_Kalkulasi::findOrFail($id);
        $record->update($validated);

        return response()->json($record);
    }

    public function destroy($id)
    {
        $record = Pencatatan_Kalkulasi::findOrFail($id);
        $record->delete();
        return response()->json(["message"=> "DELETED"]);
    }
}