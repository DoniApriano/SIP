<?php

namespace App\Http\Controllers;

use App\Models\Tanah;
use Illuminate\Http\Request;

class TanahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $res = Tanah::all();
            return response()->json($res);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create.createTanahDanLahan',[
            'title' => 'Tambah Tanah dan Lahan'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $res = Tanah::create($request->all());
            return response()->json($res);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tanah $tanah, $id)
    {
        try {
            $res = $tanah->findOrFail($id);
            return response()->json($res);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tanah $tanah)
    {
        return view('admin.edit.editTanahDanLahanDashboard',[
            'title' => 'Edit Tanah Dan Lahan',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tanah $tanah, $id)
    {
        try {
            $res = $tanah->findOrFail($id)->update($request->all());
            return response()->json($res);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tanah $tanah, $id)
    {
        try {
            $res = $tanah->findOrFail($id)->delete();
            return response()->json($res);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
