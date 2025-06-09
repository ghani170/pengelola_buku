<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
 

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index(Request $request)
    {
        $search = $request->input('search');
        $bukus = Buku::query();

        if ($search) {
            $bukus = $bukus->where('judul', 'like', "%{$search}%")
                        ->orWhere('penulis', 'like', "%{$search}%")
                        ->orWhere('penerbit', 'like', "%{$search}%")
                        ->orwhere('tahun_terbit', 'like', "%{$search}%");
        }

        $bukus = $bukus->get();

        return view('bukus.index', compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bukus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'nullable',
            'tahun_terbit' => 'nullable',
        ]);

        Buku::create($request->all());

        return redirect()->route('bukus.index')->with('success', 'Buku berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        return view('bukus.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        return view('bukus.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        request()->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'nullable',
            'tahun_terbit' => 'nullable',
        ]);

       $buku->update($request->all());

       return redirect()->route('bukus.index')->with('success'. 'Buku berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();
        return redirect()->route('bukus.index')->with('success', 'buku berhasil dihapus');
    }
}
