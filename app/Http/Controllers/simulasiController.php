<?php

namespace App\Http\Controllers;
use App\Models\simulasi;
use Illuminate\Http\Request;

class simulasiController extends Controller
{
    //
    public function index() 
   
    {
    $simulasi = Simulasi::get();
    return response()->json(data: $simulasi)
    }

    public function storeSimulasi(Request $request)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'nama_kebun' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'luas_kebun' => 'required|numeric',
            'jumlah_pohon' => 'required|integer',
            'jenis_bibit' => 'required|string|max:255',
            'jenis_tanah' => 'required|string|max:255',
        ]);

        // Store the data in the simulasi table
        $simulasi = Simulasi::create($validatedData);

        return response()->json(['message' => 'Data added successfully', 'data' => $simulasi], 201);
    }

    public function delete(string $id)
    {
        Simulasi::delete($id)
        return response()->json("Deleted");
    }
}
