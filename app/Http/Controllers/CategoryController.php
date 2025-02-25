<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKategoriRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kategori = Category::all();
        // $cariid = Category::find(1); // hanya untuk primary key  id
        // $carinama = Category::where('nama', 'LIKE', '%ires%');

        return view('admin.kategori', ['kat' => $kategori]);
            // route('nama_route')
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
    public function store(StoreKategoriRequest $request)
    {//
        try {
        $param = $request->validated();

        // model eloquent untuk menyimpan data

        Category::create($param);

        // $kategori = new Category();

        // $kategori->nama = $param['nama'];
        // $kategori->deskripsi = $param['deskripsi'];

        // $kategori->save();



        return redirect()
                ->route('admin.inkategori')
                ->with('success', 'Data Berhasil di Inputkan');
        }
        catch (\Exception $e)
        {
            return redirect()
                    ->route('admin.inkategori')
                    ->with('error', $e->getMessage());
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
